//Процентная ставка по вкладу составляет P процентов годовых, которые прибавляются к сумме вклада через год.Вклад составляет X рублей Y копеек.Определите размер вклада через K лет.
//Формат входных данных
//Программа получает на вход целые числа P, X, Y, K .
//Формат выходных данных
//Программа должна вывести два числа : величину вклада через K лет в рублях и копейках.Дробное число копеек по истечение года отбрасывается.Перерасчет суммы вклада(с отбрасыванием дробных частей копеек) происходит ежегодно.
//Примечание
//В этой задаче часто возникают проблемы с точностью.Если они возникли у вас - попробуйте решить задачу в целых числах.

#include "pch.h"

#include <iostream>
#include <iomanip>
#include <cmath>
using namespace std;

int main()
{
	int count = 0, i = 1;
	double result, sum = 0;
	
while (i != 0)
{
	cin >> i;
	sum += i;
	count++;
}

cout << fixed;

result = (double)sum / (count - 1);

cout << result;

	return 0;
}