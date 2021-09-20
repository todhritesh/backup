#include<stdio.h>
#define MAX 10
int binarySearch(int arr[],int low,int high,int x){
	if(high>=low){
		int mid=low+(high-low)/2;
		
		if(arr[mid]==x){
			return mid;
		}
		
		if(arr[mid]>x){
			return binarySearch(arr,low,mid-1,x);
		}
		return binarySearch(arr,mid+1,high,x);
	}
	return -1;
}
int main(){
	int arr[MAX]={12,23,34,45,56,78,91,93,95,99};
	int search = 56;
	int result = binarySearch(arr,0,MAX-1,search);
	if(result==-1){
		printf("sorry not find");
	}
	else{
		printf("Element is present in array index = %d",result);
	}
	
}
