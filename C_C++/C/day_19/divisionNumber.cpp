//делители числа

#include "pch.h"	
#include <iostream>
#include <math.h>
using namespace std;

void divisionNum(int num)
{
	for (int i = 1; i <= num; i++)
	{
		if (num % i == 0)
		{
			cout << i << "\t";
		}
	}
	

}



int main()
{
	divisionNum(20);
	return 0;
}

