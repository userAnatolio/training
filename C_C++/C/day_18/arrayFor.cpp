//Выведите значение наименьшего из всех положительных элементов в массиве.Известно, что в массиве есть хотя бы один положительный элемент.
//Формат входных данных
//
//В первой строке вводится количество элементов в массиве.Во второй строке вводятся элементы массива.
//Формат выходных данных
//Выведите ответ на задачу.




#include "pch.h"
#include "limits.h"
#include <iostream>

using namespace std;


int main()
{
	int max = INT_MIN;

	int n, m;

	cin >> n >> m;

	int a[100][100];

	int str = 0;
	int column = 0;
	//заполняем массив
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < m; j++)
		{
			cin >> a[i][j];
		}
	}
	// перебираем массив
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < m; j++)
		{
			if (a[i][j] > max)
			{
				max = a[i][j];
				str = i;
				column = j;
			}
		}
	}

	// выводим массив
	cout << str << " " << column;

	return 0;
}

