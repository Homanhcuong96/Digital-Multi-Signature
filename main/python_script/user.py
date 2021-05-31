class User:
  def __init__(self, user_name, private_key, private_value):
    self.user_name = user_name
    self.private_key = private_key
    self.public_key = -1
    self.private_value = private_value
    self.public_value = -1

  def init_keys(self, q, p, g):
    self.generate_public_key(q, p, g)
    self.generate_public_value(q, p, g)

  def set_private_key(self, private_key):
    self.private_key = private_key
  def set_private_value(self, private_value):
    self.private_value = private_value

  def generate_public_key(self, q, p, g):
    self.public_key = pow(g, self.private_key, p)


  def generate_public_value(self, q, p, g):
    self.public_value = pow(g, self.private_value, p)