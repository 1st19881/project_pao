<?php

$servername = "localhost";

$username = "root";

$password = "";

$db = "project01";




$conn = mysqli_connect($servername, $username, $password,$db);




if (!$conn) {

   die("Connection failed: " . mysqli_connect_error());

}

echo "เชื่อมต่อสำเร็จ";

?>