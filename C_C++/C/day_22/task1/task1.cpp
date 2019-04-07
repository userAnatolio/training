//1. Выведите на экран следующий массив с помощью цикла :
//int array[] = { 7, 5, 6, 4, 9, 8, 2, 1, 3 };
//Подсказка: Используйте трюк с sizeof() (из предыдущего урока) для определения длины массива.
//2. Используя массив из задания № 1 :
//Попросите пользователя ввести число от 1 до 9. Если пользователь введет что - либо другое — попросите снова и 
//так до тех пор, пока он не введет корректное значение из заданного диапазона.Как только пользователь введет число
//от 1 до 9 – выведите массив на экран.Затем найдите в массиве элемент с числом, которое ввел пользователь, и выведите
//его индекс.

#include "pch.h"	
#include <iostream>
#include <math.h>
#include <string>
#include "test1.h"
using namespace std;


int main()
{
	setlocale(0, "rus");
	int array[] = { 7, 5, 6, 4, 9, 8, 2, 1, 3 };
	int width = sizeof(array) / sizeof(array[0]);
	start:
	cout << "enter your number 1 - 9 : ";
	int user;
	int index = 0;
	cin >> user;
	if (user >= 0 && user <= 9)
	{
		for (int i = 0; i < width; i++)
		{
			cout << array[i] << " ";
		}
		cout << "Your element array = " << array[index] << endl;
		cout << "index = " << index << endl;
	}

	else goto start;	

	return 0;
}