// Напишите программу, копирующую символы ввода в выходной поток и заменяющую стоящие подряд пробелы на один пробел.

#include "pch.h"
#include "stdio.h"
#include <iostream>
using namespace std;
#define OUT 0 //вне слова
#define IN 1 //слово

int c;
int status = OUT;

int main() {
	setlocale(0,  "");
	while ((c = getchar()) != EOF) {

		if (c == '\n' || c == '\t' || c == ' ') {
			if (status == OUT) {
				putchar('\n');
				status = IN;
			}
			
		}
		else {
			putchar(c);
			status = OUT;
		}
	}

}
