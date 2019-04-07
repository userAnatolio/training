//1. Напишите функцию calculate(), которая принимает две переменные типа int и одну переменную типа char,
//которая представляет одну из следующих математических операций : +, -, *, / или % (модуль).Используйте
//switch для выполнения соответствующей математической операции над целыми числами и возвратите результат.
//Если в функцию передается недействительный(какой - то левый) оператор, то функция должна выводить ошибку.
//Для оператора деления выполняйте целочисленное деление.
//

#include "pch.h"	
#include <iostream>
#include <math.h>
#include <string>
#include <cstdlib>	
using namespace std;

int calculate(int var1, int var2)
{
	cout << "Выбери действие: 1 - Умножение; 2 - деление; 3 - сложение; 4 - вычитание;" << endl;
		int operation;
		cin >> operation;
		cout << endl;
		switch (operation)
		{
		case 1: return var1 * var2;
		case 2: return var1 / var2;
		case 3: return var1 + var2;
		case 4: return var1 - var2;
		default: cout << "вы неправильно ввели номер операции";
		}
}

int main()
{
	setlocale(0, "rus");
	int var1, var2;
	cout << "Введите два целых числа числа!" << endl;
	cin >> var1 >> var2;
	cout << endl << "Результат операции: " << calculate(var1, var2);

	return 0;
}