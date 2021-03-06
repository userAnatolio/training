//Дан список целых чисел, который может содержать до 100000 чисел.Определите, сколько в нем встречается различных чисел.
//
//Входные данные
//
//Вводится число N - количество элементов списка, а затем N чисел.
//
//Выходные данные
//
//Выведите ответ на задачу.

#include "pch.h"
#include <iostream>
#include <set>
using namespace std;

int main()
{
	set <int> s;
	int count = 0;
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int num;
		cin >> num;
		s.insert(num);
	}

	for (auto now : s)
	{
		count++;
	}

	cout << count;
	return 0;
}

