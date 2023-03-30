<?php
    $conn = new mysqli("localhost","root","","online_shopping");
                if($conn->connect_errno)
                {
                    die("Could not connect: ".$conn->connect_errno);
                }
?>