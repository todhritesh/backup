#include<stdio.h>
int prime(int x){
	int i,a=0;
	for(i=2;i<x;i++){
		if((x%i==0) && a!=1)
			a++;
		if(a==1)
			return 0;
	}
}

void main(){
	int x;
	scanf("%d",&x);
	if(prime(x)==0)
		printf("Not prime no.");
	else{
		printf("Prime no");
	}
}
