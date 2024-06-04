#include <stdio.h>
 
int main() {
    long long n;
    scanf("%lld", &n);
    if (n >= 2 && n <= 2e18) {
        printf("25\n");
    }
    return 0;
}
