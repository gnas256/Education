<?php

require_once '../service/UserService.php';
require_once '../domain/User.php';
$service = new UserServce();

if (!empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['signin'])) {
    $user = new User();
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    if ($service->signin($user)) {
        header("location: ../index.php");
    } else {
//         header("location: ../index.php");
    }
} else if (isset($_GET['signup'])) {
    $user = new User();
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);
    $user->setEmail($_POST['email']);
    $user->setName($_POST['name']);
    $user->setType($_POST['type']);
}