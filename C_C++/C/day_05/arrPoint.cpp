// Массивы

#include "pch.h"
#include "stdio.h"
#include "math.h"
#include <string>
#include <iostream>
#include <iomanip>

using namespace std;
#define SIZE 10

int main()
{
	int myArr[] = { 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 };
	for (size_t i = 0; i < SIZE; i++) {
		cout << setw(4) << myArr[i] << endl;
	}

	int* pt_myArr = myArr;

	//вывод элеметнов массива с помощью указателя
	cout << endl << setw(4) << *myArr << endl; // выведе значение первого элемента массива
	cout << setw(4) << *myArr + 1 << endl; //выведет второй элемент массива
	cout << setw(4) << myArr << endl; // выведет адрес первого элемента массива
	cout << setw(4) << myArr + 1 << endl; // выведет адрес второго элемента массива
	cout << setw(4) << myArr[0] << endl; // выведет первый элемент массива
	cout << setw(4) << myArr[1] << endl; // выведет второй элемент массива
	cout << endl << endl;

	for (size_t j = 0; j < SIZE; j++) {
		cout << endl << pt_myArr + j << " = " << *pt_myArr + j; // выведет адрес и значение элементов массива
	}

	getchar();
}