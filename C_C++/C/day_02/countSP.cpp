// подсчет пробелов

#include "pch.h"
#include "stdio.h"
//#include <cstdio>
#include <iostream>
using namespace std;

int a = 0;
int c;
int main() {
	setlocale(0, "");
	c = getchar();
	while (c != EOF) {
		c = getchar();
		if (c == 32) {
			++a;
		}
		if (c == 10)
		{
			break;
		}
	}
	cout << a << endl;
}
