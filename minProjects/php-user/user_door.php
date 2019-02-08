<?php

if(!empty($_REQUEST['login_1']) and !empty($_REQUEST['pass'])) {
    $login_1 = $_REQUEST['login_1'];
    $pass = $_REQUEST['pass'];

    require_once('db.php');
    $query_1 = "SELECT * FROM  users WHERE login = '$login_1'";
    $result_1 = mysql_query($query_1);
    $user_1 = mysql_fetch_assoc($result_1);
    if(!empty($user_1)) {
        $salt = $user_1['salt'];
        echo '<br>';

        $saltedPassword = md5($pass.$salt);

        if($user_1['password'] == $saltedPassword) {
            session_start();
            $_SESSION_START['user_1'] = true;
            echo 'авторизация выполнена, <a href = "/index.php">вернуться на главную страницу</a>';
        }
        else {
            echo 'неправильная пара, логин или пароль!';
        }
    }
    else {
        echo 'неправильная пара, логин или пароль!';
    }
}
else {
    echo 'поля не могут быть пустыми!';
}

?>
<meta charset = "utf-8"> 
<form action = "user_door.php" method = "POST"> 
<input name = "login_1" placeholder = "Введите логин"> 
<input type = "password" name = "pass" placeholder = "Введите пароль"> 
<input type = "submit" value = "Вход"> 
</form>
