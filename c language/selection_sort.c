#include<stdio.h>
void swap(int * a , int * b){
	int temp;
	temp = *a;
	*a = *b;
	*b = temp;	
}
void selectionSort(int arr[],int size){
	int i, j;
	for(i=0;i<size-1;i++){
		int min = i;
		for(j=i+1;j<size;j++){
			if(arr[j]<arr[min]){
				min = j;
			}
		}
		swap(&arr[min],&arr[i]);
	}
}
void printarray(int arr[],int s){
	int i;
	for(i=0;i<s;i++){
		printf("%d\n",arr[i]);
	}
}
int main(){
	int arr[] = {34,43,23,643,12,788,435,3};
	int size = 8;
	selectionSort(arr,size);
	printarray(arr,size);
}
