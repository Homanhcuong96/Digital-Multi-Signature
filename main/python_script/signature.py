class Signature:
  def __init__(self):
    self.part_1 = -1
    self.part_2 = -1

  def generate_part_1(self, r, h, q):
    self.part_1 =  r * h % q

  def generate_part_2(self, r, y, q):
    self.part_2 = r * pow(y, self.part_1) % q

  def set_part_1(self, part_1):
    self.part_1 = part_1

  def set_part_2(self, part_2):
    self.part_2 = part_2

  #h is hash value of message, y is public key of group, r is public value of group   
  def verify_integrity(self, r, y, h, q):

    temp_part_1 = int(r) * int(h) % int(q)
    temp_part_2 = int(r) * pow(int(y), temp_part_1) % int(q)
    return (temp_part_1 == int(self.part_1)) and (temp_part_2 == int(self.part_2))
