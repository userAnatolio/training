//Напишите простой класс с именем Numbers.Этот класс должен иметь :
//три private переменные - члены типа double : m_a, m_b и m_c;
//public метод с именем setValues(), который позволит устанавливать значения для m_a, m_b и m_c;
//public метод с именем print(), который будет выводить объект класса Numbers в формате : <m_a, m_b, m_c>.
//Следующий код main() :
//	int main()
//{
//	Numbers point;
//	point.setValues(3.0, 4.0, 5.0);
//	point.print();
//	return 0;
//}
//int main()
//{
//	Numbers point;
//	point.setValues(3.0, 4.0, 5.0);
//	point.print();
//	return 0;
//}
//должен производить следующий результат :
//<3, 4, 5>
//Добавьте функцию isEqual() в класс Numbers
//Теперь попробуем что - то сложнее.Напишите класс, который реализует функциональность стека.Что такое стек — смотрите урок 105.
//Класс Stack должен иметь :
//private фиксированный массив целых чисел длиной 10;
//private целочисленное значение для отслеживания длины стека;
//public метод с именем reset(), который будет сбрасывать длину и все значения элементов на 0;
//public метод с именем push(), который будет добавлять значение в стек.push() должен возвращать значение false, если массив уже заполнен, и true в противном случае;
//public метод с именем pop() для вытягивания и возврата значения из стека.Если в стеке нет значений, то должен выводиться стейтмент assert;
//public метод с именем print(), который будет выводить все значения стека.
//Следующий код main() :
//	int main()
//{
//	Stack stack;
//	stack.reset();
//	stack.print();
//	stack.push(3);
//	stack.push(7);
//	stack.push(5);
//	stack.print();
//	stack.pop();
//	stack.print();
//	stack.pop();
//	stack.pop();
//	stack.print();
//	return 0;
//}
//должен производить следующий результат :
//()
//(3 7 5)
//(3 7)
//()




#include "pch.h"	
#include <iostream>
#include <math.h>
#include <string>
#include "test1.h"
using namespace std;


class Number
{
private:
	double m_a;
	double m_b;
	double m_c;
public:
	void setValues(int a, int b, int c)
	{
		m_a = a;
		m_b = b;
		m_c = c;
	}

	void print()
	{
		cout << "< " << m_a << ", " << m_c << ", " << m_b << " >" << endl;
	}

	bool isEqual(const Number &test)
	{
		if (m_a == test.m_a && m_b == test.m_b && m_c == test.m_c)
			return true;
		else return false;
	}
};
int main()
{
	setlocale(0, "rus");
	Number point1;
	point1.setValues(3.0, 4.0, 5.0);

	Number point2;
	point2.setValues(3.0, 4.0, 5.0);

	if (point1.isEqual(point2))
		std::cout << "point1 and point2 are equal\n";
	else
		std::cout << "point1 and point2 are not equal\n";

	Number point3;
	point3.setValues(7.0, 8.0, 9.0);

	if (point1.isEqual(point3))
		std::cout << "point1 and point3 are equal\n";
	else
		std::cout << "point1 and point3 are not equal\n";

	return 0;
}