//Дан массив чисел.Выведите все элементы массива, которые больше предыдущего элемента .
//Формат входных данных
//
//В первой строке вводится количество элементов в массиве.Во второй строке вводятся элементы массива.
//Формат выходных данных
//Выведите ответ на задачу.





#include "pch.h"

#include <iostream>
#include <vector>
using namespace std;

int main()
{
	int n;
	cin >> n;
	vector <int> a(n);
	vector <int> result;

	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}

for(int j = 1; j < n; j++)
	{
	if (a[j] > a[j - 1])
	{
		cout << a[j] << " ";
	}

	}

}