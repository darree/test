<?php
include('login.php');

if(isset($_SESSION['login_email'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
    <h1>Login Form</h1><br/>
    <div id="login">

        <form action="login.php" method="post">
            <label>Email :</label>
            <input id="name" name="email" placeholder="Vas Email" type="text"><br/>
            <label>Password :</label>
            <input id="password" name="password" placeholder="**********" type="password"><br/>
            <input name="submit" type="submit" value=" Login ">
            <span><?php echo implode("<br>", $error); ?></span>
        </form>
    </div>
</div>
</body>
</html>