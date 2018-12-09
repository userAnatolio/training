// Напишите программу, печатающую гистограммы длин вводимых слов.

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

		if ((c == '\n' || c == '\t' || c == ' ') || (c >= '0' && c <= '9')) {
			if (status == OUT) {
				printf("\n");
				status = IN;
			}
		}
		
		else {
			printf("-");
			status = OUT;
		}
	}

}
