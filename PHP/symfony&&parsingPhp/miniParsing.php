
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Шаблон</title>
<style>

</style>
<script type="text/javascript" src="/jQuery/jquery-1.7.js"></script>
</head>
<body>

    
    <script>
        
    </script>

<?php 

/*

Задачи на парсинг сайтов регулярными выражениями PHP

Дана страница: перейдите по ссылке. 

С помощью file_get_contents получите HTML код страницы по ссылке выше и для этой страницы с помощью регулярных выражений решите следующие задачи: 

1. Получите содержимое head, title и body. 

2. Получите массив href всех ссылок. 

3. Получите массив текстов всех ссылок.


$str = file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov..');
preg_match_all('#<head>.*</head>#su', $str, $res);
var_dump($str);
var_dump($res);



preg_match_all('#<title>.*</title>#su', $str, $res);

preg_match_all('#<body[.]*>.+</body>#su', $str, $res);

preg_match_all('#<a.*href\s*=\s*["|\'|\\\\]*(.*?)["|\'|\\\\]#u', $str, $res);

preg_match_all('#>(.+)</a>#', $str, $res);

Часть 2
С помощью file_get_contents получите HTML код страницы по ссылке выше и для этой страницы с помощью регулярных 
выражений решите следующие задачи:

1. Получите содержимое body. 
preg_match_all('#<body[^>]*>(.+?)</body>#su', $str, $res);

2. Получите кодировку документа (нового и старого типа). 
preg_match_all('#<meta.*?charset\s*=\s*["\']?(.*?)["\']?>#su', $str, $res);

3. Получите содержимое #content. 
preg_match('#<[^>]*id="content".*?>.*?</div>#su', $str, $div);

4. Получите все ссылки из #content. 
preg_match('#<div.*?id="content".*?>(.*?)</div>#su', $str, $div);
preg_match_all('#(<a[^>]*>.+?</a>)#su', $div[0], $res1);
preg_match_all('#(<a[^>]*href.*?=.*?["\'](.*?)["\'].*?>.+?</a>)#su', $div[0], $res2);

5. Получите содержимое всех абзацев. 
$str = file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov..');
preg_match_all('#<p[^>]*>(.*?)</p>#su', $str, $div);
var_dump($div[1]);

// Получите содержимое всех абзацев из #content. 

// Получите все абзацы с классом www. 

// Получите все ссылки с классом www (их href и анкоры). 

// Получите все ссылки с классом www из #content. 

// Получите все ссылки из пагинации .pag. 

// Получите активную ссылку из пагинации .pag. 

// Получите содержимое абзаца с классом .eee из #footer.

*/

$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match_all('#<p[^>]*>(.*?)</p>#su', $str, $div);
var_dump($div[1]);

?>

</body>  

</html>