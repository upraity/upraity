bool isPerfectSquare(int num){
    int r;
    #include<math.h>
    r = pow(num,0.5);
    if(r*r==num)
    {
        return true;
    }
    else{
        return false; 
    }
}
