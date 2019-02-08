<?php
error_reporting(E_ALL);
?>

<?php
/*
$file = 'test3.txt';
$test = fopen($file, 'r');
$text = fread($test, filesize($file));
$str = preg_replace('#Толя\sЧичинов#i', '*********', $text);
$str2 = preg_replace('#Показать\sсписок\sоценивших#iu', '*********', $str);
$str3 = preg_replace('#Нравится#iu', '*********', $str2);
$str4 = preg_replace('#Дмитрий\sТрепачёв#iu', '*********', $str3);
file_put_contents('test2.txt', $str4);
fclose($test);
*/



$f = fopen("test2.txt", "r");
while (!feof($f)){ // цикл завершится, при обнаружении конца файла
echo fgets($f);
}
fclose($f);
?>




