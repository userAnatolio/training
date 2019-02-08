<?php
require_once('db.php');
$nameUser = $_GET['nameUser'];
$textUser = $_GET['textUser'];
if(!empty($_GET['nameUser']) and !empty($_GET['textUser'])) {
$query1 = "INSERT INTO opinion SET name='".$nameUser."', text='".$textUser."'";
mysql_query($query1);
header("Location: ".$_SERVER['PHP_SELF']);
} 
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<title>test</title>
<style>
* {
    margin: 0;
    padding: 0;
}
.center {
    max-width: 50%;
    margin: 0 auto;
    text-align: center;

}

.page, a {
    color:  #31b0d5;
    font-weight: bold;
    text-decoration: none;
    font-size: 16px;
}

.activ {
    font-size: 25px;
}

#name, #text {
    border: 1px solid #31b0d5;
    width: 95%;
    padding: 1%;
    margin: 5px;
    border-radius: 5px;
    resize: vertical;
    font-size: 16px;
}

#text {
  min-height: 300px;
  text-align: justify;
}

#click {
    border: 1px solid #31b0d5;
    width: 97%;
    border-radius: 5px;
    padding: 1% 0 1% 0;
    background-color: #31b0d5;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

.name {
text-align: left;
padding: 5px 10px;
color: gray;
margin-top: 20px;
}

.text {
padding: 5px;
margin: 0 0 10px 10px;
width: 90%;
text-align: justify;
}
</style>
    </head>
    <body>
<div class="center">

<?php
$count = 3; //плагинат
if(!empty($_GET['page'])) {
    $start = $_GET['page'] * $count;
}
else {
    $start = 0;
}

$countRec = "SELECT COUNT(id) AS count FROM opinion";
$countRes = mysql_query($countRec) or die(mysql_error());
$res = mysql_fetch_assoc($countRes);
$resZap = $res['count']/$count;

$query3 = "SELECT * FROM opinion LIMIT " . $start.  ", " . $count."";
$getPages = mysql_query($query3);
for($resultGetPages = []; $str3 = mysql_fetch_assoc($getPages); $resultGetPages[]=$str3);
?>

<h1>Гостевая книга</h1>
<?php

function getText($result) {
    $str = '';
for($i=0; $i<count($result); $i++) {
$str .= '<p class="name"><b>'.$result[$i][date].' '.$result[$i][name].'</b></p>';
$str .= '<p class="text">'.$result[$i][text].'</p>';
}
return $str;
}

echo getText($resultGetPages); 

?>

<div class = "page">
<?php
				
				//<!-- код пагинатора
				$j = 1;
					for($i = 0; $i < $resZap; $i++) {
						if($_GET['page'] == $i) {
							echo '<span class="activ"> '.$j.' </span>';
						}
						else {
							echo '<a href="?page='.$i.'">'.$j.'</a> ';
						}
						$j++;
					}
					
					//--> код пагинатора
				?>
				
				</div>

</div>





<div class="center">
<form action="" method="GET">
<div><input type="text" placeholder="Ваше имя" name="nameUser" id="name"></div>
<div><textarea placeholder="Ваш отзыв" name="textUser" id="text"></textarea></div>
<div><input type="submit" value="Сохранить" name="clickUser" id="click"></div>
</form>
</div>





</body>
</html>
				