<?php 

$connection = mysqli_connect("localhost","root","","db200");


$name = $_POST ["course"];
$course = $_POST ["teacher"];
$semester =$_POST["semester"];




$query = "INSERT INTO class(coursename,teachername,semester) VALUES ('$name','$course','$semester') ";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());


echo "Succesfull Added !";

header("Refresh:2; url=addclass.php");

?>

