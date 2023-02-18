<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="sevak";

$a = $_POST['email'];
$b = $_POST['password'];

$conn = mysqli_connect($hostname,$username,$password,$database)or die("Not Connect");
$str = "insert into register(email, password) values('$a','$b')";

mysqli_query($conn,$str);

header("location:index.php");

?>