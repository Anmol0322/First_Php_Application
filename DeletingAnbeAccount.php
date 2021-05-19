<!DOCTYPE html>
<html>
<head>
	<title>ANBE-DeletingAccount</title>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "sanmol";
$dbname = "anbe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "DELETE FROM user WHERE firstname='ananya'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}


$conn->close();

?>

</body>
</html>

