#include<stdio.h>
int main(){
	int arr[]={1,2,3,4,5,6,7,8};
	int x;
	for(x=0;x<8;x++)
		printf("%d address = value %d\n",&arr[x],arr[x]);
}
