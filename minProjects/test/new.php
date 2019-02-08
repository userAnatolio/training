<?php

require_once('db.php');
$tbl_name = "weeks";

if (isset($_POST["text"]))  { 

    $result = array(
    	'name' => $_POST["text"]
		);

    echo json_encode($result); 
    
    $text = $_POST["text"];
    
    
$sql="INSERT INTO $tbl_name(day)VALUES('$text')";
$result2=mysql_query($sql);
}
?>