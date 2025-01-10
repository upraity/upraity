int search(int* nums, int numsSize, int target) {
    int lb=0, ub=numsSize-1, mid;
    while(lb<=ub){
        mid = (lb+ub)/2;
        if(nums[mid]==target){
            return mid;
        }
        else if(nums[mid]>target){
            ub=mid-1;
        }
        else{
            lb=mid+1;
        }
    }
    return -1;
}
