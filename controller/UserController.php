<?php

require_once '../service/UserService.php';
require_once '../domain/User.php';
$service = new UserServce();

if (!empty($_POST['username_sign_in']) && !empty($_POST['password_sign_in']) && isset($_POST['signin'])) {
    $user = new User();
    $user->setUsername($_POST['username_sign_in']);
    $user->setPassword($_POST['password_sign_in']);
    if ($service->signin($user)) {
        header("location: ../view/index.php");
    } else {
        echo "<script>alert('loi')</script>";
//         header("location: ../index.php");
    }
} else if (isset($_POST['signup'])) {
    $user = new User();
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setEmail("");
    $user->setName($_POST['name']);
    $user->setType($_POST['type']);
    if ($service->signup($user)) {
         header("location:../view/index.php");
    } else {
        echo "lox";
        //header("location:../404.html");
    }
} else if ($_POST['out']) {
    $service->logout();
    header("location: ../view/index.php");
} else {
    echo "lỗi";
}