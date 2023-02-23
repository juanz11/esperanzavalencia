<?php

// database connection code
$con = mysqli_connect(
	"esperanzavalencia.com",
	"esperanza",
	"4SJJRF7v3aVeYZN",
	"esperanza_date test"
);


// get the post records
$usersName = $_POST['usersName'];
$usersPurpouse = $_POST['usersPurpouse'];
$date_value = $_POST['date_value'];

// database insert SQL code
$sql1 = "INSERT INTO `users` (`Id`, `usersName`, `usersPurpouse`) VALUES ('0', '$usersName', '$usersPurpouse');";
$sql2 = "INSERT INTO `date` (`Id`, `date_value`) VALUES ('0', '$date_value');";


// insert in database 
$rs1 = mysqli_query($con, $sql1);
$rs2 = mysqli_query($con, $sql2);

echo "<h1> Process completed </h1>";

if($rs1)
{
	echo "<h3> Process completed </h3>";
}

if($rs)
{
	echo "<h3> Process completed </h3>";
}

mysqli_close($con);

?>