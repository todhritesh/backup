#include<stdio.h>
int main(){
	int i,j;
	int i_limit , j_limit;
	scanf("%d",&i_limit);
	j_limit = (i_limit*2) - 1;
	for(i=0;i<i_limit;i++){
		for(j=1;j<=j_limit;j++){
			if(i==0){
				printf("*");
			}
			else if(j>i_limit-i && j<i_limit+i){
				printf(" ");
			}
			else{
				printf("*");
			}
		}
		printf("\n");
	}
}
