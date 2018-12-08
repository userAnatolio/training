char* Ruc(char s[])

{ //Функция перекодирования русских букв

//для вывода в окно программы.

int i;

static char ss[257];

for (i=0;s[i] != '\0'; i++)

{

if (s[i]>= -64 && s[i] <= -17)

ss[i]=(-64+s[i]); //А..п

else if (s[i]>= -16 && s[i] <= 0)

ss[i]=(char)(-16+s[i]); //р..я

else if (s[i] == -72)

ss[i]=(char)(-15); //ё

else if (s[i] == -88)

ss[i]=(char)(-16); //Ё

else

ss[i]=s[i];

}

ss[i]='\0';

return ss;

}