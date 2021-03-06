
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

6. Получите содержимое всех абзацев из #content. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*?)</div>#su', $str, $div);
preg_match_all('#<p[^>]*>(.*?)</p>#su', $div[0], $p);
var_dump($div[0]);	
var_dump($p[0]);

7. Получите все абзацы с классом www. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match_all('#<p[^>]*class\s*=\s*.?["\']\s*www.*?["\'].*?>.*?</p>#su', $str, $p);	
var_dump($p);

8. Получите все ссылки с классом www (их href и анкоры). 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match_all('#<a([^>]*class\s*=\s*.?["\']\s*www.*?["\'].*?)>(.*?)</a>#su', $str, $a);
$count = 0;
$arrHref = [];
var_dump($a[1]);
foreach($a[1] as $elem) {	
preg_match('#.*?href\s*=.*?["\'](.*?)["\'].*?.*?#su', $elem, $href);
$arrHref[$count] = $href[1];
$count++;
}
echo "href: ";
var_dump($arrHref);
echo "Анкоры: ";
var_dump($a[2]); 

9. Получите все ссылки с классом www из #content. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match('#<div.*?id="content".*?>(.*?)</div>#su', $str, $div);
preg_match_all('#(<a[^>]*>.+?</a>)#su', $div[0], $res1);
preg_match_all('#<a[^>]*class\s*=.*?www.*?>.+?</a>#su', $div[0], $res2);
var_dump($res2);

10. Получите все ссылки из пагинации .pag. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match('#<[^>]*class="pag".*?>(.*?)</div>#su', $str, $div);
preg_match_all('#<a[^>]*>.+?</a>#su', $div[0], $res1);
var_dump($res1);

11. Получите активную ссылку из пагинации .pag. 

$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match('#<[^>]*class="pag".*?>(.*?)</div>#su', $str, $div);
preg_match_all('#<[^>]*active.*?>[^<]*(<a[^>]*(active)*.*?>[^<]</a>)#su', $div[0], $res1);
var_dump($res1[1]);

12. Получите содержимое абзаца с классом .eee из #footer.
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match('#<div[^>]*id\s*=\s*["\']footer["\'].*?>(.*?)</div>#su', $str, $div);
preg_match_all('#<p[^>]*class\s*=.*?eee.*?>(.+?)</p>#su', $div[0], $p);
echo $p[1][0];

Часть 3
Дана страница: перейдите по ссылке. 

С помощью file_get_contents получите HTML код страницы по ссылке выше и для этой страницы с помощью регулярных выражений решите следующие задачи: 

1. Получите массив ссылок из меню. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match('#<div[^>]*id\s*=\s*["\']menu["\'].*?>(.*?)</div>#su', $str, $menu);
preg_match_all('#<a[^>]*>.+?</a>#su', $menu[0], $a);
var_dump($a);

2 Получите массив всех картинок. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<img[^>]*>#su', $str, $image);
var_dump($image);

3. Получите содержимое контента. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*<div.*?>#su', $str, $content);
var_dump($content);

4. Получите картинки контента. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
preg_match_all('#<img[^>]*>#su', $str, $image);
var_dump($image);

5. Удалите скрипты из полученного контента. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#<script[^>]*>.*?</script>#su', '', $content[1]);
var_dump($str);

6. Удалите картинки из полученного контента. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#<img[^>]*>#su', '', $content[1]);
var_dump($str);

7. Удалите абзацы с классом "more" из полученного контента.
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#<p[^>]*class\s*=[!-z]*["\']*more[!-z]*["\'].*?>.*?</p>#su', '!!!!!!', $content[1]);
var_dump($content[1]);
var_dump($str); 


8. Теги h2 из контента сделайте просто текстом, а не ссылками. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#(<h2[^>]*>)[^<]*<a[^>]*>(.*?)</a>.*?(</h2>)#su', '$1$2$3', $content[1]);
var_dump($content[1]);
var_dump($str);

9. Удалите все атрибуты абзацев из полученного контента. 
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#(<p)[^>]*(>.*?</p>)#su', '$1$2', $content[1]);
var_dump($content[1]);
var_dump($str);

10. Удалите все теги span из полученного контента.
$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#<span[^>]*>(.*?)</span>#su', '$1', $content[1]);
var_dump($content[1]);
var_dump($str);

*/

$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/3/1.php');
preg_match_all('#<div[^>]*id\s*=\s*["\']content["\'].*?>(.*)</div>[^<>]*?<div[^<>]*footer.*?>#su', $str, $content);
$str = preg_replace('#<span[^>]*>(.*?)</span>#su', '$1', $content[1]);
var_dump($content[1]);
var_dump($str);


?>

</body>  

</html>