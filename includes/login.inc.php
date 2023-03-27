<?php

if (isset($_POST['login-btn'])) {

    // Includes
    include 'config.inc.php';
    include 'functions.inc.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (checkEmpty($email, $password)) {
        header("location: ../login.php?m=ef");
        exit();
    }

    if (!is_valid_email($email)) {
        header("location: ../login.php?m=ie");
        exit();
    }



    login($conn, $email, $password);
} else {
    header("location: ../login.php");
    exit();
}
