#include<stdio.h>

int maxSize = 8;

int stack[8];

int top = -1;

int isEmpty(){
	if(top == -1){
		return 1;
	}
	else{
		return 0;
	}
}

int isFull(){
	if(top == maxSize){
		return 1;
	}else{
		return 0;
	}
}

int peek(){
	return stack[top];
}

int pop(){
	int data;
	if(!isEmpty()){
		data = stack[top];
		top = top-1;
		return data;
	}else{
		printf("could not retrive data , stack is empty\n");
	}
}

int push(int data){
	if(!isFull()){
		top = top+1;
		stack[top]=data;
	}
	else{
		printf("could not insert new data , satack is full\n");
	}
}


int main(){
	push(2);
	push(4);
	push(5);
	push(7);
	push(345);
	push(65);
	push(34);
	push(55);
	push(32);
	
	printf("element at top of the stack is %d \n",peek());
	printf("Element \n");
	
	while(!isEmpty()){
		int data = pop();
		printf("%d \n",data);
	}
	printf("stack is full : %s \n",isFull()? "true":"false");
	printf("stack is empty : %s \n",isEmpty() ? "true":"false");
}

