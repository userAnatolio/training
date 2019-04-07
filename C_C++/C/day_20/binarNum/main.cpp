//Напишите программу, которая просит пользователя ввести число от 0 до 255.
//Выведите его как 8 - битовое бинарное число(формы #### ####).Не используйте побитовые операторы.

#include "pch.h"
#include <iostream>
#include "io.h"
#include <iomanip>
#include <cmath>
using namespace std;


int main()
{
	setlocale(0, "RUS");
	int num = getNumber();
	getBinar(num);
	return 0;
}
