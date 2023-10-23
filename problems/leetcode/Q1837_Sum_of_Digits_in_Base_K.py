class Solution(object):
    def sumBase(self, n, k):
        s=0
        while n > 0: 
            r = n%k
            s = s+r  
            n=n//k    
        return s
