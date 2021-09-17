#include<stdio.h>
const int MAX = 5;
int main(){
	int value[]={3,4,5,6,76};
	int i,*ptr;
	ptr = value;
	for(i=0;i<MAX;i++){
		printf("%d address is %d \n",i+1,ptr);
		printf("%d value is %d \n",i+1,*ptr);
		ptr++;
	}
	
	ptr--;
	i--;
	printf("------------------------------------\n");
	while(i>=0){
		printf("%d address is %d \n",i+1,ptr);
		printf("%d value is %d \n",i+1,*ptr);
		ptr--;
		i--;
	}
}
