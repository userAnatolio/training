<?php

require_once('db.php');
$tbl_name = "fanswer";
 
$id=$_POST['id'];
 
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
 
if ($rows) {
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}
 
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer']; 
$datetime=date("d/m/y H:i:s"); 
 
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=mysql_query($sql2) or die(mysql_error());;
 
if($result2){
echo 'Ваш ответ успешно добавен!';
echo "<a href='view_topic.php?id=".$id."'>Вернуться на главную страницу</a>";
 
$tbl_name2="fquestions";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=mysql_query($sql3);
}

else {
echo "ERROR";
}
 
mysql_close();
?>