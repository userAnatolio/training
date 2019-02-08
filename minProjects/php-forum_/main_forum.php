<?php require_once('db.php');
$tbl_name = "fquestions";

$sql = "SELECT * FROM $tbl_name ORDER BY id DESC";

$result = mysql_query($sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">  
<title>Форум</title>
<link rel="stylesheet" href="forum.css">
</head>
<body>
    
<div class="center">
<h1 class="headerForum">Наш форум</h1>
<p class="text">На форуме автолюбителей водитель сможет получить совет как произвести ремонт автомобиля своими руками, задать вопрос на тему авто законов или как выбрать автомобиль, получить советы в выборе шин и автохимии, а так же многое другое на нашем авто форуме. Новинки и последние события в сфере автоиндустрии. У кого что сломалось? Вам сюда! Помощь в выборе автомобиля. Автоспорт, новости автоспорта.  Советы опытных водителей и вопросы начинающих водителей. Правовые вопросы Автовладельцев.</p>

<h2 class="headerForum">Темы форума</h2>

<?php

while($rows = mysql_fetch_array($result)) {
?>
<div class="topic"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a></div>
<div class="title"><b>Создана:  <?php echo $rows['datetime']; ?> Автор: <i><?php echo $rows['name']; ?></i></b></div>
<div class="title"> Колличество ответов: <b><?php echo $rows['reply'];?></b> Колличество просмотров: <b><?php echo $rows['view']; ?>;</b><div>
<hr class="hr"></hr>
<?php
}

if(!empty($_GET['submit'])) {
require_once ('add_new_topic.php');
}
?>


<h1 class="headerForum">Создать новую тему</h1>


<form action = "add_new_topic.php" method = "post" id = "form1" name = "form1">
<input type = "text" name = "topic" id = "topic" placeholder = "Введите название темы" class="input">
<textarea name = "detail" id = "detail" placeholder = "Опишите подробней вашу тему" class="input"></textarea>
<input type = "text" name = "name" id = "name" placeholder = "Введите ваше имя" class="input">
<input type = "text" name = "email" id = "text" placeholder = "Введите ваш Email" class="input">
<input type = "submit" name = "submit" id = "Submit" value = "Создать" class="click">
<input type = "reset" name = "Submit2" id = "Submit2" value = "Сбросить"  class="click">
</form>

</div>

</body>
</html>