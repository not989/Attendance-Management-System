<?php 


$connection = mysqli_connect("localhost","root","","db200");

$value = $_GET["con"];


$data = unserialize(file_get_contents("saveddata.txt"));



$name = $data["course"];


$query = "SELECT semester FROM class WHERE coursename='$name'";

$sql = mysqli_query($connection,$query);

while ($row = $sql->fetch_assoc()){

	$temp = $row['semester'];

}


$query2 = "SELECT reg FROM studentinfo WHERE semester='$temp'";

$sql2 = mysqli_query($connection,$query2);

$c=0;

while ($row2 = $sql2->fetch_assoc()){

	$temp = $row2['reg'];

	$query3 = "INSERT INTO attendance(reg, coursename, count) VALUES ('$temp','$name','$value[$c]') ON DUPLICATE KEY UPDATE  count=count+$value[$c]";

	$sql3 = mysqli_query($connection,$query3);

	$c=$c+1;

}

$query3 = "UPDATE class SET totalclass = totalclass+1 WHERE  coursename='$name'";

$sql3 = mysqli_query($connection,$query3);



echo "Data Saved";
header("Refresh:1; url=selectclass.php");


?>