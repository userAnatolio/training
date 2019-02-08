<?php

require_once('db.php');
$tbl_name = "fquestions";
 
$id=$_GET['id'];

$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);

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
<div class="topic"><?php echo $rows['topic']; ?></div>
<div class="title"><b>Создана:  <?php echo $rows['datetime']; ?> Автор:<span class="big"> <i><?php echo $rows['name']; ?></span></i> <?php echo $rows['email'];?> </b></div>
<div class="title"> Колличество ответов: <b><?php echo $rows['reply'];?></b> Колличество просмотров: <b><?php echo $rows['view']; ?>;</b><div>
<div class="text"><?php echo $rows['detail']; ?></div>
<h1 class="topic">Ответы</h1>
<hr class="hr"></hr>
<?php
 
$tbl_name2="fanswer";
$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=mysql_query($sql2);
while($rows=mysql_fetch_array($result2)){
 
echo '<div class="title"><b>'.$rows['a_datetime'].' </b><span class="big"> '.$rows['a_name'].' </span> '.$rows['a_email'].'</div>';
echo '<div class="text">'.$rows['a_answer'].'</div>';
echo '<hr class="hr"></hr>';
}
 
$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=mysql_query($sql3);
$rows=mysql_fetch_array($result3);
$view=$rows['view'];
 

if(empty($view)){
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=mysql_query($sql4);
}
 
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=mysql_query($sql5);
mysql_close();
?>
 

<form name="form1" method="post" action="add_answer.php">
<input name="a_name" type="text" placeholder="Введите имя" class="input">
<input name="a_email" type="text" placeholder="Введите email" class="input">
<textarea name="a_answer" id="a_answer" placeholder="Введите ответ"></textarea>
<input name="id" type="hidden" value="<?php echo $id; ?>">
<input type="submit" name="Submit" value="Submit" class="click">
<input type="reset" name="Submit2" value="Reset" class="click">
</div>
</body>
</html>