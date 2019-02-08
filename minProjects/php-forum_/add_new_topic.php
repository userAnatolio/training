<?php require_once('db.php');?>
<?php
$tbl_name = "fquestions";

$topic = $_POST['topic'];
$detail = $_POST['detail'];
$name = $_POST['name'];
$email = $_POST['email'];

$datetime = date("d/m/y h:i:s");
$sql = "INSERT INTO $tbl_name(topic,detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result = mysql_query($sql) or die(mysql_error());

if($result){
	echo "Ваша тема успешно создана!";
	echo '<div class="topic"><a href="main_forum.php">Вернуться на главную страницу </a> </div>';
}
	else {
		echo "ERROR";
	}
?>