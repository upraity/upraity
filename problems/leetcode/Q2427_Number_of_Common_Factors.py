class Solution(object):
    def commonFactors(self, a, b):
        c=0
        for i in range(1,a+b):
            if a%i==0 and b%i==0 :
                c=c+1
        return c
