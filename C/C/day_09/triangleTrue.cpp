//Функции преоразуют char в int

#include "pch.h"
#include "stdio.h"
#include <string>
#include <iostream>
using namespace std;

int main() {
	setlocale(0, "rus");
	int a, b, c;
	cin >> a >> b >> c;
	if (a > b && a > c) { cout << a; }
	else if (b > a && b > c) { cout << b; }
	else if (c > a && c > b) { cout << c; }

	else if (a == b && b > c) { cout << "max a and b"; }
	else if (b == c && c > a) { cout << "max b and c"; }
	else if (c == a && a > b) { cout << "max c and a"; }

	else cout << "все равны";

	
	return 0;
} 