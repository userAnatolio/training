//подсчет строк

#include "pch.h"
#include "stdio.h"
//#include <cstdio>
#include <iostream>
using namespace std;

int a = 0;
char c;
int main() {
	setlocale(0, "");
	c = getchar();
	while (c != EOF) {
		c = getchar();
		if (c == '\n') {
			++a;
		}
		if (c == 10)
		{
			break;
		}
	}
	cout << a << endl;
}
