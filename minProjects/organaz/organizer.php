<?php require_once('db.php');?>
<!DOCTYPE html>
<html>
	<head>
		<title>Органайзер</title>
		<meta charset="utf-8">
<style>
   * {
    margin: 0;
    padding: 0;
}

.center {
    width: 900px;
    margin: 0 auto;
    text-align: center;
}

.day li {
border: 1px solid gray;
display: inline-block;
border-radius: 3px;
}

.day a {
display: block;
text-decoration: none;
color: #337ab7;
padding: 10px 25px 10px 24px;
}

#text {
    width: 86%;
    min-height: 400px;
    font-size: 20px;
    border-radius: 3px;
    resize: vertical;
    padding: 2%;
}

#btn {
    width: 90%;
    padding: 10px;
    color: white;
    background: #5bc0de;
    border-color: #5bc0de;
    border-radius: 3px;
}

.day li span a{
    background: #5bc0de;
    color: white;
}

.date {
color:#5bc0de;;
text-align: right;
padding: 10px;
margin-right: 50px;
}

</style>
	</head>
	<body>
	    
<div class="center">
<div class="day">
<ul>
	    <?php
if(empty($_GET['day'])) {
$_GET['day']=1;
}
$query = "SELECT * FROM organizer WHERE id>0";     //получаю данные из таблицы в базе 
$getResult = mysql_query($query) or die(mysql_error());
for($data = []; $row = mysql_fetch_assoc($getResult); $data[] = $row); // преобразую данные в массив

for($i=0; $i<count($data); $i++) {
if(!empty($_GET['day']) && $data[$i]['id'] == $_GET['day']) {
						echo '<li><span class="active"><a href="?day='.$data[$i]['id'].'"">'.$data[$i]['weeks'].'</a></span></li>';
					}
					else {
						echo '<li><a href="?day='.$data[$i]['id'].'">'.$data[$i]['weeks'].'</a></li>';
					}
}
?>
</ul>
<?php
$months = [ 01 => 'Января' , 'Февраля' , 'Марта' , 'Апреля' , 'Мая' , 'Июня' , 'Июля' , 'Августа' , 'Сентября' , 'Октября' , 'Ноября' , 'Декабря' ];
 $day = date('d', time()); 
$year = date('Y', time());
$week = date('j', time());

 ?>
<p class="date"><span>Сегодня: <?php echo $day. ' ' .$months[$week].' '.$year.' года' ; ?></span> </p>

</div>

<form action="" method="POST">
<textarea name="text" placeholder="Введите текст" id="text">
<?php

$num=$_GET['day'];
$text=$_POST['text'];

if(!empty($_POST['btn'])) {
$query1 = "UPDATE `organizer` SET `text`='".$text."' WHERE id='".$_GET['day']."'";
mysql_query($query1) or die(mysql_error());
echo $text;
}

if(empty($text)) {
echo $data[$num-1]['text'];
};

?>
</textarea>
<input type = "submit" value = "Сохранить" name = "btn" id="btn">

</form>

</div>

</body>
</html>	

