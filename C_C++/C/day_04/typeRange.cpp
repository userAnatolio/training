// Production–possibility frontier

#include "pch.h"
#include "stdio.h"
#include "math.h"
#include "locale.h"
#include <limits.h>
#include <float.h>
#include <iostream>

using namespace std;




int main()
{
	setlocale(0, "rus");
	printf("shot min and max %d ... %d \n", SHRT_MIN, SHRT_MAX);
	printf("shot без знака %d \n", USHRT_MAX);
	printf(" int min and max %d ... %d \n", INT_MIN, INT_MAX);
	printf("int без знака %d \n", UINT_MAX);
	printf("long min and max %d ... %d \n", LONG_MIN, LONG_MAX);
	printf("long без знака %d \n", ULONG_MAX);
	printf("char min and max %d ... %d \n", SCHAR_MIN, SCHAR_MAX);
	printf("char без знака %d \n", UCHAR_MAX);
}