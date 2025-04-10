class Solution(object):
    def addToArrayForm(self, num, k):
        """
        :type num: List[int]
        :type k: int
        :rtype: List[int]
        """
        n = 0
        for digit in num:
            n = n * 10 + digit
        total = n + k
        result = []
        for digit in str(total):
            result.append(int(digit))
        return result

        
