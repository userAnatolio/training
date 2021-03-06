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
	int p, x, y, k;
	double contribution, rubKop;
	int ruble = 0, kopeck = 0, i = 0;
	cin >> p >> x >> y >> k;
	rubKop = x + (double)y / 100;
	
	while (i < k)
	{
		contribution = (p * rubKop / 100) + rubKop;
		ruble = trunc(contribution);
		kopeck = trunc(contribution * 100 - trunc(contribution) * 100);
		rubKop = ruble + (double)kopeck / 100;
		i++;
	}

	cout << trunc(rubKop) << " " << trunc(rubKop * 100 - trunc(rubKop) * 100);

	return 0;
}