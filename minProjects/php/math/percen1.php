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
Запись 1% означает 0.01 или 1 : 100 = 0.01<br> Например 1% от 100 - это 1 или 100 * 0.01 <br> 2% от 100 - это 2 или 100 * 0.02<br>
3% от 200, это 0.03 * 200<br> 17% от 350, это 0.17 * 350 ...<br>
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
	num = Number(randomInteger(10, 1000));
	result = (count / 100) * num;
	console.log(" count/100 = " + count/100 + " * count " + count + " * на случайное " + num + " = " + result); 
funcTest();
}

function funcTest(){
show(count + " % " + " от " + num + " это ");
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