// Напишите программу, копирующую символы ввода в выходной поток и заменяющую стоящие подряд пробелы на один пробел.

#include "pch.h"
#include "stdio.h"
//#include <cstdio>
#include <iostream>
using namespace std;

int c;
int status = 0;
int main() {
	setlocale(LC_ALL, "rus");
	while (c = getchar() != EOF) {
		if (c == 32 && status == 0) {
			putchar(c);
			status = 1;
		}

		if (c != 32) {
			putchar(c);
			status = 0;
		}
	}
}
