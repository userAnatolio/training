//Определите сумму всех элементов последовательности, завершающейся числом 0.
//
//Формат входных данных
//Вводится последовательность целых чисел, оканчивающаяся числом 0 (само число 0 в последовательность не входит, а служит как признак ее окончания.
//	Формат выходных данных
//	Выведите ответ на задачу.

#include <pch.h>
#include <iostream>
using namespace std;

int main() {
	int i = 1;
	int res = 0;
	while (i != 0)
	{
		cin >> i;
		cout << endl;
		res += i;
	}

	cout << res;

	return 0;
}