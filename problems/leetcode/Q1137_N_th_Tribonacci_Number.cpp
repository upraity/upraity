class Solution {
public:
    int tribonacci(int n) {
        int i, a = 0, b = 1, c = 1, d;
        if(n==0) return 0;
        if(n==1) return 1;
        for (i = 3; i <= n; i++) { 
            d = a + b + c;   
            a = b;            
            b = c;            
            c = d;            
        }
        return c;
    }
};