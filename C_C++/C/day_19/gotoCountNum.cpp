//Пользователь вводит число от 0 до 9999. Вывести количество цифр в числе. 

#include "pch.h"	
#include <iostream>
#include <math.h>
using namespace std;

int main()
{	
	setlocale(0, "rus");
	int count = 0;
	int num;
	cin >> num;
	start: num = num / 10;
	count++;
	if (num != 0) goto start;
	cout << count;
	return 0;
}

