<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}
if (!$_GET || !$_GET['id_articles']) {
    $cookie_name = "danger";
    $cookie_value = "danger";
    $cookie_expire = time() + 10; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту

    header("Location: http://localhost:9000/admin/articles/index.php");
    die();
}

$category_id = $_GET['id_articles'];

$query = sprintf("DELETE FROM articles WHERE id = $category_id");
$result = mysqli_query($connect, $query);
$cookie_name = "success";
$cookie_value = "Категорію було успішно видалено";
$cookie_expire = time() + 60; // 1 хвилина

setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту

header("Location: http://localhost:9000/admin/articles/index.php");
die();
