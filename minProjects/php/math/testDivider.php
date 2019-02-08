<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: #5d5d5d;
color: white;
}
#block1 {
color: yellow;
background: black;
text-align: center;
font-size: 20px;
padding: 20px;
}
#block2 {
color: yellow;
background: black;
text-align: center;
padding: 20px;
}
a{
color: white;
font-size: 16px;
text-align: center;
}
button{
	width: 60px;
	font-size: 16px;
	margin-left: 30px;
	cursor: pointer;
}
</style>
</head>
<body>

<div id="block1">
<b id="text">...</b>
<p id="result"></p>
<button id="click1" onclick="func1()">Далее</button>
<button id="click2" onclick="func2()">Да</button>
<button id="click3" onclick="func3()">Нет</button>
</div>
<div id="block2">
<i><a href="http://www.bymath.net/studyguide/ari/ari5.html	" target="blank">Признаки делимости</a></i>
</div>

<script>
var click2 = document.getElementById('click2');
var click3 = document.getElementById('click3');
var status = true;
var repeat = 50; //Число попыток
click2.style.display = "none";
click3.style.display = "none";
var userNum = 0; 
var randomNum = 0;
var arrTest = []; // массив для результата
var count = 0;
getNum = prompt("Введите делитель");
userNum = Number(getNum);
showText("число на которое будем делить = " + userNum);

// случайное целое
function randomInteger(min, max) {
  var rand = min + Math.random() * (max - min)
  rand = Math.round(rand);
  return rand;
}

// проверяем на делимость
function numTest(numTest) {
	if(numTest % userNum == 0){
		return true;
}
else return false;
}

function showText(resultText){
	var text = document.getElementById('text');
	text.innerHTML = resultText;
}

function func1(){
	if(repeat == 0){
		userResult();
	}
	else {
	var click1 = document.getElementById('click1');
	randomNum = randomInteger(2, 1000);
	var text = "Число " + randomNum + " делится на " + userNum + " ?";
	showText(text);
	repeat--;
	click1.style.display = "none";
	click2.style.display = "inline";
	click3.style.display = "inline";
	}
}

function func2(){
	if(numTest(randomNum)){
		showText("правильно!");
	}
	else{
		var text = randomNum + " / " + userNum + " = " + numTest(randomNum);
		arrTest[count] = text;
		console.log(arrTest);
		count++;
		showText("неправильно! " + text);
	}
	click1.style.display = "inline";
	click2.style.display = "none";
	click3.style.display = "none";
}

function func3() {
	if(numTest(randomNum)){
		var text = randomNum + " / " + userNum + " = " + numTest(randomNum);
		arrTest[count] = text;
		console.log(arrTest);
		count++;
		showText("неправильно! " + text);
	}
	else{
		showText("правильно!");
	}
	click1.style.display = "inline";
	click2.style.display = "none";
	click3.style.display = "none";
}

function userResult() {
	var results = document.getElementById('result');
	if(arrTest.length == 0){
	showText("Вы молодец!");
	}
	else{
		showText("Вот ваши ошибки:");
	for(var i = 0; i < arrTest.length; i++){
		var p = document.createElement('p');
		p.innerHTML = arrTest[i];
		results.appendChild(p);
	}
	}
	click1.style.display = "none";
	click2.style.display = "none";
	click3.style.display = "none";
}

</script>

</body>
</html>