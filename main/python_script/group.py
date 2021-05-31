class Group:
  def __init__(self):
    self.users = []
    self.public_key = -1 # default value, need create!
    self.public_value = -1 # default value

  def add_user(self, user):
    self.users.append(user)

  def generate_group_public_key(self, p):
    temp_key = 1    
    for user in self.users:
      temp_key = temp_key * user.public_key
    self.public_key = temp_key % p

  def generate_group_public_value(self, p):
    temp_value = 1    
    for user in self.users:
      temp_value = temp_value * user.public_value
    self.public_value = temp_value % p