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

<h3 style="text-align: center">Тест на деление</h3>
<h3 style="text-align: center" id="elem"></h3>
<div id="form">
<b id="num1">...</b>
<b>/</b>
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
Программа принимает число(n) от пользователя, это число программа использует как делитель для чисел от 0 до n * 100.
Результат пользователь вводит сам, а прогамма проверяет правильно или неправильно, неправильный результат записаны в массив.
*/


var userNum = 0;
getNum = prompt("Введите делитель");
userNum = Number(getNum);
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
var count = userNum;
var result = 0;
var arrResult = [];
var arrCount = 0;
var randomNum = 0;

function stopTimer() {
start();
func1();
}

var arrDigit = [];
for(var i=0; i<10; i++){
	arrDigit[i] = count;
	count += userNum;
}

function randomInteger(min, max) {
  var rand = min + Math.random() * (max - min)
  rand = Math.round(rand);
  return rand;
}


function func1(){
	console.log(arrDigit);
	randomNum = arrDigit.splice(randomInteger(0, arrDigit.length - 1), 1);
	var text = document.getElementById('text');
	text.disabled = false;
	text.value = "";	
	click1.style.display = 'none';
	click2.style.display = 'inline';
	num1.innerHTML = randomNum;
	num2.innerHTML = userNum;
	result = randomNum / userNum;
if(arrDigit.length == 0) {
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
		var text = randomNum + ' / ' + userNum + ' = ' + userResult + " неправильно!";
		alert('Неправильно!');
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