//НОД двух чисел

#include "pch.h"	
#include <iostream>
#include <math.h>
using namespace std;

int largestNumber(int a, int b)
{
	if (a > b) return a;
	if (a < b) return b;
	if (a == b) return a;
}

int greatestCommonDivisor(int a, int b)
{
	int max = largestNumber(a, b);
	int result;

	for (int i = max; i > 0; i--)
	{
		if (a % i == 0 && b % i == 0)
		{
			result = i;
			i = 0;
		}

	}
	return result;
}



int main()
{
	cout << greatestCommonDivisor(12, 9);
}

