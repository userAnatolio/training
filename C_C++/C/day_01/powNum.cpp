//Возвести число в степень, использую функцию ввода и вывода, используя функцию pow();


//#include "conio.h"
#include "pch.h"
#include <iostream>
#include <math.h>
using namespace std;

double a = 0;
double b = 0;
double c = 0;

int powNum()
{
	cout << "Введите первое число, нажмите enter" << endl;
	cin >> a;
	cout << "Введите второе число, нажмите enter" << endl;
	cin >> b;
	double result = a + b;

	cout << "Введите степень числа, нажмите enter" << endl;
	cin >> c;
	cout << "Ваш результат = " << pow(result, c) << "\n для продолжения нажмите любую клавишу";
	//getc(stdin);
	_getwch();
	return (0);
}

int main()
{
	setlocale(LC_ALL, "");
	powNum();
}