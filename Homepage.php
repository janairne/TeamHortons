<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="ILOVEME.css">
    <script src="CreateSched.js"></script>
    <style>
        body {
            background: url("Pictures/homebg.png") no-repeat;
            background-size: cover;
            margin-bottom: 4%;
            margin-right: 4%;
        }

        #imgicon {
            position: absolute;
            top: -10px;
            left: 10px;
            float: left;
            width: 200px;
            height: 200px;
            z-index: 2;
        }
        #AppName {
            position: absolute;
            top: -35px;
            left: 155px;
            float: left;
            width: 300px;
            height: 200px;
            z-index: 2;
        }
        @font-face {
            font-family: myLocalFonts;
            src: url(fonts/JuliusSansOne-Regular.ttf);
        }

        .navbar {
            overflow: hidden;
        }
        
        .navbar a {
            float: right;
            font-size: 17px;
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
            font-family: myLocalFonts;
        }
        
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
    </style>
</head>

<body>
    <img src="Pictures/I Love Me.png" id="imgicon">
    <img src="Pictures/AppName.png" id="AppName">

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
</body>

</html>