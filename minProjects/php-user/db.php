<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'anatolio_test';

mysql_connect($host, $user, $password);
mysql_select_db($db_name);

mysql_query("SET NAMES UTF8");


?>