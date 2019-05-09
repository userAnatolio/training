<script>

 // Реализуйте класс Student (Студент), который будет наследовать от класса User, подобно тому, как это сделано в теоретической части урока. 
 // Этот класс должен иметь следующие свойства: name (имя, наследуется от User), surname (фамилия, наследуется от User), year (год поступления в вуз). 
 // Класс должен иметь метод getFullName() (наследуется от User), с помощью которого можно вывести одновременно имя и фамилию студента. Также класс 
 // должен иметь метод getCourse(), который будет выводить текущий курс студента (от 1 до 5). Курс вычисляется так: нужно от текущего года отнять год 
 // поступления в вуз. Текущий год получите самостоятельно.

class User 
{
	constructor(name, surname)
	{
		this.name = name;
		this.surname = surname;
	}
	getFullName()
	{
		return this.name + ' ' + this.surname;
	}
}

class Student extends User
{
	constructor(name, surname, year)
	{
		super(name, surname);
		this.year = year;
	}
	getCourse()
	{
		return this.year;
	}
}

var student = new Student('Иван', 'Иванов', 2016);

console.log(student.name); //выведет 'Иван'
console.log(student.surname); //выведет 'Иванов'
console.log(student.getFullName()); //выведет 'Иван Иванов'
console.log(student.year); //выведет 2016console.log(worker.getCourse()); //выведет 3 - третий курс, так как текущий год 2019

</script>