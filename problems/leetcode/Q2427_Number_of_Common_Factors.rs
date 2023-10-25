impl Solution {
    pub fn common_factors(a: i32, b: i32) -> i32 {
        let mut c=0;
        for i in 1..a+b{
            if(a%i==0 && b%i==0){
                c=c+1;
            }
        }
        return c;
    }
}
