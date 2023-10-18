bool checkPerfectNumber(int num){
    int i,s=0;
    for(i=1;i<num/2+1;i++)
    {
        if(num%i==0){
            s=s+i;
        }
    }
        if(num==s){
            return true;
        }
        else{
            return false;
        }
}
