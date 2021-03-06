//Яша плавал в бассейне размером N×M метров и устал.В этот момент он обнаружил, что находится на расстоянии X метров от одного из длинных бортиков(не обязательно от ближайшего) и Y метров от одного из коротких бортиков.Какое минимальное расстояние должен проплыть Яша, чтобы выбраться из бассейна на бортик ?
//
//Формат входных данных
//Программа получает на вход числа N, M, X, Y.
//Формат выходных данных
//Программа должна вывести число метров, которое нужно проплыть Яше до бортика.

#include <pch.h>
#include <iostream>
using namespace std;

int main() {
	int n, m, x, y;
	int longVar, shortVar, min1, min2, x2, y2;
	cin >> n >> m >> x >> y;
	if (n > m) {
		longVar = n; shortVar = m;
	}
	else {
		longVar = m; shortVar = n;
	}

	x2 = longVar - x;
	y2 = shortVar - y;
	if (x2 > x) min1 = x;
	else min1 = x2;
	
	if (y2 > y) min2 = y;
	else min2 = y2;

	if (min1 > min2) cout << min2;
	else cout << min1;

	return 0;
}