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
// prepare and bind
$stmt = $conn->prepare("INSERT INTO myscheduledb (subjectn, SubjectDay, TimeStart, TimeEnd, ZoomMeetingURL) VALUES (?,?, ?, ?, ?)");
$stmt->bind_param("sssss", $SubjectName, $SubjectDay, $TimeStart, $TimeEnd, $ZoomMeetingURL);


$SubjectName = $_POST['SubName'];
$SubjectDay = $_POST['SubDay'];
$TimeStart = $_POST['SubST'];
$TimeEnd = $_POST['SubET'];
$ZoomMeetingURL = $_POST['SubLink'];
$stmt->execute();


echo "New record created successfully";


$stmt->close();
$conn->close();
?>
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
<br><br><a href="ClassSetUp.php">Back to home</a>
<?php?>