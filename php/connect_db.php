<?php

$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');


$query = sprintf("SELECT * FROM articles");
$result = mysqli_query($connect, $query);
if (!$result)
    die(mysqli_error($connect));
$get_user = mysqli_fetch_all($result);


$limit = 0;
$categories = 1;

$page = 1;
if($_GET['page'] != 1 || $_GET['page'] != null){
    $page =  $_GET['page'];
}
if(!empty($_GET['limit_low'])){
    $limit = $_GET['limit'];

}


if(!empty($_GET['categories'])){
    $categories = $_GET['categories'];
}

function get_article($connect,$limit_low,$categories,$page){
    $limit_hight = 9;
    $offset = 0;
    if($page != 1){
        $offset = $page * 9;
    }
    $query = sprintf("SELECT * FROM articles WHERE category_id = $categories LIMIT $limit_hight OFFSET $offset");

    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);

    return $get_user;
}

function paginate($connect,$categories = null){
    if($categories != null){
        $query = sprintf("SELECT * FROM articles WHERE category_id = $categories");
        $result = mysqli_query($connect, $query);
        if (!$result)
            die(mysqli_error($connect));
        $get_user = mysqli_fetch_all($result);

        $pages = count($get_user) / 10;
        $pages =  ceil($pages);
        return $pages;
    }else{
        $query = sprintf("SELECT * FROM articles");
        $result = mysqli_query($connect, $query);
        if (!$result)
            die(mysqli_error($connect));
        $get_user = mysqli_fetch_all($result);

        $pages = count($get_user) / 10;
        $pages =  ceil($pages);
        return $pages;
    }

}


function get_categories($connect){
    $query = sprintf("SELECT * FROM categories");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_all($result);

    return $get_user;
}

function get_category($connect,$id){
    $query = sprintf("SELECT * FROM categories WHERE id = $id");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_assoc($result);

    return $get_user['name'];
}

function get_users(){
    $connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');

    $query = sprintf("SELECT * FROM users");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_assoc($result);
    unset($get_user['login']);
    unset($get_user['password']);
    return $get_user;
}

$user = get_users();