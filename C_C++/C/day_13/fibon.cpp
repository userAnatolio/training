//Последовательность Фибоначчи определяется так :
//
//F(0) = 0, F(1) = 1, …, F(n) = F(n−1) + F(n−2).
//
//Дано натуральное число A.Определите, каким по счету числом Фибоначчи оно является, то есть выведите такое число N, что F(N) = A.Если А не является числом Фибоначчи, выведите число - 1.
//
//Формат входных данных
//Вводится натуральное число A > 1.
//Формат выходных данных
//Выведите ответ на задачу.

#include "pch.h"
#include <iostream>
using namespace std;

int main()
{
	int f = 0;
	int n;
	int i = 0;
	int test = 1;
	signed int result = -1;

	cin >> n;

	if (n == 0) result = 0;
	if (n == 1) result = 1;
	if (n == 2) result = 3;
	if (n == 3) result = 4;

	if (n > 3) {

		while (i < n)
		{
			f = f + test;
			test = f - test;

			if (n == f)
			{
				result = i + 1;
				i = n;
			}

			i++;
		}
	}

	cout << result;
	return 0;
}