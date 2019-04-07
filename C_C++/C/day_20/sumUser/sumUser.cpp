//1. У вас есть веб - сайт и вы хотите отслеживать, сколько денег вы зарабатываете в день от размещенной
//рекламы.Объявите структуру Advertising, которая будет отслеживать, сколько объявлений вы показали посетителям(1),
//сколько процентов посетителей нажали на объявления(2) и сколько вы заработали в среднем за каждое нажатие на
//объявления(3).Значения этих трех полей должен вводить пользователь.Передайте структуру Advertising функции,
//которая выведет каждое из значений, а затем подсчитает, сколько всего вы заработали денег за день(умножьте
//	все 3 поля вместе).

#include "pch.h"	
#include <iostream>
#include <math.h>
using namespace std;

struct Advertising
{
	int quantity;
	int percent;
	int sum;
};

int sumUser(Advertising user)
{
	int result;
	result = user.percent * user.percent * user.sum;

	return result;
}


int main()
{
	Advertising user;
	cout << "Enter you quantity" << '\t';
	cin >> user.quantity;
	cout << endl;

	cout << "Enter you percent" << '\t';
	cin >> user.percent;
	cout << endl;

	cout << "Enter you sum" << '\t';
	cin >> user.sum;
	cout << endl;

	cout << "You result = " << sumUser(user);
}