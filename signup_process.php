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
<<<<<<< HEAD
    $sql="INSERT INTO users_tab(username, email, date_of_birth, password) VALUES ('$email','$username','$pass','$dob')";
	$result=$conn->query($sql);
?>
=======
    $sql="INSERT INTO `users_tab`(`sid`, `username`, `email`, `date_of_birth`, `password`, `premium`) VALUES (0, '$username','$email','$dob','$pass', 0)";
	$result=$connect->query($sql);
?>
>>>>>>> 4cb9eb69a0a9a16cc321d0424fb5ff504b3a9660
