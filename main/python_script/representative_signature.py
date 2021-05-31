from hashlib import sha256

class RepresentativeSignature:
  def __init__(self, hash_digest=''):
    self.content = ''
    self.hash_digest = hash_digest

  def read_content_from_file(self, file):
    with open(file, 'r') as f:
      self.content = f.read()

  def generate_hash_digest(self):
    self.hash_digest = sha256(self.content.encode()).hexdigest()

  def get_hash_decimal_value(self):
    return int(self.hash_digest, 16)

  def get_hash_digest(self):
    return self.hash_digest