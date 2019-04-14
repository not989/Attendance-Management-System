<?php 

$connection = mysqli_connect("localhost","root","","db200");


$givenu = $_POST ["name"];
$givenp = $_POST ["password"];

$query = "SELECT * FROM teacherinfo WHERE teachername='$givenu' AND password='$givenp'";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());

$row =mysqli_fetch_array($result);

$dbu = $row['teachername'];
$dbp = $row['password'];


if($dbu==$givenu && $dbp==$givenp){

	$data["name"]=$_POST["name"]; 

	file_put_contents("saveddata.txt", serialize($data));

	header("Location: selectclass.php");
	
	die();
}

else{

	echo "Username and Password combination is incorrect";

	header("Refresh:2; url=loginteacher.php");
	//header("Location: loginadmin.php");
	//die();
}




 ?>