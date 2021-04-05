<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd
">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Take A Break</title>
    <link rel="stylesheet" type="text/css" href="CSS/takeabreak.css">



    <style>
        .column {
            width: 50%;
            padding: 10px;
            height: 589px;
            background-color: #9ed9ccff;
            /* Should be removed. Only for demonstration */
        }
        /* Clear floats after the columns */
        
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
        /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
        
        @media screen and (max-width: 600px) {
            .column {
                width: 100%;
            }
        }
        
        body {
            background: url("Pictures/gradient.png") no-repeat;
            background-size: cover;
            margin-bottom: 4%;
            margin-right: 4%;
            font-family: myLocalFonts;
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
                <a style="background-color: #9ed9ccff ;" href="takeabreak.php">TAKE A BREAK</a>
            </div>

        </div>
    </div>
    <CENTER>
        <div>
            <H2>TAKE A BREAK</H2>
        </div>
    </CENTER>
    <br>
    <center>
        <div class="column">
            <div class="selectdiv ">
                <label>
                    <select id="dlist" onChange="swapImage()">
                        <option disabled hidden selected> How are you doing? </option>
                        <option value="Images/I sat too long.png">I sat for too long</option>
                        <option value="Images/I feel stressed.png">I feel stressed from studying</option>
                        <option id="video" onchange="swapVideo()" value="samples/Focus Meditation.mp4">I can't concentrate on my studies</option>
                    </select>
                </label>
            </div>
            <script type="text/javascript">
                function swapImage() {
                    var image = document.getElementById("imageToSwap");
                    var dropd = document.getElementById("dlist");
                    image.src = dropd.value;
                };
            </script>
            <script type="text/javascript">
                function swapVideo() {
                    var vid = document.getElementById("videoToSwap");
                    var dropd = document.getElementById("video");
                    vid.src = dropd.value;
                };
            </script>
            <img id="imageToSwap" src="Images/How are you doing.png" height="437px" />
            <video  width="400" height="320" controls>
                <source  id="videoToSwap" src="Videos/Focus Meditation.mp4">
            </video>
        </div>
    </center>


</body>
</script>

</html>