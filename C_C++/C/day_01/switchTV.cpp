//использование функций printf(), scanf(), использование оператора swich case;


//#include "conio.h"
#include "pch.h"
#include <stdio.h>
#include <iostream>
#include <math.h>
using namespace std;

void tv()
{
	
	printf("Что будете смотреть? \n");
	printf("1. Сериал \n");
	printf("2. Фильм \n");
	printf("3. Рекламу \n");
	printf("4. Мультик \n");
	printf("выбери номер программы \n");
	int num1;
	scanf_s("%d", &num1);
	switch (num1) {
	case 1: 
		printf("Понадобится время");
		break;
	case 2:
		printf("надо купить попкорм");
		break;
	case 3:
		printf("успею заварить себе кофе");
		break;
	case 4:
		printf("позову детей");
		break;
	default: printf("недопустимое значение!");
	}
}

int main()
{
	setlocale(LC_ALL, "");
	tv();
	return (0);
}