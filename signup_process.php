<?php
    include ("db_connection.php");
    $email=($_POST['email']);
	$username=($_POST['username']);
	$pass=($_POST['password']);
	$dob=($_POST['dob']);
	echo $email;
	echo $dob;
?>

<?php
    $sql="INSERT INTO `users_tab`(`sid`, `username`, `email`, `date_of_birth`, `password`, `premium`) VALUES (0, '$username','$email','$dob','$pass', 0)";
	$result=$connect->query($sql);
?>
