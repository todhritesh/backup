#include<stdio.h>
int main(){
	struct student {
		char name[10];
		int roll,age;
	};
	struct student s1;
	gets(s1.name);
	scanf("%d",&s1.roll);
	scanf("%d",&s1.age);
	printf("%s | %d | %d ",s1.name,s1.roll,s1.age);
}
