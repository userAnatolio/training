//Извлечь корень из числа, использую функцию ввода и вывода, используя функцию sqrt();


//#include "conio.h"
#include "pch.h"
#include <iostream>
#include <math.h>
using namespace std;

double a = 0;
double b = 0;
double c = 0;

int sqrtNum()
{
	cout << "Введите число, нажмите enter" << endl;
	cin >> a;
	cout << "Введите степень корня, нажмите enter" << endl;
	cin >> b;
	cout << "Ваш результат = " << sqrt(a, b) << "\n для продолжения нажмите любую клавишу";
	sqrtNum();
	//getc(stdin);
	_getwch();
	return (0);
}

int main()
{
	setlocale(LC_ALL, "");
	powNum();
}