//Симметричное число
//
//
//Дано четырехзначное число.Определите, является ли его десятичная запись симметричной.Если число симметричное, то выведите 1, иначе выведите любое другое целое число.Число может иметь меньше четырех знаков, тогда нужно считать, что его десятичная запись дополняется слева незначащими нулями.
//
//Формат входных данных
//
//Вводится единственное число.
//
//Формат выходных данных
//
//Выведите одно целое число - ответ на задачу.


#include <iostream>

using namespace std;

int main() {
	int v;
	int a, b, c, d;
	int result;
	cin >> v;

	d = v % 10;
	c = v / 10 % 10;
	b = v / 100 % 10;
	a = v / 1000 % 10;
	result = (a - d) * (a - d) + (b - c) * (b - c) + 1;
	cout << result;


	return 0;
}