//for (i = 0; i < lim - 1 && (c = getchar()) != EOF && c != '\n'; ++i)
//Напишите цикл, эквивалентный приведенному выше fоr-циклу, не пользуясь операторами && и ||.

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

int main() {
	setlocale(0, "rus");
	cout << myFunc1() << endl;
	setlocale(0, "");
	char num1[255];
	cout << "Второй вариант" << endl;
	cout << "введите число" << endl;
	cin >> num1;
    cout << atoi(num1) << endl;

	return (0);
	return 0;
}