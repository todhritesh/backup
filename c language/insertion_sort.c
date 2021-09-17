#include<stdio.h>

void printArray(int arr[],int size){
	int i;
	for(i=0;i<size;i++){
		printf("%d\t",arr[i]);
	}
}

void insertionSort(int arr[],int size){
	int step ,key , j;
	for(step =1; step<size; step++){
		key = arr[step];
		j = step -1;
		while(key < arr[j] && j>=0){
			arr[j+1] = arr[j];
			--j;
		}
		arr[j+1] = key;
	}
}

int main(){
	int data[] = {9,5,1,4,3};
	int size = 5;
	insertionSort(data,size);
	printArray(data,size);
}
