<?php
include("db_connection.php");
session_start();
if(($_POST["vercode"] != $_SESSION["vercode"]) )
{
    header("Location: log_in.php?error=<li><a class = 'error'>Captcha Failed</a></li>");
}
else
{
if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $_SESSION['username'] = $uname;
    $pswd = $_POST['password'];

    $sql = "SELECT * FROM users_tab WHERE username = '$uname' AND password = '$pswd'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $uname && $row['password'] === $pswd){
            $_SESSION['role'] = $row['role_id'];
            $_SESSION['sid'] = $row['sid'];
            header("Location: main.php");
        }
        else{
            header("Location: log_in.php?error=<li><a class = 'error'>Incorrect User name or password</a></li>");
            exit();
        }
    }
    else{
        header("Location: log_in.php?error=<li><a class = 'error'>Incorrect User name or password</a></li>");
        exit();
    }
}
else{
    header("Location: log_in.php?error=<li><a class = 'error'>Incorrect User name or password</a></li>");
    exit();
}
}
?>