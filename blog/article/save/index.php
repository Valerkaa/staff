<?php
$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}

if(!$_POST || !$_POST['full_name'] || !$_POST['email'] || !$_POST['text'] || !$_POST['id_article']){
    http_redirect('http://localhost:9000/blog/index.php');
}

$text = htmlspecialchars($_POST['text'], ENT_QUOTES);
$full_name = htmlspecialchars($_POST['full_name'], ENT_QUOTES);

$id_article = $_POST['id_article'];
$email = $_POST['email'];


$query = sprintf("INSERT INTO comments (id, article_id, email, name, content) VALUES (NULL, '$id_article', '$email', '$full_name','$text')");
    $result = mysqli_query($connect, $query);


header("Location: http://localhost:9000/blog/article/index.php?article=$id_article");
die();
