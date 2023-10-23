class Solution(object):
    def isUgly(self, n):
        if n == 1:
            return 1
        if n <=0:
            return 0
        for num in [2,3,5]:
            while n % num == 0:
                n = n // num
        if n==1:
            return 1
        return 0
