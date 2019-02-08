<?php

header( 'Content-Type: text/html; charset=utf-8' );

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'test';

mysql_connect($host, $user, $password);
mysql_select_db($db_name);

mysql_set_charset( 'utf8' );
mysql_query ("set character_set_client='utf8'"); 
mysql_query ("set_client='utf8'");
mysql_query ("set character_set_results='utf8'"); 
mysql_query ("set collation_connection='utf8_general_ci'");
mysql_query("SET NAMES UTF8");


?>