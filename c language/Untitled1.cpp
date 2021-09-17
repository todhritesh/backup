#include <stdio.h>
int main(){
	FILE *f;
	f = fopen("h1.txt","r");
	if(f==NULL){
		printf("file not found");
	}	
	int n;
	fscanf(f,"%d",&n);
	fclose(f);
}
