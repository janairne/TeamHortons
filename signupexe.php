<?php
require('db.php');
function promptme()
{
    
}
// If form submitted, insert values into the database.
if (isset($_REQUEST['Username'])){
        // removes backslashes
	$username = stripslashes($_REQUEST['Username']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['Email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['Password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "INSERT into `users` (username, password, emailadd)
VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<script>
            alert('Account Successfuly Created!');
            window.location.href='Login.php';
            </script>";
        }
    }
    else
    {
        header("Location: Homepage.php");
    }
?>