<?php
$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}
if(!$_POST || !$_POST['title']){

    $cookie_name = "danger";
    $cookie_value = "danger";
    $cookie_expire = time() + 10; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту

    header("Location: http://localhost:9000/admin/category/index.php?success=2");
    die();
}

$title = $_POST['title'];

$query = sprintf("INSERT INTO categories (id, name) VALUES (NULL, '$title')");
$result = mysqli_query($connect, $query);
$cookie_name = "success";
$cookie_value = "Категорію було успішно створено";
$cookie_expire = time() + 60; // 1 хвилина

setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту


header("Location: http://localhost:9000/admin/category/index.php?success=1");
die();