//Дано положительное действительное число X.Выведите его первую цифру после десятичной точки.
//Формат входных данных
//Вводится положительное действительное число.
//Формат выходных данных
//Выведите ответ на задачу.
//Sample Input :
//
//1.79
//Sample Output :
//
//7
//Программирование — Напишите программу.Тестируется через stdin → stdout


#include "pch.h"

#include <iostream>
#include <iomanip>
#include <cmath>
using namespace std;

int main()
{
	double x;
	int result;
	cout << fixed << setprecision(1);
	cin >> x;
	cout << (x - trunc(x)) * 10;

	return 0;
}
