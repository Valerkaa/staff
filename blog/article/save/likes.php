<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}

$ip_l = $_SERVER['REMOTE_ADDR'];
$id = $_GET['id_articles'];

$query = sprintf("SELECT * FROM likes_ip WHERE ip = '$ip_l' AND id_articles = $id");
$result = mysqli_query($connect, $query);
$ip = mysqli_fetch_all($result);

$query = sprintf("SELECT * FROM articles WHERE id = $id");
$result = mysqli_query($connect, $query);
if (!$result)
    die(mysqli_error($connect));
$get_user = mysqli_fetch_all($result);



if(empty($ip[0])){

    $query = sprintf("INSERT INTO likes_ip (ip,id_articles) VALUES ('$ip_l',$id);");
    $result = mysqli_query($connect, $query);
    $get_user[0][6] += 1;
    $l = $get_user[0][6];
    $query = sprintf("UPDATE articles SET likes = '$l' WHERE id = $id");
    $result = mysqli_query($connect, $query);
    header("Location: http://localhost:9000/blog/article/index.php?article=$id");
    die();

}else{


    $query = sprintf("DELETE FROM likes_ip WHERE id = ".$ip[0][0]);
    $result = mysqli_query($connect, $query);


    $get_user[0][6] -= 1;
    $l = $get_user[0][6];
    $query = sprintf("UPDATE articles SET likes = '$l' WHERE id = $id");
    $result = mysqli_query($connect, $query);
    header("Location: http://localhost:9000/blog/article/index.php?article=$id");
    die();

}



header("Location: http://localhost:9000/blog/article/index.php?article=$id");
die();
