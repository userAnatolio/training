// power функция

#include "pch.h"
#include "stdio.h"
#include <iostream>
#include "math.h"
using namespace std;

int power(int a, int b);

int main() {
	setlocale(0, "");
	printf("%d", power(5, 3));
}

int power(int a, int b)
{
	int i;
	int result = 1;
	for (i = 1; i <= b; ++i) {
		result = result * a;
	}
	return result;
}
