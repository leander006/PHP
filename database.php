<?php

      $email1=$_GET['email'];
      $pass1=$_GET['pass'];




// Connect
$Servername="localhost";
$username="root";
$password="";
$database = "demo";

$conn = mysqli_connect($Servername,$username,$password,$database);


if(!$conn){
      die("Sorry failed to connect");
}
else{
      echo "Connected successfully";
}

 // To create table 

$Sql="CREATE DATABASE demo" ;


$result=mysqli_query($conn,$Sql);

// To create table

$sql = "CREATE TABLE `student` (`email` VARCHAR(40) NOT NULL , `password` VARCHAR(20) NOT NULL)";

$create = mysqli_query($conn,$sql);


// Insert into table


$sql1 = "INSERT INTO `student` (`email`, `password`) VALUES ('$email1','$pass1')";

$insert = mysqli_query($conn,$sql1);




// Select from database

$sql1 = "SELECT * FROM `student`";

$insert = mysqli_query($conn,$sql1);


$num = mysqli_num_rows($insert);
echo "</br>";

if($num >0){
      while($row = mysqli_fetch_assoc($insert)){
            echo "Hello! ". $row['email'] . "your password is" .  $row['password'] ;
            echo "</br>";
      }
}



?>