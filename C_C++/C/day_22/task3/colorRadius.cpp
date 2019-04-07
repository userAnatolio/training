Напи/*шите класс Ball.Ball должен иметь две закрытые переменные - члены со значениями по умолчанию :
m_color(«Red»);
m_radius(20.0).
В Ball - е должны быть конструкторы :
для установления значения только m_color;
для установления значения только m_radius;
для установления значений и m_radius, и m_color;
для установления значений, когда значения не предоставлены вообще.
Не используйте параметры по умолчанию для конструкторов.Напишите
еще функцию для вывода цвета(m_color) и радиуса(m_radius) шара(объекта класса Ball).*/


#include "pch.h"	
#include <iostream>
#include <math.h>
#include "test1.h"
#include <string>

#include <cassert>
using namespace std;

class Ball
{
public:
	string m_color;

	double m_radius;

	Ball()
	{
		m_color = "red";
		m_radius = 20.0;
	}

	Ball(const string a)
	{
		m_color = a;
		m_radius = 20.0;
	}

	Ball(double b	)
	{
		m_radius = b;
		m_color = "red";
	}

	Ball(const string a, double b)
	{
		m_color = a;
		m_radius = b;
	}

	void print()
	{
		std::cout << "color " << m_color << " radius " << m_radius << endl;
	}


};

int main()
{
	Ball def;
	def.print();

	Ball black("black");
	black.print();

	Ball thirty(30.0);
	thirty.print();

	Ball blackThirty("black", 30.0);
	blackThirty.print();

	return 0;
}