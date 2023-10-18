def findComplement(self, num):
  s = []
  while num > 0: # 5
      r = str(num % 2)# 
      s.append(r)
      num = num // 2
  s = s[::-1]
  b = "".join(d for d in s)
  x = b.replace('0','2').replace('1','0').replace('2','1')
  sum = 0
  i = 0
  x = int(x)
  while x > 0:
      r1 = x % 10
      m = r1 * pow(2,i)
      i = i + 1
      x = x // 10
      sum = sum + m
  return sum
