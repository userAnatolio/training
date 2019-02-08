<?php
/*авторизируемся*/
header( 'Content-Type: text/html; charset=utf-8' );
$host = 'localhost';
$user = 'anatolio';
$password = '.toly52515tolik52515.';
$db_name = 'anatolio_test';

mysql_connect($host, $user, $password); /*Подключение к серверу*/
mysql_select_db($db_name); /*Подключение к базе данных на сервере*/

$count = 5; //плагинат
if(!empty($_GET['page'])) {
    $start = $_GET['page'] * $count;
}
else {
    $start = 0;
}

$countRec = "SELECT COUNT(id) AS count FROM records";
$countRes = mysql_query($countRec) or die(mysql_error());
$res = mysql_fetch_assoc($countRes  );
$resZap = $res['count']/$count;


mysql_set_charset( 'utf8' );
mysql_query ("set character_set_client='utf8'"); 
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'"); 
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query("SET NAMES UTF8");

$query = "SELECT * FROM `records` LIMIT " . $start.  ", " . $count;
$result = mysql_query($query)
or die(mysql_error());
$data=[];
while($i = mysql_fetch_assoc($result)) {
$data[]=$i;
} 

/*var_dump($data);*/
?>

<!DOCTYPE html>

<html>

<head>

<meta charset = "utf-8">

<title>Гостевая книга</title>

<link rel = "stylesheet" href = "/css/stili1.css">

<style>

.data {
     font-size: 14px;
     width: 50%;
     border-radius: 3px;
     color: #a52a2a;
     padding: 5px;
     box-sizing: border-box;
  }


.text {
    font-size: 16px;
    background-color: #f6f6f6;
    width: 100%;
    border-radius: 10px;
    color: #44484c;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #999;
    box-shadow: inset 0 1px 1px #c1c1c1;
      }

.mes {
     color: #31708f;
     font-size: 16px;
     background-color: #e1f2f9;
     border-radius: 5px;
     padding: 15px;
     margin-bottom: 10px;
     }
     
.user {
      margin-bottom: 10px;
      border-radius: 5px;
      width: 98%;   
      background-color: #c1c1c1;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #999;
      box-shadow: inset 0 1px 1px #c1c1c1;
      }

.user-text {
     width: 80%;
     font-size: 14px;
     min-height: 200px;
     text-align: justify;
     }

.button {
     width: 60%;
     font-size: 18px;
     border-radius: 20px;
     }

.page {
     width: 96%;
     font-size: 20px;
     border-radius: 5px;
     background-color: #c1c1c1;
     padding: 10px;
     text-align: center;
     border: 1px solid #999;
     box-shadow: inset 0 1px 1px #c1c1c1;
     }

</style>

</head>

<body>

<h3>Гостевая книга</h3>
<p><i><b>Здесь вы можете оставить свой отзыв.</b></i></p>

<div>
<?php
foreach($data as $key){
echo '<div class = "data">';
echo date("d.m.Y G:m:s", strtotime($key['data']));
echo '<b><i> '.$key['name'].'</i></b>';
echo '</div>';
echo '<div class = "text">';
echo $key['text'];
echo '</div>';
echo '<br>';

}
?>
</div>
<div class = "page">
<?php
				
				//<!-- код пагинатора
				$j = 1;
					for($i = 0; $i < $resZap; $i++) {
						if($_GET['page'] == $i) {
							echo '<span> '.$j.' </span>';
						}
						else {
							echo '<a href="?page='.$i.'">'.$j.'</a> ';
						}
						$j++;
					}
					
					//--> код пагинатора
				?>
				
				</div>
				
<?php

if(!empty($_POST['user-name']) && !empty($_POST['user-text'])) {
$name = $_POST['user-name'];
$text = $_POST['user-text'];
$nowData = date("Y-m-d G:i:s");

$sql = 'INSERT INTO `records` SET name = "'.$name.'", text = "'.$text.'", data = "'.$nowData.'"';

mysql_query($sql) or die(mysql_error());

echo '<div class = "mes">';
echo 'Запись успешно сохранена';
echo '</div>';

}

?>

<br>

<div class = "user" >
<form action = "" method = "post">

<?php

if(!empty($_POST['btn-save']) && empty($_POST['user-name'])) {
echo '<span style = "color: red; font-size: 12px" > Введите имя... </span>';

echo '<div class = "user-name">';
echo '<input type = "text" class = "user-name" name = "user-name" placeholder = "Ваше имя">';
echo '</div>';
}
else{
?>
<div class = "user-name">
<input type = "text" class = "user-name" name = "user-name" placeholder = "Ваше имя">
</div>

<?php

}
if(!empty($_POST['btn-save']) && empty($_POST['user-text'])) {
echo '<span style = "color: red; font-size: 12px" > Введите текст... </span>';
echo '<div class = "user-text">';
echo '<textarea class = "user-text" name = "user-text" name = "text" placeholder = "Введите текст" ></textarea>';
echo '</div>';
}
else{
?>
<div class = "user-text">
<textarea class = "user-text" name = "user-text" name = "text" placeholder = "Ваш отзыв"></textarea>
</div>

<?php

}

?>

<div class = "button" >
<input type = "submit" class = "btn-save" name = "btn-save" value = "Сохранить">
</div>

</form>
</div>

<br><br>
<a href = "/index.php" title = "Читайте дальше">Мой первый сайт.</a>
<a href = "/text/ГЛАВНОЕ.html" title = "Читайте дальше">Главное и преходящее.</a>
<a href = "/text/POSREDSTVENNOCT.html" title = "Читайте дальше">Посредственность.</a>
<a href = "/text/TERPENIE.html" title = "Читайте дальше">Терпение.</a>
<a href = "/text/SPOKOYSTVIE.html" title = "Читайте дальше">Спокойствие.</a>
<a href = "/text/SDERJANOST.html" title = "Читайте дальше">Сдержанность.</a>
<a href = "/text/ГОРДЫНЯ.html" title = "Читайте дальше">Гордыня.</a>
<a href = "/text/ЗАВИСТЬ.html" title = "Читайте дальше">Зависть.</a>
<a href = "/text/ГНЕВ.html" title = "Читайте дальше">Гнев.</a>


</body>

</html>