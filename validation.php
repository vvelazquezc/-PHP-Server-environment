<?php
    session_start();
    $userName = $_POST['username'];
    $password = $_POST['password'];

//  $userName = filter_input(INPUT_POST, 'username');
//  $password = filter_input(INPUT_POST, 'password');


    if (empty($userName)) {
        $name_error = "<p class='text_val'>Please insert your User Name</p>";
    } elseif (strlen($userName) < 3) {
        $name_error = "<p class='text_val'>Your username needs to have a minimum of a 6 letters</p>";
    }

    if (empty($password)) {
        $password_error = "<p class='text_val'>Please insert your password</p>";
    } elseif (strlen($password) < 6) {
     $password_error = "<p class='text_val'>Your password needs to have a minimum of a 6 letters</p>";
    }

 if (empty($name_error) && empty($password_error))  {
     $_SESSION['username'] = $userName;
     $_SESSION['password'] = $password;
        $url= 'panel.php';
        header('Location: ' . $url);
    // include('panel.php');
 } else {
    // $url= 'index.php';
    // header("Refresh: 0.2; URL=$url");
     include('index.php');
 }