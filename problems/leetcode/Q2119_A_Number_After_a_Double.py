def isSameAfterReversals(self, num):
  t = num
  s = 0
  while num > 0: #526
      r = num % 10 #6
      s = s * 10 + r #6
      num = num // 10 #52
  s1 = 0
  while s > 0:
      r1 = s % 10
      s1 = s1 * 10 + r1
      s = s // 10
  if s1 == t:
      return True
  return False
