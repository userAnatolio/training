//Даны длины сторон треугольника.Вычислите площадь треугольника.
//Формат входных данных
//Вводятся три положительных числа.
//Формат выходных данных
//Выведите ответ на задачу.


#include "pch.h"

#include <iostream>
#include <iomanip>
#include <cmath>
using namespace std;

int main()
{
	double a, b, c, result, p;
	cin >> a >> b >> c;
	p = 0.5 * (a + b + c);
	result = sqrt(p * (p - a) * (p - b) * (p - c));
	cout << result;

	return 0;
}
