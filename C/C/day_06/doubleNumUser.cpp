//4. Напишите функцию doubleNumber(), которая принимает один целочисленный параметр и возвращает значение,
//которое в два раза больше значения параметра.
//5. Напишите полноценную программу, которая принимает целое число от пользователя,
//удваивает его с помощью функции doubleNumber() с задания 4, а затем выводит результат в консоль.

#include "pch.h"
#include "stdio.h"
#include "math.h"
#include <string>
#include <iostream>

using namespace std;

int doubleNumber(int num1)
{
	return num1 *= 2;
}

void userNumber() {
	int num1 = 0;
	int newNum = 0;
	setlocale(0, "RUS");
	printf("Введите число \n");
	scanf_s("%d", &num1);
	newNum = doubleNumber(num1);
	printf("результат %d", newNum);
}


int main() {
	userNumber();
	return (0);
}