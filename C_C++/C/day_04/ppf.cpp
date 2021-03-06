// Production–possibility frontier

#include "pch.h"
#include "stdio.h"
#include "math.h"
#include "locale.h"
#include <iostream>

using namespace std;


int ppf(int resources, int product1, int product2) {
	int result1;
	int result2;
	result1 = result2 = 0;
	result1 = resources / product1;
	result2 = resources / product2;
	if ((product1 + product2) <= resources) {
		printf("В месяц вы можете производить: %d ед. продукта № 1 или %d ед. продукта № 2", result1, result2);
	}
	else {
		printf("Нет! Колличество ресурсов ограничено = %d", resources);
	}

	return (0);
}

void main()
{
	int resources;
	int product1;
	int product2;
	setlocale(LC_ALL, "rus");
	resources = product1 = product2 = 0;
	printf("Доступных ресурсов на один месяц =  ");
	scanf_s("%d", &resources);
	printf("Сколько ресурсов необходимо для производства одной еденицы продукта №1? = ");
	scanf_s("%d", &product1);
	printf("Сколько ресурсов необходимо для производства одной еденицы продукта №2? = ");
	scanf_s("%d", &product2);

	ppf(resources, product1, product2);
	setlocale(0, " ");

}