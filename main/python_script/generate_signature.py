from mysql_connector import MySQLConnector
from queries import Query
from user import User
from group import Group
from keys_generator import KeysGenerator
from signature import Signature
from representative_signature import RepresentativeSignature
import sys
def get_group_hash_value(conn, group_id):
  cursor = conn.cursor(dictionary=True)
  query = Query.get_group_info()
  cursor.execute(query, (group_id,))
  hash_value = ''
  for row in cursor:
    hash_value = row['hash_value']

  return hash_value

def get_users_in_group(conn, group_id):
  cursor = conn.cursor(dictionary=True)
  query = Query.get_users_in_group()
  cursor.execute(query, (group_id,))
  users = []
  for row in cursor:
    private_key = int(row['private_key'])
    private_value = int(row['private_value'])
    user_name = row['user_name']
    user = User(user_name, private_key, private_value)
    users.append(user)

  return users

def update_group(conn, group_id, public_key, public_value):
  cursor = conn.cursor(dictionary=True)
  query = Query.update_group()
  cursor.execute(query, (public_key, public_value, group_id,))
  conn.commit()

def update_user(conn, public_key, public_value, group_id, user_name):
  cursor = conn.cursor(dictionary=True)
  query = Query.update_user()
  cursor.execute(query, (public_key, public_value, group_id, user_name))
  conn.commit()

def update_users(conn, group_id, users):
  for user in users:
    update_user(conn, user.public_key, user.public_value, group_id, user.user_name)

def insert_group_keys(conn, group_id, q, p, g):
  cursor = conn.cursor(dictionary=True)
  query = Query.insert_group_keys()
  cursor.execute(query, (group_id, q, p, g,))
  conn.commit()

def insert_group_signature(conn, group_id, part_1, part_2):
  cursor = conn.cursor(dictionary=True)
  query = Query.insert_group_signature()
  cursor.execute(query, (group_id, part_1, part_2,))
  conn.commit()

def users_init_keys(users, q, p, g):
  for user in users:
    user.init_keys(q, p, g)

def generate_signature(group_id, conn):
  key_generator = KeysGenerator()
  key_generator.init_keys()
  q, p, g = key_generator.get_keys()

  insert_group_keys(conn, group_id, q, p, g)
  print(q,p,g)

  users = get_users_in_group(conn, group_id)
  users_init_keys(users, q, p, g)
  update_users(conn, group_id, users)

  group = Group()
  for user in users:
    group.add_user(user)

  group.generate_group_public_key(p)
  group.generate_group_public_value(p)
  public_value, public_key = group.public_value, group.public_key
  print(public_value, public_key)

  update_group(conn, group_id, public_key, public_value)  

  hash_value = get_group_hash_value(conn, group_id)
  rs = RepresentativeSignature(hash_value)
  hash_value_decimal = rs.get_hash_decimal_value()
  print(hash_value_decimal)

  signature = Signature()
  signature.generate_part_1(public_value, hash_value_decimal, q)
  signature.generate_part_2(public_value, public_key, q)
  part_1, part_2 = signature.part_1, signature.part_2
  print(part_1, part_2)

  insert_group_signature(conn, group_id, part_1, part_2)


def main():
  group_id = sys.argv[1]
  try:
    connector = MySQLConnector()
    conn = connector.get_connection()
    generate_signature(group_id, conn)
    connector.close_connection()
  except Exception as e:
    print(e)


if __name__ == '__main__':
  main()

