//Напишите класс с именем RGBA, который содержит 4 переменные - члены типа std::uint8_t: m_red,
//m_green, m_blue и m_alpha(#include cstdint для доступа к типу std::uint8_t).
//Задайте 0 в качестве значения по умолчанию для m_red, m_green, m_blue и 255 для m_alpha.
//Создайте конструктор со списком инициализации членов, который позволит пользователю передавать
//значения для m_red, m_blue, m_green и m_alpha.Напишите функцию print(), которая будет выводить значения
//переменных - членов.

#include "pch.h"	
#include <iostream>
#include <math.h>
#include "test1.h"
#include <string>
#include <cstdint>

#include <cassert>
using namespace std;

class RGBA
{
private:
	uint8_t m_red;
	uint8_t m_green;
	uint8_t m_blue;
	uint8_t m_alpha;

public:
	RGBA(uint8_t a = 0, uint8_t b = 0, uint8_t c = 0, uint8_t m = 255)
		: m_red(a), m_green(b), m_blue(c), m_alpha(m)
	{
		m_red = a;
		m_green = b; 
		m_blue = c;
	}

	void print()
	{
		cout << "r = " << static_cast<int> (m_red) << " g = " << static_cast<int>(m_green) << " b = " << static_cast<int>(m_blue) << " a = " << static_cast<int>(m_alpha) << endl;
	}


};


int main()
{
	RGBA color(0, 135, 135);
	color.print();

	return 0;
}