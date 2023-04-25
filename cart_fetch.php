<?php
session_start();
include "db_connection.php";
$sql = "SELECT `sid` FROM cart_tab WHERE   `user_name` = $_SESSION[sid]"; 
$result = mysqli_query($conn, $sql);
$data = array();
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    $count = $count + 1;
}
array_push($data, $count);
echo json_encode($data);
?>