#include<stdio.h>
#include<string.h>
int main(){
	printf("Enter any number");
	char full[20];
	int i,l,a=0;
	gets(full);
	l = strlen(full);
	for(i=0;i<l;i++){
		if(full[i]==" "){
			a++;
		}
		else if(full[i]!=" " && a==0){
			printf("%d\t%d\n",l,a);
			printf("%c",full[i]);
		}
		else if(full[i]!=" " && a==1){
//			printf("%c",full[i]);
		}
		
	}
}
