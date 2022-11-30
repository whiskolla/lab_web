<?php

$connect = mysqli_connect('localhost','root','','123');

if (!$connect) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!";
mysqli_close($connect);
?>
