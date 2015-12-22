<?php

require_once('../mysqli_connect.php');
session_start();
$error = array();
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        array_push($error, "Email ili password nije validan");
    }
        $email = mysql_real_escape_string(stripslashes($_POST['email']));
        $password = mysql_real_escape_string(stripslashes($_POST['password']));


        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $response = mysqli_query($dbc,$query);

   //     $rows = mysqli_num_rows($response);

   //     if ($rows == 1)
    // sto nece ovako iznad da radi
        if ($response)
        {
            $_SESSION['login_email'] = $email;
            header("location:profile.php");
        } else {
            array_push($error, "Email ili password nije validan");
        }
        mysqli_close($dbc);

}