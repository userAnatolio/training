// Напишите программу, копирующую символы ввода в выходной поток и заменяющую стоящие подряд пробелы на один пробел.

#include "pch.h"
#include "stdio.h"
#include <iostream>
using namespace std;

int c, status = 0;
int main() {
	//setlocale(0,  "");
	c = getchar();
	while ((c = getchar()) != EOF) {
		status = 0;
		if (c == 9) {
			printf("\\t");
			status = 1;
		}

		if (c == '\\') {
			printf("\\\\");
			status = 1;
		}

		if (c == 8) {
			printf("\\b");
			status = 1;
		}

		if (status == 0) {
			putchar(c);
			
		}

	}

}
