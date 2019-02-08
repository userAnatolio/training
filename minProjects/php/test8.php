
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

$str =  file_get_contents('http://code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
preg_match_all('#<p[^>]*>(.*?)</p>#su', $str, $div);
var_dump($div[1]);

?>

</body>  

</html>