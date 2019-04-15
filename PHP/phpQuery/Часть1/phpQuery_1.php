
<?php

require_once 'phpQuery-onefile.php';
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/rabota-s-bibliotekoj-phpquery-v-php/1/1.php');
$obj = phpQuery::newDocument($str);

/*
Дана страница: перейдите по ссылке.
Используя CURL получите HTML код страницы по ссылке выше и для этой страницы с помощью phpQuery решите следующие задачи:

1. Получите содержимое content, footer, sidebar.

$text1 = $obj -> find('#content');
$text2 = $obj -> find('#footer');
$text3 = $obj -> find('#sidebar, .sidebar');
var_dump($text1 -> text());
var_dump($text2 -> text());
var_dump($text3 -> text());

2. Получите все абзацы.

$text = $obj -> find('p');
var_dump($text -> text());

3. Получите все ссылки.

$text = $obj -> find('a');
var_dump($text -> text());

4. Получите все абзацы с классом www.
$text = $obj -> find('#content a');
var_dump($text -> text());

5. Получите содержимое всех абзацев из #content
$text = $obj -> find('#content p');
var_dump($text -> text());
6. Получите все ссылки с классом www
$text = $obj -> find('a.www');
var_dump($text -> text());

7. Получите все ссылки из #content.
$text = $obj -> find('#content a');
var_dump($text -> html());

8. Получите все ссылки с классом www из #content.
$text = $obj -> find('#content a.www');
var_dump($text -> text());

9. Получите все ссылки из пагинации .pag.
$text = $obj -> find('.pag a');
var_dump($text -> text());

10. Получите активную ссылку из пагинации .pag.

$text = $obj -> find('.pag .active');
var_dump($text -> html());

11. Получите содержимое абзаца с классом "eee" из #footer.
*/
$text = $obj -> find('#footer p.eee');
var_dump($text -> html());
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