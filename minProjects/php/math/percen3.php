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
button {
cursor: pointer;
}
#click1{
	padding: 15px;
	font-size: 20px;
}
</style>
</head>
<body>
<div>
<p id="text">
Найти процентное выражение одного числа от другого.
Первое число делится на второе и результат умножается на 100.
<button onclick="func1()" id="click1">Понятно</button>
</p>
<input id="testUser">
<button onclick="func1()" id="click2">Проверить</button>
</div>
<script>
var click2= document.getElementById('click2');
click2.style.display = "none";
var testUser = document.getElementById('testUser');
testUser.style.display = "none";
var result = 0;
var num = 0;
var num1 = 0;
var count = 1;
var resultUser = 0;

function func1() {
	var testUser = document.getElementById('testUser');
	resultUser = Number(testUser.value);
	console.log(resultUser);
	newFunc();
	num = Number(randomInteger(100, 1000));
	num1 = Number(randomInteger(100, 1000));
	result = (num / num1) * 100;
	console.log(num + " / " + num1 + " = " + num / num1 + " и умножаем результат на 100, получаем " + result); 
funcTest();
}

function funcTest(){
show("В прошлом году на матч пришло " + num + " больщиков, а в этом году " + num1 + " балельщиков. Насколько % больше или меньше, было болельщиков на матче в этом году?");
count++;
var click2= document.getElementById('click2');
click2.style.display = "inline";
var testUser = document.getElementById('testUser');
testUser.style.display = "inline";
}

function newFunc(){
	var testUser = document.getElementById('testUser');
	var res = result.toFixed(2);
	alert(res);
	if(res != resultUser){ 
	alert("неправильно!");
	}	
	testUser.value = "";
}

function show(textShow){
	var text = document.getElementById('text');
	text.innerHTML = textShow;
}

// случайное целое
function randomInteger(min, max) {
  var rand = min + Math.random() * (max - min)
  rand = Math.round(rand);
  return rand;
}
</script>
</body>
</html>