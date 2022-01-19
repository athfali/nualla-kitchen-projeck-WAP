<?php
session_start();

include '../database/auth.php';

$auth = new Auth();

$action =  $_GET['action'];

if ($action == "login") {
    $result = $auth->login(
        $_POST['email'],
        $_POST['password'],
        $_POST['level']
    );

    if ($result) {
        $_SESSION['loggedIn'] = true;
        $_SESSION['id'] = $result['id'];
        $_SESSION['name'] = $result['name'];
        $_SESSION['level'] == "admin";
        return header("location:../information_admin.php");
    }
    return header("location:../login.php");
    
}
else if ($action == "register") {
    $auth->register(
        $_POST['name'],
        $_POST['email'],
        $_POST['password'],
        $_POST['level']
    );

    return header("location:../user_admin.php");
}
else if ($action == "delete") {
    $auth->delete(
        $_GET['id']
    );
    return header("location:../user_admin.php");
}
?>