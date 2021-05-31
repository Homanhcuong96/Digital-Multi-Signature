
class Query:
  def __init__(self):
    pass

  @staticmethod
  def get_group_info():
    return "SELECT * FROM `groups` WHERE group_id = %s"

  @staticmethod
  def update_group():
    return "UPDATE `groups` SET public_key = %s, public_value = %s WHERE group_id = %s"

  @staticmethod
  def insert_group_keys():
    return "INSERT INTO group_keys(group_id, q, p, g) VALUES (%s, %s, %s, %s)"
    
  @staticmethod
  def get_user():
    return "SELECT * FROM `user_keys` WHERE user_name = %s"

  @staticmethod
  def get_users_in_group():
    return "SELECT * FROM `user_keys` WHERE group_id = %s"

  @staticmethod
  def update_user():
    return "UPDATE `user_keys` SET public_key=%s, public_value=%s WHERE group_id=%s AND user_name=%s"

  @staticmethod
  def insert_group_signature():
    return "INSERT INTO group_signature(group_id, part_1, part_2) VALUES (%s, %s, %s)"

  @staticmethod
  def get_group_signature():
    return "SELECT * from `group_signature` WHERE group_id = %s"

  @staticmethod
  def get_group_keys():
    return "SELECT * from `group_keys` WHERE group_id = %s"