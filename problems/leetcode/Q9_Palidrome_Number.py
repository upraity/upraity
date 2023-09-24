class Solution(object):
    def isPalindrome(self, x):
        i = x
        re = 0
        """
        :type x: int
        :rtype: bool
        """
        while x > 0:
            r = x % 10
            re = (re * 10) + r
            x = x//10
        if i == re:
            return 1
        else:
            return 0
