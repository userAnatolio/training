//Напишите функцию min(a, b), вычисляющую минимум двух чисел.Затем напишите функцию min4(a, b, c, d), вычисляющую минимум 4 чисел с помощью функции min.Считайте четыре целых числа и выведите их минимум.
//Формат входных данных
//Вводятся четыре целых числа.
//Формат выходных данных
//Выведите ответ на задачу.


#include "pch.h"
#include <iostream>
using namespace std;

int min(int a, int b)
{
	int min;
	if (a < b) min = a;
	else if (a == b) min = a;
	else min = b;
	return min;
}

int min4(int a, int b, int c, int d)
{
	int result;
	result = min(min(a, b), min(c, d));
	return result;
}

int main()
{
	int a, b, c, d;
	cin >> a >> b >> c >> d;
	cout << min4(a, b, c, d);
	return 0;
}

