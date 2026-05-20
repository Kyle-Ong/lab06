<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
</head>
<body>
<?php include 'header.inc';?>
<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if($username == 'admin' && $password =='password123'){
    $_SESSION['user'] = $username;
    header('Location: welcome.php');
}else
{
    echo"invalid login.<a href='login.html'>Try again</a>";
}
?>
<?php include 'footer.inc';?>
</body>
</html>