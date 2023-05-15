<?php

if(!$_POST || !$_POST['title'] || !$_POST['preview'] || !$_POST['text']) die();

// зберігаємо файл
if($_FILES["fileToUpload"]["name"]){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Перевірка, чи вже існує файл

// Перевірка розміру файлу
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Вибачте, ваш файл занадто великий.";
        $uploadOk = 0;
    }

// Дозволити певні формати файлів
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Вибачте, дозволені лише файли JPG, JPEG, PNG та GIF.";
        $uploadOk = 0;
    }

// Перевірити, чи можна завантажити файл
    if ($uploadOk == 0) {
        echo "Вибачте, ваш файл не було завантажено.";
    } else {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    }



}
$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}
$title = $_POST['title'];
$preview = $_POST['preview'];
$text =  htmlentities($_POST['text']);
$images= $_FILES["fileToUpload"]["name"] ?? 'empty';
$category = $_POST['category'];
$t = "INSERT INTO articles (title, preview,description,images,category_id) VALUES ('$title','$preview','%s','$images','$category')";
$query = sprintf($t, mysqli_real_escape_string($connect, $text));
$result = mysqli_query($connect, $query);
$cookie_name = "success";
$cookie_value = "Категорію було успішно створено";
$cookie_expire = time() + 60; // 1 хвилина

setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту


header("Location: http://localhost:9000/admin/articles/index.php");
die();