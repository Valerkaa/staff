<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');

function articles ($connect) {
    $query = sprintf("SELECT * FROM articles");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);
    foreach ($get_user as $key=>$articles){
        $query = sprintf("SELECT * FROM categories WHERE id = " .$articles[5] );
        $result = mysqli_query($connect, $query);
        $get_articles = mysqli_fetch_assoc($result);

        $get_user[$key]['category'] = $get_articles['name'];
    }
    return $get_user;
}

function categoies ($connect) {
    $query = sprintf("SELECT * FROM categories");
    $result = mysqli_query($connect, $query);
    $get_articles = mysqli_fetch_all($result);
    return $get_articles;
}