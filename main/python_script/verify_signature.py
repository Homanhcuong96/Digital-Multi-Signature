from mysql_connector import MySQLConnector
from queries import Query
from signature import Signature
import sys


def verify_signature(part_1, part_2, public_key, public_value, q, hash_values):
  signature = Signature()

  signature.set_part_1(part_1)
  signature.set_part_2(part_2)
  return signature.verify_integrity(public_value, public_key, hash_values, q)

def main():
  try:
    part_1 = sys.argv[1]
    part_2 = sys.argv[2]
    public_key = sys.argv[3]
    public_value = sys.argv[4]
    q = sys.argv[5]
    hash_values = sys.argv[6]
    result = verify_signature(part_1, part_2, public_key, public_value, q, int(hash_values, 16))
    if result == True:
      print(result)
  except Exception as e:
    return
  

if __name__ == '__main__':
  main()