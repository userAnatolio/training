//Функции преоразуют char в int

#include "pch.h"
#include "stdio.h"
#include <string>
#include <iostream>

using namespace std;


int atoi(char s[])
{
	int i, n;
	n = 0;
	for (i = 0; s[i] >= '0' && s[i] <= '9'; ++i)
		n = 10 * n + (s[i] - '0');
	return n;
}

int myFunc1() {
	int n = 0;
	char s[255];
	cout << "Первый вариант" << endl;
	cout << "введите число" << endl;
	cin >> s;
	for (int i = 0; i < 9; ++i) {
		if (s[i] >= '0' && s[i] <= '9') {
			n = 10 * n + (s[i] - '0');
		}
	}
	return n;
}

int lower(int c)
{
	if (c >= 'A' && c <= 'Z')
		return c + 'a' - 'A';
	else
		return c;
}

int main() {
	setlocale(0, "rus");
	cout << myFunc1() << endl;
	setlocale(0, "");
	char num1[255];
	cout << "Второй вариант" << endl;
	cout << "введите число" << endl;
	cin >> num1;
	cout << atoi(num1) << endl;

	char symb;
	cout << "Третий вариант преобразует заглавную букву латиницы в строчную" << endl;
	cout << "введите заглавную букву от A до Z" << endl;
	cin >> symb;
	printf("%c \n", lower(symb));

	return (0);
	return 0;
}