//Извлечь корень из числа, использую функцию ввода и вывода, используя функцию sqrt();


//#include "conio.h"
#include "pch.h"
#include <iostream>
#include <math.h>
using namespace std;

int sqrtNum()
{
	double a = 0;
	double b = 0;
	double result = 0;
	cout << "Введите число больше нуля, нажмите enter" << endl;
	cin >> a;
	if (a < 0) { cout << "Недопустимо! \n"; sqrtNum(); }
	cout << "Введите степень корня, нажмите enter" << endl;
	cin >> b;

	if (b < 0) {
		cout << "недопустимо!" << endl;
		sqrtNum();
	}

	if (b > 2) {
		for (int i = 1; i < b; i++) {
			a = sqrt(a);
		}
		cout << "Ваш результат = " << a << "\n для продолжения нажмите любую клавишу" << endl;
		_getwch();
		sqrtNum();
	}

	else {
		cout << "Ваш результат = " << sqrt(a) << "\n для продолжения нажмите любую клавишу" << endl;
		_getwch();
		sqrtNum();
	}
	
	//getc(stdin);
	_getwch();
	return (0);
}

int main()
{
	setlocale(LC_ALL, "");
	sqrtNum();
}