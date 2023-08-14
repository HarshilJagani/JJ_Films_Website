<?php
include("movie submit.php");
$host = "localhost";  
$user = "root";  
$pass = "";  
$conn = mysqli_connect($host,$user,$pass);  
if(! $conn )  
{  
  die('Could not connect: ' . mysqli_error());  
}  

$Mname=$_POST['mname'];
$Ryear=$_POST['year'];
$Genre=$_POST['genre'];
$Description=$_POST['description'];
$Email=$_POST['email'];


$query="INSERT INTO `movie`.`movie`(mname,year,genre,description,email) VALUES ('$Mname','$Ryear','$Genre','$Description','$Email')";


if(mysqli_query($conn,$query)){
    echo "<script type='text/javascript'> alert('Movie Registered')</script>";
}else{
    echo "<script type='text/javascript'> alert('Enter Valid Information')</script>";
}

mysqli_close($conn);  
?>
