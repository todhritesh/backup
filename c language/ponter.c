#include<stdio.h>
int main(){
//	int num[2]={3,4};
//	int (*ptr)[2];
//	ptr = &num;
//	printf("ptr = %d \n",ptr[0]);
//		printf("ptr = %d \n",ptr[1]);

int arr[]={23,32,454};
int (*p)[3];
p = arr;
printf("ptr 1 is %d\n",*p);
printf("ptr 2 is %d\n",*(p+1));


}
