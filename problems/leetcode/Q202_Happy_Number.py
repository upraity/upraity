class Solution(object):
    def isHappy(self, n):
        """
        :type n: int
        :rtype: bool"""

        while n > 9: 
            n = sum(int(d)**2 for d in str(n)) 
        return n == 1 or n == 7
