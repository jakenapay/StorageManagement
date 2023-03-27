<?php

// Login
function login($conn, $email, $password)
{
    $stmt = $conn->prepare("SELECT * FROM users WHERE user_email = ?");
    $stmt->bindParam(1, $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($result === false) {
        header("location: ../login.php?m=unf");
        exit();
    }

    if (!password_verify($password, $result['user_password'])) {
        header("location: ../login.php?m=wp");
        exit();
    }

    if ($result['user_status'] !== 'active') {
        header("location: ../login.php?m=ia");
        exit();
    }

    session_start();
    $_SESSION["id"] = $result['user_id'];
    $_SESSION['eid'] = $result['user_employee_id'];
    $_SESSION['fn'] = $result['user_firstname'];
    $_SESSION['ln'] = $result['user_lastname'];
    $_SESSION['em'] = $result['user_email'];
    $_SESSION['ct'] = $result['user_category'];
    $_SESSION['st'] = $result['user_status'];

    if ($result['user_category'] !== 'admin') {
        header("location: ../home.php");
        exit();
    } else {
        header("location: ../index.php");
        exit();
    }
}


// Check if empty inputs in login.php
function checkEmpty($email, $password)
{
    if (empty($email) || empty($password)) {
        return true;
    } else {
        return false;
    }
}


// Checks if the email is valid
function is_valid_email($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
