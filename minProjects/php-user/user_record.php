<meta charset = "utf-8">
<form action = "user_record.php" method = "POST"> 
<input name = "log" placeholder = "Введите логин"> 
<input type = "password" name = "pas" placeholder = "Введите пароль"> 
<input type = "password" name = "pas_double" placeholder = "Введите пароль еще раз"> 
<input type = "submit" value = "Отправить">
</form> 
<?php
require_once('salt.php');
if(!empty($_REQUEST['log']) and !empty($_REQUEST['pas']) and !empty($_REQUEST['pas_double']) ) {
    $log = $_REQUEST['log']; 
    $pas = $_REQUEST['pas']; 
    $pas_double = $_REQUEST['pas_double'];

    if($pas == $pas_double) {
        require_once('db.php');
        $quer = "SELECT * FROM `users` WHERE login = '$log'";
        $res = mysql_query($quer);
        $use = mysql_fetch_assoc($res);
        echo '<br>';
        $salt = generateSalt();
        $saltedPassword = md5($pas.$salt);
        if(empty($use)) {
    $query = "INSERT INTO `users` SET login = '$log', password = '$saltedPassword', salt = '$salt'";
    $user = mysql_query($query);
    echo 'вы успешно зарегестрированы, <a href = "/index.php" >перейти на главную страницу</a>';
        }
        else{
            echo 'Такой логин уже существует!';
        }
    }
    else {
        echo 'пароли не совпадают';
    }
}
else {
    echo 'поля не могут быть пустыми';
}