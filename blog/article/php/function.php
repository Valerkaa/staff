<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb')
or die("Error: " . mysqli_error($connect));
if (!mysqli_set_charset($connect, "utf8mb4")) {
    print("Error: " . mysqli_error($connect));
}

function get_product($connect,$id){
    $query = sprintf("SELECT * FROM articles WHERE id = $id");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_assoc($result);

    return $get_user;
}

$article = get_product($connect,$_GET['article']);

function get_category_art($connect,$id){
    $query = sprintf("SELECT * FROM categories WHERE id = $id");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_assoc($result);

    return $get_user;
}

$category = get_category_art($connect,$article['category_id']);

function get_commect_art($connect,$id){
    $query = sprintf("SELECT * FROM comments WHERE article_id = $id");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);

    return $get_user;
}

$comments = get_commect_art($connect,$_GET['article']);


function get_recomendation($connect,$id){
    $query = sprintf("SELECT id,title,created_at,images FROM articles WHERE category_id = $id ORDER BY RAND() LIMIT 3;");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);

    return $get_user;
}

$recomendation = get_recomendation($connect,$article['category_id']);