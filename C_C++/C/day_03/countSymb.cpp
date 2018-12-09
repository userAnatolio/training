// считает символы разделители, цифры, другие символы.

#include "pch.h"
#include "stdio.h"
#include <iostream>
using namespace std;
#define OUT 0 //вне слова
#define IN 1 //слово

int c;
int digit = 0;
int chars = 0;
int esc = 0;
int status = OUT;

int main() {
	setlocale(0,  "");
	while ((c = getchar()) != EOF) {

		if (c == '\n' || c == '\t' || c == ' ') {
			++esc;
		}
		
		else if (c >= '0' && c <= '9') {
			++digit;
		}
		else {
			++chars;
		}
	}

	printf("Разделителей = %d \n цифры = %d \n, другие символы = %d \n", esc, digit, chars);

}
