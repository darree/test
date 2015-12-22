<?php
require_once('../mysqli_connect.php');

session_start();

$user_check= $_SESSION['login_email'];

$ses_query = "SELECT email FROM users WHERE email='$user_check'";

$ses_sql = mysqli_query($dbc, $ses_query);

$row = mysqli_fetch_assoc($ses_sql);

$login_session = $row['email'];

if (!isset($login_session)){
    mysql_close($dbc);
    header('Location: index.php');
}