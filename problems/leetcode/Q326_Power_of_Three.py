def isPowerOfTwo(self, n):
  for i in range(0,31):
    if n == 3**i:
      return 1
  return 0
