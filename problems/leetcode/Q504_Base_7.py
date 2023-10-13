def convertToBase7(self, num):
        if num == 0:
            return "0"
        s = []
        minus = False
        if num < 0:
            num = num * (-1)
            minus = True
        while num > 0:
            r = str(num % 7)
            s.append(r)
            num = num // 7
        s = s[::-1]
        if minus == False:
            return "".join(d for d in s)
        if minus == True:
            n =  "".join(d for d in s)
            return "-" + n
