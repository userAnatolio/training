
#include "pch.h"
#include <iostream>
using namespace std;

int getNumber()
{
	int num;
	cout << "¬ведите число" << endl;
	cin >> num;
	return num;
}

void getBinar(int num)
{
	int multiple = num;
	int arrNum[8];

		for (int i = 7; i >= 0; i--)
		{
			int bin = multiple % 2;
			if (multiple >= 1)
				arrNum[i] = bin;
			else arrNum[i] = 0;
			multiple /= 2;
		}

	for (int i = 0; i < 8; i++)
	{
		cout << arrNum[i];
	}
}
