<?php
session_start();
include "db_connection.php";
$sql = "SELECT * FROM product_tab WHERE user_name = $_SESSION[sid]"; 
$result = mysqli_query($conn, $sql);
$count = 0;
$data = array();
while($row = mysqli_fetch_assoc($result)){
    $count = $count + 1;
}
echo json_encode($count);
?>