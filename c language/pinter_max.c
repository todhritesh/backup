#include<stdio.h>
int max(int,int);
int main(){
	int (*p)(int , int);
	int n1,n2;
	printf("Enter two numbers");
	scanf("%d%d",&n1,&n2);
	p = max;
	int m = p(n1,n2);
	if(m==0)
		printf("Both are equal");
	else
		printf("%d is greater",m);
}

int max(int x , int y){
	if(x==y)
		return 0;
	else if(x>y)
		return x;
	else
		return y;
}
