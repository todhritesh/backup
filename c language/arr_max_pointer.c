#include<stdio.h>
int max(int arr[]);
int main(){
	int (*p)();
	p = max;
	int arr[2];
	printf("enter two values");
	int i;
	for(i=0;i<2;i++)
		scanf("%d",arr+i);
	int s = p(arr);
	if(s==0)
		printf("Both are same");
	else
		printf("%d is greater",s);
}

int max(int arr[]){
	if(arr[0]==arr[1])
		return 0;
	else if(arr[0]>arr[1])
		return arr[0];
	else
		return arr[1];
}



