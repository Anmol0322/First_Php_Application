<?php


$servername = "localhost";
$username = "root";
$password = "sanmol";
$dbname = "anbe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$firstname=$_GET["firstname"];
$surname=$_GET["surname"];
$gender=$_GET["gender"];
$birthday=$_GET["birthday"];
$email_id=$_GET["email_id"];
$password=$_GET["password"];
$phone_no=$_GET["phone_no"];



$sql = "INSERT INTO user (firstname, surname, gender, birthday, email_id, password, phone_no)
VALUES ('$firstname', '$surname', '$gender', '$birthday', '$email_id', '$password', '$phone_no')";

if (mysqli_query($conn, $sql)) {
		echo "Your account is created successfully, ".$firstname." ".$surname." !";
		//header("location:LoginInAnbe.html?email_id='&email_id'+&password='$password'");
	} else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	}

$conn->close();

?>
