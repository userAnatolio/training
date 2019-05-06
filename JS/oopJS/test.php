

<script>
// Задачи на основы работы с ООП в JavaScript
// 1. Реализуйте класс Worker (Работник), который будет иметь следующие свойства: name (имя), surname (фамилия),
// rate (ставка за день работы), days (количество отработанных дней). Также класс должен иметь метод getSalary(),
// который будет выводить зарплату работника. Зарплата - это произведение (умножение) ставки rate на количество отработанных дней days.
// С помощью нашего класса создайте двух рабочих и найдите сумму их зарплат.
// Геттеры и сеттеры
// 2. Модифицируйте класс Worker из предыдущей задачи следующим образом: сделайте все его свойства приватными,
// 3. Модифицируйте класс Worker из предыдущей задачи следующим образом: для свойства rate и для свойства days сделайте
// еще и методы-сеттеры.
// Практика
// 4. Реализуйте класс MyString, который будет иметь следующие методы: метод reverse(), который параметром принимает строку,
// а возвращает ее в перевернутом виде, метод ucFirst(), который параметром принимает строку, а возвращает эту же строку,
// сделав ее первую букву заглавной и метод ucWords, который принимает строку и делает заглавной первую букву каждого слова этой строки.
// 5. Реализуйте класс Validator, который будет проверять строки. К примеру, у него будет метод isEmail параметром принимает строку
 // и проверяет, является ли она корректным емейлом или нет. Если является - возвращает true, если не является - то false. Кроме того,
 // класс будет иметь следующие методы: метод isDomain для проверки домена, метод isDate для проверки даты и метод isPhone для проверки телефона:

class Worker
{
	constructor(name, surname, rate, days)
	{
		this._name = name;
		this._surname = surname;
		this._rate = rate;
		this._days = days;
	}
	
	setDays(days){ this._days = days; }
	setRate(rate){ this._rate = rate; }
	
	getName(){ return this._name; }
	getSurname(){return this._surname; }
	getRate(){ return this._rate; }
	getDays(){ return this._days; }
	getSalary(){ return this._rate * this._days; }
	
}

//1111111111111111111111111111111111111111111111111111111
var worker = new Worker('Иван', 'Иванов', 10, 31);
console.log(worker._name); //выведет 'Иван'
console.log(worker._surname); //выведет 'Иванов'
console.log(worker._rate); //выведет 10
console.log(worker._days); //выведет 31
console.log(worker.getSalary()); //выведет 310 - то есть 10*31
var worker1 = new Worker('Dimon', 'Dimonov', 10, 30);
console.log(worker1.getSalary() + worker.getSalary());

//2222222222222222222222222222222222222222222222222222222
console.log(worker.getSurname()); //выведет 'Иванов'
console.log(worker.getRate()); //выведет 10
console.log(worker.getDays()); //выведет 31
console.log(worker.getSalary()); //выведет 310 - то есть 10*31
//3333333333333333333333333333333333333333333333333333333
worker.setRate(20); //увеличим ставку
worker.setDays(10); //уменьшим дни
console.log(worker.getSalary()); //выведет 200 - то есть 20*10

//4444444444444444444444444444444444444444444444444444444
class MyString
{
reverse(str) 
{
	var arr = str.split('');
	arr.reverse();
		return  arr.join('');
}
	ucFirst(str) { return str[0].toUpperCase() + str.substr(1,);  }
	
	ucWords(str) 
	{
		var arr = str.split(' ');
		  for(var i=0; i<arr.length; i++) { arr[i] = arr[i].substr(0, 1).toUpperCase() + arr[i].substr(1,); }
		return  arr.join(' ');
	}
}

var str = new MyString();

console.log(str.reverse('abcde')); //выведет 'edcba'
console.log(str.ucFirst('abcde')); //выведет 'Abcde'
console.log(str.ucWords('abcde abcde abcde')); //выведет 'Abcde Abcde Abcde'

//5555555555555555555555555555555555555555555555555555555
class Validator
{
	isEmail(str)
	{
		return /^[a-zA-Z0-9-]{3,30}@[a-z]{2,8}\.[a-z]{2,3}$/.test(str);
	}
	isDomain(str)
	{
		return /^[a-zA-Z]{3,20}\.[a-z]{2,3}$/.test(str);
	}
	isDate(str)
	{
		return /^[0-9]{2}\.[0-9]{2}\.[0-9]{4}$/.test(str);
	}
	isPhone(str)
	{
	return /\+375\(29\)([0-9]{7})/.test(str);
	}
}

var validator = new Validator();
console.log(validator.isEmail('phphtml@mail.ru'));
console.log(validator.isDomain('phphtml.net'));
console.log(validator.isDate('12.05.2020'));
console.log(validator.isPhone('+375 (29) 81-681-92'));














</script>