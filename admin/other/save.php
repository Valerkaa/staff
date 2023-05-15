<?php

if(!$_POST || !$_POST['login'] || !$_POST['password']) die();



// зберігаємо файл
if($_FILES["fileToUpload"]["name"]){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


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
    $connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
    or die("Error: " . mysqli_error($connect));
    if (!mysqli_set_charset($connect, "utf8mb4")) {
        print("Error: " . mysqli_error($connect));
    }
    $id = $_POST['id'];
    $email = $_POST['login'];
    $password = $_POST['password'];
    $phone_1 =  $_POST['phone_1'];
    $phone_2 =  $_POST['phone_2'];
    $logo = $_FILES["fileToUpload"]["name"] ?? 'empty';
    $email_site = $_POST['email_site'];
    $query = sprintf("UPDATE users SET email = '%s',password = '%s',phone_1 = '%s',phone_2 = '$phone_2', logo='%s',email_site='%s' WHERE id = $id",
        $email,$password,"$phone_1",$logo,$email_site);
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $cookie_name = "success";
    $cookie_value = "Категорію було успішно створено";
    $cookie_expire = time() + 60; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту


    header("Location: http://localhost:9000/admin/other/index.php");
    die();


}else{
    $connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
    or die("Error: " . mysqli_error($connect));
    if (!mysqli_set_charset($connect, "utf8mb4")) {
        print("Error: " . mysqli_error($connect));
    }
    $id = $_POST['id'];
    $email = $_POST['login'];
    $password = $_POST['password'];
    $phone_1 =  $_POST['phone_1'];
    $phone_2 =  $_POST['phone_2'];
    $email_site = $_POST['email_site'];
    $query = sprintf("UPDATE users SET email = '%s',password = '%s',phone_1 = '%s',phone_2 = '$phone_2',email_site='%s' WHERE id = $id",
        $email,$password,"$phone_1",$email_site);
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $cookie_name = "success";
    $cookie_value = "Категорію було успішно створено";
    $cookie_expire = time() + 60; // 1 хвилина

    setcookie($cookie_name, $cookie_value, $cookie_expire, "/"); // '/' означає, що куки доступні для всього сайту


    header("Location: http://localhost:9000/admin/other/index.php");
    die();
}
