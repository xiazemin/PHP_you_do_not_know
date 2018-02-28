#include <stdio.h>
int main()
{
    int val = 1;
    char *ret = (char *)&val;
    if (*ret == 1)
        printf("小端存储");
    else
        printf("大端存储");
    return 0;
}
