<?php

if(!$_POST['email'] || !$_POST['password']){
    die();
}
$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');

$email = $_POST['email'];
$password = $_POST['password'];
$query = sprintf("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
$result = mysqli_query($connect, $query);
if (!$result)
    die(mysqli_error($connect));
$get_user = mysqli_fetch_assoc($result);

if(empty($get_user)){
    print_r($get_user);
    die();
    $cookie_name = "danger";
    $cookie_value = "Не вірний пароль";
    $cookie_expire = time() + 10; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту
    header("Location: http://localhost:9000/admin/login/index.php");
    die();
}else{
    header("Location: http://localhost:9000/admin/index.php");
    $cookie_name = "admin";
    $cookie_value = time();
    $cookie_expire = time() + 100*60*60; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту
    header("Location: http://localhost:9000/admin/index.php");
    die();
}