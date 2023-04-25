<?php
include "db_connection.php";
$sql = "SELECT `product_name`, `price`, `rate`, `pic`, `department` FROM product_tab"; 
$result = mysqli_query($conn, $sql);

$data = array();
while($row = mysqli_fetch_assoc($result)){
    $a = array($row['product_name'], $row['price'], $row['rate'], $row['pic'], $row['department']);
    array_push($data, $a);
}
echo json_encode($data);
?>