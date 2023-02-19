<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="sevak";

$a = $_POST['name'];
$b = $_POST['message'];

$conn = mysqli_connect($hostname,$username,$password,$database)or die("Not Connect");
$str = "insert into categories(name, message) values('$a','$b')";

mysqli_query($conn,$str);

header("location:Categories.php");

?>