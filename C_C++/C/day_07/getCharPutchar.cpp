//for (i = 0; i < lim - 1 && (c = getchar()) != EOF && c != '\n'; ++i)
//Напишите цикл, эквивалентный приведенному выше fоr-циклу, не пользуясь операторами && и ||.

#include "pch.h"
#include "stdio.h"
#include <stdlib.h>
#include "math.h"
#include <string>
#include <iostream>

using namespace std;

int main() {
	setlocale(0, "");
	int status, lim, c, i;
	status = 1;
	lim = 100;
	c = getchar();
	i = 0;

	while (status == 1) {
		putchar(c);
		if (i < lim - 1) {
			if ((c = getchar()) != EOF) {
				if (c != '\n') {
					status = 1;
					i++;
				}
				else break;
			}
			else break;
		}
		else break;
	}

	return (0);
}