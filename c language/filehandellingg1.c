#include<stdio.h>
int main(){
	FILE * file ;
	char str[100];
	file = fopen("hello.txt","r");
	if(file!=NULL){
		printf("open");
		printf("%s",fgets(str,50,file));
	}
	else{
		printf("not open");
		exit(1);
	}
	fclose(file);
}
