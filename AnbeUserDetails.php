<!DOCTYPE html>
<html>
<head>
	<title>ANBE-UserDetails</title>
</head>
<body>
	<?php

$myemail_id=$_GET["email_id"];


$servername = "localhost";
$username = "root";
$password = "sanmol";
$dbname = "anbe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE email_id='$myemail_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Name: " . $row["firstname"]. " " . $row["surname"]. "<br>Gender: " . $row["gender"]. "<br>Date of Birth: " . $row["birthday"]. "<br>Email-Id: " . $row["email_id"]. "<br>Phone-no: " . $row["phone_no"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>
</body>
</html>
