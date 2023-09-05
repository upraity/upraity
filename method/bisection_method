from math import*
def fun(x):
        return(x**3-4*x-9)
def bisection(x0,x1):
    i=1
    for _ in range(max):
           x2 = ( x0 + x1 ) / 2
           print("\n  So the root lie b/w the" ,x0, "and", x1)
           print(i,"iteration x(",i,") = (",x0,"+",x1,")/2 = ",x2)
           print("f(",x2,") = ",x2**3-4*x2-9)
           #print(i,x2,fun(x2))
           
           if fun(x0) * fun(x2) > 0:
                x0 = x2
           else:x1 = x2
           i+=1
x0 = float(input("Enter value of x0: "))
x1 = float(input("Enter value of x1: "))
max = int(input("Enter the value of maximum iteration: "))
if fun(x0)*fun(x1)>0:
        print("Root is not exsist in this value")
else:
        bisection(x0,x1)
