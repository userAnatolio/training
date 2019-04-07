//Банкомат имеет купюры достоинством 5000, 1000, 500, 100 руб.Пользователь банкомата вводит сумму, кратную 100 руб. 
//Пользователь банкомата должен получить минимальное количество купюр.Подсказка: использовать целочисленное деление
//и получение остатка от целочисленного деления

#include "pch.h"	
#include <iostream>
#include <math.h>
using namespace std;

int main()
{	
	int fiveThousand = 0;
	int oneThousand = 0;
	int fiveHundred = 0;
	int oneHundred = 0;

	int userNum;

	cin >> userNum;
	cout << endl;

	fiveThousand = userNum / 5000;
	oneThousand = (userNum - fiveThousand * 5000) / 1000;
	fiveHundred = userNum % 1000 / 500;
	oneHundred = userNum % 500 / 100;

	cout << fiveThousand << " " << oneThousand << " " << fiveHundred << " " << oneHundred;


	return 0;
}

