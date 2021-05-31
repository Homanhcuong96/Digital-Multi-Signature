from random import randint
from math import sqrt
from itertools import count, islice

def is_prime(n):
  return n > 1 and all(n%i for i in islice(count(2), int(sqrt(n)-1)))

class KeysGenerator:
  def __init__(self):
    self.q = -1
    self.p = -1
    self.g = -1

  def create_random_q(self):
    while True:
      ramdom_number = randint(10000,50000)
      if is_prime(ramdom_number):
        self.q = ramdom_number
        return

  def find_p(self):
    counter = 100
    while True:
      p = self.q * counter + 1
      if is_prime(p):
        self.p = p
        return
      counter +=1

  def find_g(self):
    while True:
      h = randint(1, self.p)
      g = pow(h, (self.p - 1) / self.q, self.p)
      if g != 1:
        self.g = g
        return

  def init_keys(self):
    self.create_random_q()
    self.find_p()
    self.find_g()

  def get_keys(self):
    return self.q, self.p, self.g