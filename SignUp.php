<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="ILOVEME.css">
    <script src="CreateSched.js"></script>
    <style>
        .navbar {
            overflow: hidden;
        }
        
        .navbar a {
            float: right;
            font-size: 16px;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            border-radius: 20px;
            font-family: myLocalFonts;
        }
        
        .dropdown {
            float: right;
            overflow: hidden;
            border-radius: 20px;
        }
        
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: black;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            font-family: myLocalFonts;
        }
        
        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: #ffdde2ff;
        }
        
        .navbar a:active,
        .dropdown:active .dropbtn {
            background-color: #9ed9ccff;
        }
        
        .navbar .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>

<body>

    <div class="navbar" float:right>
        <a href="Login.php">LOGIN</a>
        <a href="AboutPage.php">ABOUT</a>
        <a href="Homepage.php">HOME</a>

        <div class="dropdown">
            <button class="dropbtn" style="background-color: #9ed9ccff ;">START
                <i class="fa fa-caret-down"></i>
              </button>
            <div class="dropdown-content">

                <a href="takeabreak.php">TAKE A BREAK</a>

            </div>

        </div>
    </div>
    <img src="Pictures/I Love Me.png" id="imgicon">
    <img src="Pictures/AppName.png" id="AppName">
    <form method="POST" id="formlogin" action="signupexe.php">
        <center>
            <h2 class="text"> Sign Up </h2>
        </center>
        <label> Username : </label>
        <center><input type="text" placeholder="Enter Full Name" name="Username" required></center>
        <label>Email : </label>
        <center><input type="text" placeholder="Enter Email" name="Email" required></center>
        <label>Password : </label>
        <center><input type="password" placeholder="Enter Password" name="Password" required></center>
        <br>
        <center><a  href="Login.php" id="fontstyle">Already Have An Account? Sign In</a></center>
        <center><button type="submit">Sign Up</button></center><br>
    </form>
        
</body>

</html>