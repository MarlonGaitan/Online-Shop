<?php
    include ("db_connection.php");
    $email=($_POST['email']);
	$username=($_POST['username']);
	$pass=($_POST['password']);
	$dob=($_POST['dob']);
?>

<?php
    $sql="INSERT INTO users_tab(username, email, date_of_birth, password) VALUES ('$email','$username','$pass','$dob')";
	$result=$connect->query($sql);
?>