from group import Group
from user import User
from keys_generator import KeysGenerator
from signature import Signature
from representative_signature import RepresentativeSignature

if __name__ == '__main__':
  key_generator = KeysGenerator()
  key_generator.init_keys()
  q, p, g = key_generator.get_keys()
  
  print("{}, {}, {}".format(q, p, g))
  group = Group()

  user1 = User(29,41)
  user1.init_keys(q, p, g)
  group.add_user(user1)

  user2 = User(31,37)
  user2.init_keys(q, p, g)
  group.add_user(user2)

  group.generate_group_public_key(p)
  group.generate_group_public_value(p)

  # create hash value
  rs = RepresentativeSignature()
  rs.read_content_from_file()
  
  rs.generate_hash_digest()

  h = rs.get_hash_decimal_value()
  r, y = group.public_value, group.public_key

  signature = Signature()
  signature.generate_part_1(r, h, q)
  signature.generate_part_2(r, y, q)

  print(signature.part_1, signature.part_2)
  print(signature.verify_integrity(r, y, h, q))
