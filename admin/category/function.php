<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');

function categories ($connect) {
    $query = sprintf("SELECT * FROM categories");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);
     foreach ($get_user as $key=>$category){
         $query = sprintf("SELECT * FROM articles WHERE category_id = " .$category[0] );
         $result = mysqli_query($connect, $query);
         $get_articles = mysqli_fetch_all($result);

         $get_user[$key]['product'] = count($get_articles);
     }
    return $get_user;
}