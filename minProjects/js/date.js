
var months = new Array(12);
months[0] = "января";
months[1] = "февраля";
months[2] = "марта";
months[3] = "апреля";
months[4] = "мая";
months[5] = "июня";
months[6] = "июля";
months[7] = "августа";
months[8] = "сентября";
months[9] = "октября";
months[10] = "ноября";
months[11] = "декабря";

var day = new Array(7);
day[0] = "Воскресенье";
day[1] = "Понедельник";
day[2] = "Вторник";
day[3] = "Среда";
day[4] = "Четверг";
day[5] = "Пятница";
day[6] = "Суббота";


/*Функция часики:

function go() {
    window.timerId = window.setInterval(timer, 500);
}

function timer() {
    var clock = document.getElementById('clock');
    var date = new Date();
    clock.innerHTML = addZero(date.getHours()) + ':' + addZero(date.getMinutes()) + ':' + addZero(date.getSeconds());
}

function addZero(num) {
    if(num <= 9) return '0' + num;

    else return num;
}
*/

/* Как вывести дату на html странице:
var date = new Date();
document.write('Сегодня: ' + day[date.getDay()] + ' ' + date.getDate() + ' ' + months[date.getMonth()] + ' ' + date.getFullYear() + '<i> года</i>');
*/





/*Выводим время на страницу:
<body onload = "go">
<div id = "wrapper">
<p id = "clock">
00:00:00
</p>
</div>
</body>
*/
