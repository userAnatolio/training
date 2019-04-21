
<?php

require_once 'phpQuery-onefile.php';
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/2/1.php');
$obj = phpQuery::newDocument($str);

/*
Дана страница: перейдите по ссылке.
Используя CURL получите HTML код страницы по ссылке выше и для этой страницы с помощью phpQuery решите следующие задачи:

12. Удалите все картинки.
$obj -> find('a') -> remove();
var_dump($obj -> html());

$obj -> find('a') -> remove();
var_dump($obj -> html());

13. Удалите абзацы с классом "more" из полученного контента.
$obj -> find('p.more') -> remove();
var_dump($obj -> html());

14. Оберните все абзацы дивами.
$obj -> find('p') -> wrap('<div>');
var_dump($obj -> html());

15. Во все абзацы вставьте тег <b> вовнутрь.
$obj -> find('p') -> wrapInner('<b>');
var_dump($obj -> html());

16. Ссылки сделайте просто текстом.
	
17. Тег <h2 class="block"> из контента сделайте просто ссылками.
	$arrH2Text = $obj -> find('h2.block');
foreach ($arrH2Text as $elem) {
		$pqH2[] = pq($elem) -> text();
	}
	
	
	$arrH2 = $obj -> find('h2.block');
	foreach($arrH2 as $elem)
	{
		pq($elem) -> wrap('<a href="#">') -> replaceWith(array_shift($pqH2));
	}
	echo $obj -> html();
	
18. Тег <h2 class="block"> из контента, которые имеют ссылки, сделайте просто ссылками.
	
	$arrH2Text = $obj -> find('h2.block a');
foreach ($arrH2Text as $elem) {
		$pqH2[] = pq($elem) -> text();
	}
	
	
	$arrH2 = $obj -> find('h2.block a') -> parent();
	foreach($arrH2 as $elem)
	{
		pq($elem) -> wrap('<a href="#">') -> replaceWith(array_shift($pqH2));
	}
	var_dump($obj -> html());
	
19.  Тег <h2 class="block"> из контента сделайте просто текстом, а не ссылками.
 $arrH2Text = $obj -> find('h2.block');
foreach ($arrH2Text as $elem) {
		$pqH2[] = pq($elem) -> text();
	}
	
	
	$arrH2 = $obj -> find('h2.block');
	foreach($arrH2 as $elem)
	{
		pq($elem) -> replaceWith(array_shift($pqH2));
	}
	var_dump($obj -> html());
 
	 */

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