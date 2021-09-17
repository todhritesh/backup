#include<stdio.h>
int main(){
	int arr[]={2,93,44,33,54,5,234,435,65,6,67};
	int size=11;
	int x,y,temp,b;
	printf("bfore sorting ---\n");
	for(b=0;b<=size-1;b++){
		printf("%d\n",arr[b]);
	}
	for(x=1;x<=size;x++){
		for(y=0;y<=4;y++){
			if(arr[y]>arr[y+1]){
				temp = arr[y+1];
				arr[y+1]=arr[y];
				arr[y]=temp;
			}
		}
	}
	printf("sorted ---------------\n");
	int a;
	for(a=0;a<=5;a++){
		printf("%d\n",arr[a]);
	}
}
