#include <stdio.h>
int  main(){
int a=12345678;
printf("%d\n",a);
char *b=(char *)&a;
printf("sizeof %lu  %lu \n",sizeof(*b),sizeof(a));
printf("%c\n",*b);
}
