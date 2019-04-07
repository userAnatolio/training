//При разработке игры мы решили, что в ней должны быть монстры, потому что всем нравится сражаться с монстрами.
//Объявите структуру, которая представляет вашего монстра.Он должен иметь один из следующих типов : ogre, goblin,
//skeleton, orc и troll.Если ваш компилятор совместим с C++ 11, используйте классы enum.Если нет, то обычные 
//перечисления.
//
//Каждый отдельный монстр также должен иметь имя(используйте std::string) и количество здоровья, которое отображает,
//сколько урона он может получить, прежде чем умрет.Напишите функцию printMonster(), которая выведет все члены
//структуры.Объявите монстров типа goblin и orc, инициализируйте их, используя список инициализаторов, и передайте
//в функцию printMonster().


#include "pch.h"	
#include <iostream>
#include <math.h>
#include <string>
using namespace std;

enum MonsterType
{
	OGRE,
	GOBLIN,
	SKELETON,
	ORC,
	TROLL
};

struct Monster
{	
	MonsterType typeMonster;
	string nameMonster;
	int quantity;
	int percent;
};

string getNameMonster(MonsterType typeMonster)
{
	if (typeMonster == OGRE) return "Orge";
	if (typeMonster == GOBLIN) return "GOBLIN";
	if (typeMonster == SKELETON) return "SKELETON";
	if (typeMonster == ORC) return "ORC";
	if (typeMonster == TROLL) return "TROLL";
}

void printMonster(Monster name)
{
	cout << getNameMonster(name.typeMonster) << endl;
	cout << name.nameMonster << endl;
	cout << name.quantity << endl;
	cout << name.percent << endl;
	cout << endl;

}
	

int main()
{

	Monster goblin = { GOBLIN, "Terminator", 120, 30 };
	Monster orc = { ORC, "Mutantik", 120, 30 };

	printMonster(goblin);
	printMonster(orc);

	return 0;
}