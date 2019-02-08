<?php
header( 'Content-Type: text/html; charset=utf-8' );

$host = 'localhost';
$user = 'root';
$password = '';
$db_name = 'football';

mysql_connect($host, $user, $password);
mysql_select_db($db_name);

mysql_query("SET NAMES UTF8");
?>

<?php

$query = "SELECT player.name AS Игрок FROM player
JOIN team ON team.id = player.team_id
WHERE team.name_team = 'Спартак'
";

$getSql = mysql_query($query) or die(mysql_error());
for($data=[]; $result = mysql_fetch_assoc($getSql); $data[]=$result);
var_dump($data);
echo '<table>';
$arr = [];

foreach($data as $elem) {
    foreach($elem as $key=>$val){
        array_push($arr, $key);
    }
}
$arr = array_unique($arr);
echo '<tr>';
foreach($arr as $elem) {
echo '<td class="red">'.$elem.'</td>';
}
echo '</tr>';
foreach($data as $key=>$elem1) {
    echo '<tr>';
foreach($elem1 as $key1 => $val1) {
    echo '<td>';
    echo $val1;
    echo '</td>'; 
}
echo '</tr>';
}


/*
$i = 1;
$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
while($i <= 36){
    $str = "A";
    $brand = mt_rand(1, 3);
    $id = mt_rand(1, 18);
    $price = mt_rand(500, 3000);
    $num = mt_rand(1, 100);
    $str2 = $chars[mt_rand(0, strlen($chars))];
    $str .= $str2 . $num;
    $query1 = "INSERT INTO `goods`(`vendor_code`, `price`, `number`, `brand_id`, `subcategory_id`) VALUES ('$str', $price, $num, $brand, $id)";
    $getSql = mysql_query($query1) or die(mysql_error());
    $i++;
}
*/
?>
</table>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: #5d5d5d;
color: white;
}
td {
    border: 1px solid;
    width: 100px;
    height: 30px;
}
.red {
	background: black;
	text-align: center;
}
</style>
</head>
<body>

</body>
</html>