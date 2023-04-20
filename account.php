<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/ShopProjectCSS.css">

    <title>Account & Settings</title>
</head>
<body bgcolor = "#262626">
    <?php include 'banner.php';?>
    <div class = "infoContainer">
        <div class = "infoContainer-content">
            <div class="titleContainer">
                <h1 style="color:white;">Account Information</h1>
            </div>
    <?php
        session_start();
        $uname = ($_SESSION['username']);
        include("db_connection.php");
		$sql="SELECT * FROM users_tab where username = '$uname'";
        $result = mysqli_query($conn, $sql);
		echo"<center>";
        echo "<div class='accountInfo'>";
		echo"<table align = 'center'>";
		while($row = $result -> fetch_assoc())
		{
			echo "<tr>";
			echo "<td>";
			echo "<span> Name: </span>";
			echo "</td><td>";
			echo "$row[username]";
            echo "</td></tr>";
            echo "<tr><td>";
			echo "<span> Email: </span>";
			echo "</td><td>";
			echo "$row[email]";
            echo "</td></tr>";
            echo "<tr><td>";
			echo "<span> Date of Birth: </span>";
			echo "</td><td>";
			echo "$row[date_of_birth]";
            echo "</td></tr>";
            echo "<tr><td>";
			echo "<span> Address</span>";
			echo "</td><td>";
			echo "$row[address]";
            echo "</td></tr>";			
		}
		echo "</table>";
        echo "</div>";
		echo "</center>";
    ?>
    </div>
    </div>
    <div class = "infoContainer">
        <div class = "infoContainer-content">
            <div class="information">
                <div class = "titleContainer">
                    <h2 style="color:white;">Customer Service</h2>
                </div>
                <div class = "accountInfo">
                    <div class = "picture">
                        <img src="img/customer.png" alt="customerService">
                    </div>
                    <div class = "phoneNumber">
                        <span name = "CS">Phone Number:</span>
                        <span name = "CS">+1 (305)803-6577</span>
                    </div>
                    <div class = "email">
                        <span name = "CS">Email:</span>
                        <span name = "CS">customsupport@gmail.com</span>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>