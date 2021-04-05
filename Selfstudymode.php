<?php require('Authenticate.php') ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="todolist.css">
    <title>Self-Study Zone</title>

    <style>
        * {
            box-sizing: border-box;
        }
        /* Create three equal columns that floats next to each other */
        
        .column {
            float: left;
            width: 33.33%;
            padding: 10px;
            height: 650px;
            background-color: none;
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
        
        #music_list {
            position: fixed;
            bottom: 5px;
            left: 5px;
            display: inline;
        }
        
        .text {
            font-size: 200%;
            font-family: "Baskerville Old Face";
            text-align: center;
            font-weight: bolder;
            font-family: myLocalFonts;
        }
        
        body {
            font-family: myLocalFonts;
            background-color: #faa094ff;
            background: url("Pictures/gradient.png") no-repeat;
            margin-bottom: 4%;
        }
        
        .navbar {
            overflow: hidden;
            font-family: myLocalFonts;
        }
        
        .navbar a {
            float: right;
            font-size: 16px;
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
        
        .button {
            background-color: #008c76ff;
            border: none;
            color: white;
            padding: 14px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
            font-family: myLocalFonts;
        }
        
        .btn-dnger {
            background-color: red;
            border: none;
            color: white;
            padding: 14px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }
        
        .btn-snooze {
            background-color: gray;
            border: none;
            color: white;
            padding: 14px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
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
                <a href="Takeabreaklogged.php">TAKE A BREAK</a>
                <a style="background-color: #9ed9ccff ;" href="Selfstudymode.php">SELF-STUDY ZONE</a>
            </div>

        </div>
    </div>

    <div id="music_list">
        <!-- This will only show the music player, and enable the audio file on the document-->
        <audio controls autoplay></audio>
    </div>

    <script src="music.js"></script>
    </div>
    <CENTER>
        <div>
            <H2>SELF-STUDY ZONE</H2>
        </div>
    </CENTER>
    <div class="column">

        <div id="myDIV" class="header">
            <h2>My To-do List</h2>
            <input type="text" id="myInput" placeholder="Add a task">
            <span onclick="newElement()" class="addBtn">Add</span>
        </div>
        <ul id="myUL">
            <li>Finish the whole system for Hackathon</li>
            <li class="checked">Finish Self-Study feature</li>
            <li>Integrate back-end</li>
            <li>Video Documentation</li>
            <li>Prepare a Pitch</li>
            <li>Drink Coffee</li>
            <li>System System</li>
            <li>Rest for 20 minutes</li>
            <li>Stretch for 20 minutes</li>
        </ul>

    </div>
    <script>
        // Create a "close" button and append it to each list item
        var myNodelist = document.getElementsByTagName("LI");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        // Click on a close button to hide the current list item
        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }

        // Add a "checked" symbol when clicking on a list item
        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
            if (ev.target.tagName === 'LI') {
                ev.target.classList.toggle('checked');
            }
        }, false);

        // Create a new list item when clicking on the "Add" button
        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("myInput").value;
            var t = document.createTextNode(inputValue);
            li.appendChild(t);
            if (inputValue === '') {
                alert("You must write something!");
            } else {
                document.getElementById("myUL").appendChild(li);
            }
            document.getElementById("myInput").value = "";

            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);

            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                }
            }
        }
    </script>

<div class="column">
        <div id="myDIV" class="header-alarm">
            <center>
                <h3>TIME ORGANIZER</h3>
            </center>
            <script>
                function display_ct7() {

                    var x = new Date()
                    var ampm = x.getHours() >= 12 ? ' PM' : ' AM';
                    hours = x.getHours() % 12;
                    hours = hours ? hours : 12;
                    hours = hours.toString().length == 1 ? 0 + hours.toString() : hours;

                    var minutes = x.getMinutes().toString()
                    minutes = minutes.length == 1 ? 0 + minutes : minutes;

                    var seconds = x.getSeconds().toString()
                    seconds = seconds.length == 1 ? 0 + seconds : seconds;

                    var month = (x.getMonth() + 1).toString();
                    month = month.length == 1 ? 0 + month : month;

                    var dt = x.getDate().toString();
                    dt = dt.length == 1 ? 0 + dt : dt;

                    var x1 = month + "/" + dt + "/" + x.getFullYear();
                    x1 = x1 + " - " + hours + ":" + minutes + ":" + seconds + " " + ampm;
                    document.getElementById('ct7').innerHTML = x1;
                    display_c7();
                }

                function display_c7() {
                    var refresh = 1000; // Refresh rate in milli seconds
                    mytime = setTimeout('display_ct7()', refresh)
                }
                display_c7()
            </script>
            <center><span id='ct7' style="float: right"></span>
            <div> <br> <br />
                <center>
                    <input type="text" placeholder="Enter Task name">
                    <input type="datetime-local" id="alarmTime">
                    <button type="button" onclick="setAlarm(this);" id="alarmButton" class="button"><span class="glyphicon glyphicon-time"></span> Set Alarm</button>
                </center>

                <div id="selectButton" style="display:none;">
                    <center>
                        <button onclick="snoozeAlarm();" class="btn-snooze"><span class=" glyphicon glyphicon-pause "></span> Snooze 5 minutes</button>
                        <button onclick="stopAlarm(); " class="btn-dnger "><span class="glyphicon glyphicon-stop "></span> Stop Alarm</button>
                    </center>
                </div>
            </div>
            </center>
            <script src="alarm.js"></script>
        </div>
    </div>

    <div class="column ">
        <div id="myDIV" class="header-alarm">
            <center>

                <h3>MUSIC CHANNEL</h3>
            </center>
            <p>The autoplayed musics can encourage creativity and help us become more productive. Listening to music can also be therapeutic, relieving feelings of stress so you can concentrate better. </p>

            <h4>Have a spotify account? Choose songs that you want from our recommended playlist</h4>
            <CENTER> <iframe src="https://open.spotify.com/embed/album/7fbcWhEX5VUyFCGijtKUUh
 " width="300 " height="380 " frameborder="0 " allowtransparency="true " allow="encrypted-media ">
            </iframe></CENTER>
        </div>
    </div>



</body>



</html>