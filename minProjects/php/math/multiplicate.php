<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: #5d5d5d;
color: white;
font-size: 50px;
}
div {
	margin-top: 100px;
color: yellow;
background: black;
margin-right: 30px;
padding: 5px;
text-align: center;
}
input {
	padding: 10px 20px;
	font-size: 30px;
}

#click2, #click3 {
	height: 50px;
	font-size: 30px;
	cursor: pointer;
	width: 200px;
}

 #click3 {
	height: 50px;
	font-size: 30px;
	cursor: pointer;
	width: 500px;
}

#click1 {
	height: 50px;
	font-size: 30px;
	background: green;
	cursor: pointer;
}

</style>
</head>
<body>

<h3 style="text-align: center">Тест на умножение</h3>
<h3 style="text-align: center" id="elem"></h3>
<div id="form">
<b id="num1">...</b>
<b>*</b>
<b id="num2">...</b>
<b> = </b>
<input placeholder="введите результат" id="text" onfocus="func4()">
<button id="click1" onclick="stopTimer()">Начать тест</button>
<button id="click2" onclick="func2()">Далее</button>
<button id="click3" onclick="func3()">Показать результат</button>
<b id="show">Обновите страницу, чтобы начать заново!</b>
<p id="results"></p>
</div>
<br>

<script>
/*
Программа принимает число(n) от пользователя и умножает его поочередно на множитель от 0 до 100.
Результат пользователь вводит сам, а прогамма проверяет правильно или неправильно, при этом результат записаны в массив и
 доступны в самом конце работы программы.
*/
var userNum = 0;
userNum = prompt("Введите множимое");
var text = document.getElementById('text');
text.disabled = true;
var num1 = document.getElementById('num1');
var num2 = document.getElementById('num2');
var click1 = document.getElementById('click1');
var click2 = document.getElementById('click2');
click2.disabled = true;
click2.style.display = 'none';
var click3 = document.getElementById('click3');
click3.style.display = 'none';
var test = document.getElementById('test');
var show = document.getElementById('show');
show.style.display = 'none';
var count = 0;
var result = 0;
var arrResult = [];
var arrCount = 0;

function stopTimer() {
start();
func1();
}

function func1(){
	var text = document.getElementById('text');
	text.disabled = false;
	text.value = "";	
	click1.style.display = 'none';
	click2.style.display = 'inline';
	num1.innerHTML = userNum;
	num2.innerHTML = count;
	result = count * userNum;
	
	count++;
	if(count > 101) {
	num1.innerHTML = "Хочу";
	num2.innerHTML = "еще!";
		text.style.display = 'none';
		click3.style.display = 'inline';
		click2.style.display = 'none';
	}
}

function func2(){
	var userText = document.getElementById('text');
	var userResult = userText.value;
	if(userResult != result){
		var text = userNum + ' * ' + count + ' = ' + userResult + " неправильно!";
		alert(text);
    arrResult[arrCount] = text;
	arrCount++;
	}
	click2.disabled = true;
	func1();
	
}

function func3(){
	click3.style.display = 'none';
	var results = document.getElementById('results');
	console.log(arrResult);
	for(var i = 0; i < arrResult.length; i++){
		var p = document.createElement('p');
		p.innerHTML = arrResult[i];
		results.appendChild(p);
	}
click3.disabled = true;
var show = document.getElementById('show');
show.style.display = 'inline';
stop();
}

function func4(){
	var click2 = document.getElementById('click2');
	click2.disabled = false;
}

var time = 	400;

function start() {
	//По нажатию на кнопку наш таймер начнет работать:
	window.timerId = window.setInterval(timer, 1000);
}


//Эта функция будет запускаться каждую секунду
function timer() {
	var elem = document.getElementById('elem');
	time -= 1;
	elem.innerHTML = time; //parseInt преобразует строку в число
}

function stop() {
	window.clearInterval(window.timerId);
}


</script>

</body>
</html>