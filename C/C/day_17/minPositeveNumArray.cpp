//Выведите значение наименьшего из всех положительных элементов в массиве.Известно, что в массиве есть хотя бы один положительный элемент.
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
	int min;
	int n;
	cin >> n;
	vector <int> a(n);
	vector <int> result;

	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}

	for (int k = 0; k < n; k++)
	{
		if (a[k] >= 0)
		{
			min = a[k];
			k = n;
		}
	}

	for (int j = 0; j < n; j++)
	{
		if (a[j] >= 0 && a[j] < min)
		{
			min = a[j];
		}

	}
	cout << min;
}