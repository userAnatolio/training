//���� ����������� ����� N.�������� ����� YES, ���� ����� N �������� ������ �������� ������, ��� ����� NO � ��������� ������.
//������ ������� ������
//�������� ����������� �����.
//������ �������� ������
//�������� ����� �� ������.

#include "stdafx.h"
#include <iostream>
using namespace std;

int main() {
	int num;
	cin >> num;
	int i = 1;
	while (i * 2 <= num)
	{
		i *= 2;
	}
	if (i == num) cout << "YES";
	else cout << "NO";

	return 0;
}