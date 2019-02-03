//Процентная ставка по вкладу составляет P процентов годовых, которые прибавляются к сумме вклада в конце года.Вклад составляет X рублей Y копеек.Определите размер вклада через год.
//
//
//При решении этой задачи нельзя пользоваться условными инструкциями и циклами.
//
//Формат входных данных
//Программа получает на вход целые числа P, X, Y.
//Формат выходных данных
//Программа должна вывести два числа : величину вклада через год в рублях и копейках.Дробная часть копеек отбрасывается.

//12
//179
//0
//Sample Output :
//
//200 48


#include "pch.h"

#include <iostream>
#include <iomanip>
#include <cmath>
using namespace std;

int main()
{
	int p, x, y;
	double result, sum;
	cin >> p >> x >> y;
	sum = x + (double)y / 100;
	result = (p * sum / 100) + sum;
	cout << trunc(result) << " " << trunc(result * 100 - trunc(result) * 100);

	return 0;
}