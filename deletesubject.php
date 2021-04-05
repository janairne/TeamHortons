<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scheduledb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$SubName = $_POST['SubNameDel'];
$sql = "DELETE FROM myscheduledb WHERE subjectn = '$SubName'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
$conn->close();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>redirect</title>
		<meta http-equiv="refresh" content="0; url = /Hackathon/ClassSetUp.php"/>
	</head>
	<body>
		<p>redirect</p>
	</body>
</html>
<br><br>
<a href="ClassSetUp.php">Back to home</a>