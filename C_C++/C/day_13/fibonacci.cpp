//Последовательность Фибоначчи определяется так :
//
//F(0) = 0, F(1) = 1, …, F(n) = F(n−1) + F(n−2).
//
//По данному числу N определите N - е число Фибоначчи F(N).
//
//Формат входных данных
//Вводится натуральное число N.
//Формат выходных данных
//Выведите ответ на задачу.

#include "stdafx.h"
#include <iostream>
using namespace std;

int main()
{
	int f;
	int n;
	int i = 0;
	int test;
	cin >> n;

	if (n == 0) f = 0;
	if (n == 1) f = 1;
	if (n == 2) f = 1;

	if (n > 2)
	{
		f = 1;
		test = 1;
		i = 2;

		while (i < n)
		{
			f = f + test;
			test = f - test;

			i++;
		}

	}

	cout << f;
	return 0;
}

