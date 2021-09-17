#include<stdio.h>
int main(){
	int (*x)[4],i;
	int arr[]={1,2,3,4};
	for(i=0;i<4;i++){
		x[i] = arr;
		printf("%d\n",*(x+i));
	}
}
