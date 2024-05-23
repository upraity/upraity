class Solution(object):
    def subtractProductAndSum(self, n):
        """
        :type n: int
        :rtype: int
        """
        t=n
        s=0
        s1=1
        while n>0:
            r=n%10
            s=s+r
            s1=s1*r
            n=n/10
        return s1-s
