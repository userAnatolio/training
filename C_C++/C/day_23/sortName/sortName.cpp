//Напишите программу, которая:
//спрашивает у пользователя, сколько имен он хочет ввести;
//просит пользователя ввести каждое имя;
//вызывает функцию для сортировки имен в алфавитном порядке
//выводит отсортированный список имен.


#include "pch.h"	
#include <iostream>
#include <math.h>
#include "test1.h"
#include <string>
#include <cstdint>

#include <cassert>
using namespace std;

void sortArray(string *array, int length)
{
	for (int i = 0; i < length; ++i)
	{
		int start = i;

		for (int j = i + 1; j < length; ++j)
		{
			if (array[j] < array[start])
				start = j;
		}

		swap(array[i], array[start]);
	}
}

int main()
{
	setlocale(0, "rus");
	int length;
	cout << "Ну и сколько имен ты хочешь ввести ? " << endl;
	cin >> length;
	cout << endl;
	cout << "Вводи имена" << endl;
	string *name = new string[length];
	for (int i = 0; i < length; i++)
	{
		cout << "Имя" << i + 1 << ": ";
		cin >> name[i];
		cout << '\n';
	}

	sortArray(name, length);

	for (int i = 0; i < length; i++)
	{
		cout << "Name_" << i + 1 << ": " << name[i] << endl;
	}

	delete[] name;
	name = 0;
	
}