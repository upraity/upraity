def reverse(self, x):
  if x > (2**30) or x < (-2**31)+1:
    return 0
  m = 0
  if x < 0:
    x = x * (-1)
    m = 1
  s = 0
  while x > 0: # 123 12 1
    r = x % 10 # 3 2 1
    s = s * 10 + r # 321
    x = x // 10 # 12 1 0
  if m == 0:
    return s
  elif m == 1:
    return s * (-1)
