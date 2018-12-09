// symbol histogtam 

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
	setlocale(0, "");
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
	printf("Разделителей = %d \n", esc);
	int num1 = 0;
	while (num1 <= esc) { cout << "-"; num1++;}
	cout << endl;

	printf("цифры = %d \n", digit);
	int num2 = 0;
	while (num2 <= digit) { cout << "-"; num2++;}
	cout << endl;

	printf("другие = %d \n", chars);
	int num3 = 0;
	while (num3 <= chars) { cout << "-"; num3++;}
	cout << endl;
}


