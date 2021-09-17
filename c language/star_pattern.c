#include<stdio.h>
int main(){
	int i,j,k,i_count,j_count,a,b;
	printf("Please Enter The Number Of Rows:");
	scanf("%d",&i_count);
	printf("............................................................................\n");
	j_count = (2*i_count)-1;
	for(i=1;i<=i_count;i++){
		k=1;
		a = (i_count+1)-i;
			b = (i_count-1)+i;
		for(j=1;j<=j_count;j++){
			if(j>=a&&j<=b&&k){
				printf("*");
				k = 0;
			}
			else{
				printf(" ");
				k = 1;
			}
		}
		printf("\n");
		
	}
}
