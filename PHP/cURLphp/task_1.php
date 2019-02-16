<?php

/*
Даны страницы: 1.php, 2.php, 3.php, 4.php, 5.php.

Вручную сделайте массив ссылок на эти страницы. Переберите циклом этот массив и с помощью CURL зайдите на каждую страницу. Спарсите title, h1, контент каждой страницы и сохраните их в базу данных.

При сохранении очистите контент от лишних тегов.
*/

     function getPageByUrl($url)
	 {
$ch = curl_init(); // initialize curl handle
curl_setopt($ch, CURLOPT_URL, $url); // set url to post to
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,1); // return into a variable
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1); // return into a variable
$document = curl_exec($ch);
return $document;
	 }
	 
$arrLink = [
'http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/1.php',
'http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/2.php',
'http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/3.php',
'http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/4.php',
'http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-curl-v-php/1/5.php'
];

$db = array(array(), array(), array());

foreach($arrLink as $link)
{
	$content = getPageByUrl($link);
	preg_match_all('#<[^>]*h1>.*?</h1>#su', $content, $h1);
	preg_match_all('#<title>.*</title>*#su', $content, $title);
	preg_match('#<div[^>]*id\s*=\s*["\'].*?["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $content, $text);
	$db[h1][] = $h1;
	$db[title][] = $title;
	$db[content][] = strip_tags($text[1]);
	//$query = "INSERT INTO `html`(`h1`, `title`), ($h1, $title)";
}

var_dump($db);
	
?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>
body {
background: black;
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