//Дано натуральное число N.Выведите слово YES, если число N является точной степенью двойки, или слово NO в противном случае.
//Формат входных данных
//Вводится натуральное число.
//Формат выходных данных
//Выведите ответ на задачу.

#include "stdafx.h"
#include <iostream>
using namespace std;

int main() {
	int num;
	cin >> num;
	int i = 1;
	while (i * 2 <= num)
	{
		i *= 2;
	}
	if (i == num) cout << "YES";
	else cout << "NO";

	return 0;
}