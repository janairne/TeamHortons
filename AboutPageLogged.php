<?php require('Authenticate.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
    <link rel="stylesheet" type="text/css" href="ILOVEME.css">

    <style>
        body {
            background: url("Pictures/gradient.png") no-repeat;
            margin-top: 4%;
            margin-bottom: 4%;
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
        
        .rectangle {
            position: absolute;
            width: 967px;
            height: 599px;
            left: 236px;
            top: 213px;
            border: 3px solid #000000;
            box-sizing: border-box;
        }
        
        .img1 {
            position: absolute;
            width: 189px;
            height: 186px;
            left: 921px;
            top: 341px;
            background: #008C76;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        
        .img2 {
            position: absolute;
            width: 189px;
            height: 186px;
            left: 313px;
            top: 550px;
            background: #008C76;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        
        .text1 {
            width: 560px;
            height: 151px;
            left: 313px;
            top: 364px;
            font-family: myLocalFonts;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 23px;
            color: #000000;
            margin-left: 4%;
        }
        
        .text2 {
            width: 493px;
            height: 151px;
            left: 629px;
            top: 588px;
            font-family: myLocalFonts;
            font-style: normal;
            font-weight: normal;
            font-size: 18px;
            line-height: 23px;
            text-align: right;
            color: #000000;
        }
        
        .text3 {
            width: 114px;
            height: 53px;
            left: 640px;
            top: 251px;
            font-family: Archivo Narrow;
            font-style: normal;
            font-weight: bold;
            font-size: 36px;
            line-height: 48px;
            color: #000000;
        }


    </style>

</head>

<body>
    <img src="Pictures/I Love Me.png" id="imgicon">
    <img src="Pictures/AppName.png" id="AppName">
    <div class="navbar" float:right>
        <a href="logout.php">LOGOUT</a>
        <a href="AboutPageLogged.php">ABOUT</a>
        <a href="HomepageAcct.php">HOME</a>

        <div class="dropdown">
            <button class="dropbtn" style="background-color: #9ed9ccff ;">START
                <i class="fa fa-caret-down"></i>
              </button>
            <div class="dropdown-content">
                <a href="ClassSetUp.php">CLASS SETUP</a>
                <a href="takeabreak.php">TAKE A BREAK</a>
                <a href="selfstudymode.php">SELF-STUDY ZONE</a>
            </div>

        </div>
    </div>
    <div class="rectangle"><br></br>
        <center> <span class="text3">
            ABOUT <br></br>

            </span></center>

        <span class="text1"> I Love Me is a hackathon project developed by Team Hortons.
             The theme of this project
            is about helping students in this time of pandemic. This system mainly addresses the students' mental health
            by setting their minds with effective techniques for a quality learning  
             .<br></br>

        </span>

        <span class="text2"> I Love Me is a collaboration of useful features that aid students in their studies. The main feature
            is the class setup where you can input your class schedule and the system will prompt an activity for you to do to ready
            your mind in learning. It would also autmatically open your google meet for that particular subject for easy access. The
            second feature is the self-study mode where the system automaticaally plays musics that will make you more productive and 
            relaxed while study. It also has a to do list and a time organizer to suit your needs. Lastly, the important feature
            called the "Take a break" is where you can use whenever you feel burnt out and exhausted from studying. It  will prompt
            different activities such as exercising and meditating to ease your stress.


       </span>
    </div>

</body>

</html>

</html>