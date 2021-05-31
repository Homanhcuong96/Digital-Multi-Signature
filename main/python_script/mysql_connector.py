import mysql.connector
from mysql.connector import errorcode

USER = "root"
PASSWORD = "012689987"
HOST = "localhost"
DATABASE = "webdemo"

config = {
  'user': USER,
  'password': PASSWORD,
  'host': HOST,
  'database': DATABASE,
  'raise_on_warnings': True
}

class MySQLConnector():
  mysql_connection = None

  def __init__(self):
    pass

  @classmethod
  def init_connection(cls):
    try:
      cls.mysql_connection = mysql.connector.connect(**config)
    except mysql.connector.Error as err:
      if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
        print("Something is wrong with your user name or password")
      elif err.errno == errorcode.ER_BAD_DB_ERROR:
        print("Database does not exist")
      else:
        print(err)
      return None

    return cls.mysql_connection

  @classmethod
  def get_connection(cls):
    if cls.mysql_connection is not None:
      return cls.mysql_connection
    else:
      return cls.init_connection()

  @classmethod
  def close_connection(cls):
    cls.mysql_connection.close()