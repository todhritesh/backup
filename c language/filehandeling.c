#include<stdio.h>
#include<string.h>
int main(){
	FILE * file;
	int i ;
	char str[50];
	if(file = fopen("animal.txt","r")){
					fprintf(file,"----------------------------------------------\n");
//		for(i=0;i<10;i++){
//			scanf("%s",str);
//			fputs(strcat(str,"\n"),file);
////			fprintf(file,str);
//			fprintf(file,"\n");
//		}
		printf("%s",fgets(str,10,file));
	}
	else{
		printf("file not opened");
	}
	fclose(file);
	

}
