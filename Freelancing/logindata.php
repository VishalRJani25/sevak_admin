<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="sevak";

$a = $_POST['email'];
$b = $_POST['password'];

$conn = mysqli_connect($hostname,$username,$password,$database)or die("Not Connect");
$str = "select * from register where email='$a' and password='$b'";
$result = mysqli_query($conn,$str);


$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("location:admin.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     




?>