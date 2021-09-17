#include<stdio.h>
#include<string.h>
int main(){
	char full[20]="abc def ghi";
	int i,a=0;
	for(i=0;full[i]!='\0';i++){
		if(full[i]!=" "){
//			printf("%c",full[i]);
			printf("%d ",i);
		}
		else{
//			printf("else");
			exit(1);
		}
	}
}
