<?php
include("db_connection.php");
session_start();
if(isset($_POST['username']) && isset($_POST['password'])){
    $uname = $_POST['username'];
    $_SESSION['username'] = $uname;
    $pswd = $_POST['password'];

    $sql = "SELECT * FROM users_tab WHERE username = '$uname' AND password = '$pswd'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $uname && $row['password'] === $pswd){
            header("Location: main.php");
        }
        else{
            header("Location: log_in.php?error=Incorrect User name or password");
            exit();
        }
    }
    else{
        header("Location: log_in.php?error=Incorrect User name or password");
        exit();
    }
}
else{
    header("Location: log_in.php?error=Incorrect User name or password");
    exit();
}
?>