<?php

// database connection code
$con = mysqli_connect(
	"esperanzavalencia.com",
	"esperanza",
	"4SJJRF7v3aVeYZN",
	"esperanza_date test"
);

// get the post records
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$subject = $_POST['subject'];
$tutoring_date = $_POST['tutoring_date'];
$tutoring_time = $_POST['tutoring_time'];
$email = $_POST['email'];


// insert in database 
$rs1 = mysqli_query($con, $sql1);


echo "<h1> Process completed </h1>";
if($rs1)
{
	echo "<h3> information saved in db </h3>";
	mail($email,$subject,"You just scheduled a mentoring in the date:" .$tutoring_date ." and time: " .$tutoring_time);
} else {
    echo "SQL Error: " . mysqli_error($conn);
	mail($email,$subject,"your mentorship can't scheduled: " .$tutoring_date ." and time: " .$tutoring_time);
}



?>