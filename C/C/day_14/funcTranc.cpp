//Дано положительное действительное число X.Выведите его дробную часть.
//
//Формат входных данных
//
//Вводятся положительное действительное число.
//
//Формат выходных данных
//Выведите ответ на задачу.

#include "pch.h"

#include <iostream>
#include <iomanip>
using namespace std;

int main()
{
	double x;
	cin >> x;
	cout << x - trunc(x);

	return 0;
}
