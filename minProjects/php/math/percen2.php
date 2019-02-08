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
Найти число по заданному другому числу и его величине в процентах от искомого числа. 
Заданное число делится на его процентное выражение и результат умножается на 100.
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
var count = 1;
var resultUser = 0;

function func1() {
	var testUser = document.getElementById('testUser');
	resultUser = Number(testUser.value);
	console.log(resultUser);
	newFunc();
	num = Number(randomInteger(10000, 100000));
	result = (num / count) * 100;
	console.log(" num / count = " + num / count + " и умножаем результат на 100, получаем " + result); 
funcTest();
}

function funcTest(){
show("Коля смог унести из банка только " + num + " рублей, что составило " + count + "% от всех денег в банке, сколько денег было в банке?");
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