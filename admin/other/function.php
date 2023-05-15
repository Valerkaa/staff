<?php


$connect = mysqli_connect('mysql', 'myuser', 'mypassword', 'mydb');

function categories ($connect) {
    $query = sprintf("SELECT * FROM users");
    $result = mysqli_query($connect, $query);
    if (!$result)
        die(mysqli_error($connect));
    $get_user = mysqli_fetch_assoc($result);
    return $get_user;
}

$user = categories($connect);