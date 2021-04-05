<?php require('Authenticate.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Class Set Up</title>
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

<body id="dashboard">
    <div class="navbar" float:right>
        <a href="logout.php">LOGOUT</a>
        <a href="AboutPageLogged.php">ABOUT</a>
        <a href="HomepageAcct.php">HOME</a>

        <div class="dropdown">
            <button class="dropbtn" style="background-color: #9ed9ccff ;">START
                <i class="fa fa-caret-down"></i>
              </button>
            <div class="dropdown-content">
                <a style="background-color: #9ed9ccff ;" href="ClassSetUp.php">CLASS SETUP</a>
                <a href="Takeabreaklogged.php">TAKE A BREAK</a>
                <a href="selfstudymode.php">SELF-STUDY ZONE</a>
            </div>

        </div>
    </div>
    <img src="Pictures/I Love Me.png" id="imgicon">
    <img src="Pictures/AppName.png" id="AppName">

    <div id="Rectangle">
        <h2 id="fontstyle">SCHEDULE</h2>
        <table id=schedule class="tableone">
            <tr>
                <th class="main">TIME</th>
                <th class="main">MONDAY</th>
                <th class="main">TUESDAY</th>
                <th class="main">WEDNESDAY</th>
                <th class="main">THURSDAY</th>
                <th class="main">FRIDAY</th>
                <th class="main">SATURDAY</th>
            </tr>
            <?php
                    error_reporting(0);
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "scheduledb";
                    $counter = 0;
                    $counterlast = 0;
                    $STimecurr = 0;
                    $STimehighest = 0;
                    $countertwo = 0;
                    $daymodif = 0;
                    $SName = array();
                    $SDay = array();
                    $SDayNum = array();
                    $SSTime = array();
                    $SETime = array();
                    $SLink = array();
                    $STsort = array();
                    $Disp1 = array();
                    $Disp2 = array();
                    $Disp3 = array();
                    $Disp4 = array();
                    $Disp5 = array();
                    $Disp6 = array();
                    $Disp7 = array();
                    $Disp8 = array();
                    $Disp9 = array();
                    $Disp10 = array();
                    $Disp11 = array();
                    $Disp12 = array();
                    $Disp13 = array();
                    $Disp14 = array();
                    $Disptxt = array();

                    

                    
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 
                    $sql = "SELECT Subject_ID, subjectn, SubjectDay, TimeStart, TimeEnd, ZoomMeetingURL FROM myscheduledb" ;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $SName[$counter] = $row['subjectn'];
                            $SDay[$counter] = $row['SubjectDay'];
                            $SSTime[$counter] = $row['TimeStart'];
                            $SETime[$counter] = $row['TimeEnd'];
                            $SLink[$counter] = $row['ZoomMeetingURL'];
                            $counter++;
                            $counterlast = $counter - 1;
                        }
                        $counter = 0;
                    }
                    for($a = 0; $a <= $counterlast; $a++)
                    {
                        if($SSTime[$a]<19)
                        {
                            if($SSTime[$a]>6)
                            {
                                $STimecurr = $SSTime[$a] - 6;
                                if($STimecurr > $STimehighest)
                                {
                                    $STimehighest = $STimecurr;
                                }
                                $STsort[$a] = $STimecurr;
                            }
                            else if($SSTime[$a]<7)
                            {
                                $STimecurr = $SSTime[$a] + 6;
                                if($STimecurr > $STimehighest)
                                {
                                    $STimehighest = $STimecurr;
                                }
                                $STsort[$a] = $STimecurr;
                            }
                            else
                            {
                                $STimecurr = $SSTime[$a] - 6;
                                if($STimecurr > $STimehighest)
                                {
                                    $STimehighest = $STimecurr;
                                }
                                $STsort[$a] = $SSTime[$a];
                            }
                        }
                        else{
                            $STimecurr = $SSTime[$a] - 6;
                            if($STimecurr > $STimehighest)
                            {
                                $STimehighest = $STimecurr;
                            }
                            $STsort[$a] = $STimecurr;
                        } 
                    }
                    for($a = 0; $a <= $counterlast; $a++)
                    {      
                        for ($b = $a + 1; $b < $counterlast; $b++)
                        {
                            if ($STsort[$a] > $STsort[$b]) 
                            {
                 
                                $temp =  $STsort[$a];
                                $STsort[$a] = $STsort[$b];
                                $STsort[$b] = $temp;

                                $tempn =  $SName[$a];
                                $SName[$a] = $SName[$b];
                                $SName[$b] = $tempn;

                                $tempd =  $SDay[$a];
                                $SDay[$a] = $SDay[$b];
                                $SDay[$b] = $tempd;

                                $tempts =  $SSTime[$a];
                                $SSTime[$a] = $SSTime[$b];
                                $SSTime[$b] = $tempts;
                                
                                $tempte =  $SETime[$a];
                                $SETime[$a] = $SETime[$b];
                                $SETime[$b] = $tempte;

                                $templ =  $SLink[$a];
                                $SLink[$a] = $SLink[$b];
                                $SLink[$b] = $templ;
                 
                            }
                 
                        }
                    }
                    for($a = 0; $a <= $counterlast; $a++)
                    {
                        switch ($SDay[$a]) {
                            case 'monday':
                            case 'Monday':
                                $SDayNum[$a] = 1;
                                break;
                            case 'tuesday':
                            case 'Tuesday':
                                $SDayNum[$a] = 2;
                                break;
                            case 'wednesday':
                            case 'Wednesday':
                                $SDayNum[$a] = 3;
                                break;
                            case 'thursday':
                            case 'Thursday':
                                $SDayNum[$a] = 4;
                                break;
                            case 'friday':
                            case 'Friday':
                                $SDayNum[$a] = 5;
                                break;
                            case 'saturday':
                            case 'Saturday':
                                $SDayNum[$a] = 6;
                                break;
                        }
                    }
                    for($a = 0; $a <= $counterlast; $a++)
                    {
                        switch($STsort[$a])
                        {
                            case 1:
                                if($SDayNum[$a] == 1)
                                {
                                    $Disp1[0] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[0] = " ";
                                }
                                if($SDayNum[$a] == 2)
                                {
                                    $Disp1[1] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[1] = " ";
                                }
                                if($SDayNum[$a] == 3)
                                {
                                    $Disp1[2] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[2] = " ";
                                }
                                if($SDayNum[$a] == 4)
                                {
                                    $Disp1[3] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[3] = " ";
                                }
                                if($SDayNum[$a] == 5)
                                {
                                    $Disp1[4] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[4] = " ";
                                }
                                if($SDayNum[$a] == 6)
                                {
                                    $Disp1[5] = $SName[$a];
                                }
                                else
                                {
                                    $Disp1[5] = " ";
                                }
                                break;
                            case 2:
                                if($SDayNum[$a] == 1)
                                {
                                    $Disp2[0] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[0] = " ";
                                }
                                if($SDayNum[$a] == 2)
                                {
                                    $Disp2[1] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[1] = " ";
                                }
                                if($SDayNum[$a] == 3)
                                {
                                    $Disp2[2] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[2] = " ";
                                }
                                if($SDayNum[$a] == 4)
                                {
                                    $Disp2[3] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[3] = " ";
                                }
                                if($SDayNum[$a] == 5)
                                {
                                    $Disp2[4] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[4] = " ";
                                }
                                if($SDayNum[$a] == 6)
                                {
                                    $Disp2[5] = $SName[$a];
                                }
                                else
                                {
                                    $Disp2[5] = " ";
                                }
                                break;
                                case 3:
                                    if($SDayNum[$a] == 1)
                                    {
                                        $Disp3[0] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[0] = " ";
                                    }
                                    if($SDayNum[$a] == 2)
                                    {
                                        $Disp3[1] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[1] = " ";
                                    }
                                    if($SDayNum[$a] == 3)
                                    {
                                        $Disp3[2] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[2] = " ";
                                    }
                                    if($SDayNum[$a] == 4)
                                    {
                                        $Disp3[3] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[3] = " ";
                                    }
                                    if($SDayNum[$a] == 5)
                                    {
                                        $Disp3[4] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[4] = " ";
                                    }
                                    if($SDayNum[$a] == 6)
                                    {
                                        $Disp3[5] = $SName[$a];
                                    }
                                    else
                                    {
                                        $Disp3[5] = " ";
                                    }
                                    break;
                                    case 4:
                                        if($SDayNum[$a] == 1)
                                        {
                                            $Disp4[0] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[0] = " ";
                                        }
                                        if($SDayNum[$a] == 2)
                                        {
                                            $Disp4[1] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[1] = " ";
                                        }
                                        if($SDayNum[$a] == 3)
                                        {
                                            $Disp4[2] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[2] = " ";
                                        }
                                        if($SDayNum[$a] == 4)
                                        {
                                            $Disp4[3] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[3] = " ";
                                        }
                                        if($SDayNum[$a] == 5)
                                        {
                                            $Disp4[4] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[4] = " ";
                                        }
                                        if($SDayNum[$a] == 6)
                                        {
                                            $Disp4[5] = $SName[$a];
                                        }
                                        else
                                        {
                                            $Disp4[5] = " ";
                                        }
                                        break;
                                        case 5:
                                            if($SDayNum[$a] == 1)
                                            {
                                                $Disp5[0] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[0] = " ";
                                            }
                                            if($SDayNum[$a] == 2)
                                            {
                                                $Disp5[1] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[1] = " ";
                                            }
                                            if($SDayNum[$a] == 3)
                                            {
                                                $Disp5[2] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[2] = " ";
                                            }
                                            if($SDayNum[$a] == 4)
                                            {
                                                $Disp5[3] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[3] = " ";
                                            }
                                            if($SDayNum[$a] == 5)
                                            {
                                                $Disp5[4] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[4] = " ";
                                            }
                                            if($SDayNum[$a] == 6)
                                            {
                                                $Disp5[5] = $SName[$a];
                                            }
                                            else
                                            {
                                                $Disp5[5] = " ";
                                            }
                                            break;
                                            case 6:
                                                if($SDayNum[$a] == 1)
                                                {
                                                    $Disp6[0] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[0] = " ";
                                                }
                                                if($SDayNum[$a] == 2)
                                                {
                                                    $Disp6[1] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[1] = " ";
                                                }
                                                if($SDayNum[$a] == 3)
                                                {
                                                    $Disp6[2] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[2] = " ";
                                                }
                                                if($SDayNum[$a] == 4)
                                                {
                                                    $Disp6[3] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[3] = " ";
                                                }
                                                if($SDayNum[$a] == 5)
                                                {
                                                    $Disp6[4] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[4] = " ";
                                                }
                                                if($SDayNum[$a] == 6)
                                                {
                                                    $Disp6[5] = $SName[$a];
                                                }
                                                else
                                                {
                                                    $Disp6[5] = " ";
                                                }
                                                break;
                                                case 7:
                                                    if($SDayNum[$a] == 1)
                                                    {
                                                        $Disp7[0] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[0] = " ";
                                                    }
                                                    if($SDayNum[$a] == 2)
                                                    {
                                                        $Disp7[1] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[1] = " ";
                                                    }
                                                    if($SDayNum[$a] == 3)
                                                    {
                                                        $Disp7[2] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[2] = " ";
                                                    }
                                                    if($SDayNum[$a] == 4)
                                                    {
                                                        $Disp7[3] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[3] = " ";
                                                    }
                                                    if($SDayNum[$a] == 5)
                                                    {
                                                        $Disp7[4] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[4] = " ";
                                                    }
                                                    if($SDayNum[$a] == 6)
                                                    {
                                                        $Disp7[5] = $SName[$a];
                                                    }
                                                    else
                                                    {
                                                        $Disp7[5] = " ";
                                                    }
                                                    break;
                                                    case 8:
                                                        if($SDayNum[$a] == 1)
                                                        {
                                                            $Disp8[0] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[0] = " ";
                                                        }
                                                        if($SDayNum[$a] == 2)
                                                        {
                                                            $Disp8[1] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[1] = " ";
                                                        }
                                                        if($SDayNum[$a] == 3)
                                                        {
                                                            $Disp8[2] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[2] = " ";
                                                        }
                                                        if($SDayNum[$a] == 4)
                                                        {
                                                            $Disp8[3] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[3] = " ";
                                                        }
                                                        if($SDayNum[$a] == 5)
                                                        {
                                                            $Disp8[4] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[4] = " ";
                                                        }
                                                        if($SDayNum[$a] == 6)
                                                        {
                                                            $Disp8[5] = $SName[$a];
                                                        }
                                                        else
                                                        {
                                                            $Disp8[5] = " ";
                                                        }
                                                        break;
                                                        case 9:
                                                            if($SDayNum[$a] == 1)
                                                            {
                                                                $Disp9[0] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[0] = " ";
                                                            }
                                                            if($SDayNum[$a] == 2)
                                                            {
                                                                $Disp9[1] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[1] = " ";
                                                            }
                                                            if($SDayNum[$a] == 3)
                                                            {
                                                                $Disp9[2] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[2] = " ";
                                                            }
                                                            if($SDayNum[$a] == 4)
                                                            {
                                                                $Disp9[3] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[3] = " ";
                                                            }
                                                            if($SDayNum[$a] == 5)
                                                            {
                                                                $Disp9[4] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[4] = " ";
                                                            }
                                                            if($SDayNum[$a] == 6)
                                                            {
                                                                $Disp9[5] = $SName[$a];
                                                            }
                                                            else
                                                            {
                                                                $Disp9[5] = " ";
                                                            }
                                                            break;
                                                            case 10:
                                                                if($SDayNum[$a] == 1)
                                                                {
                                                                    $Disp10[0] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[0] = " ";
                                                                }
                                                                if($SDayNum[$a] == 2)
                                                                {
                                                                    $Disp10[1] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[1] = " ";
                                                                }
                                                                if($SDayNum[$a] == 3)
                                                                {
                                                                    $Disp10[2] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[2] = " ";
                                                                }
                                                                if($SDayNum[$a] == 4)
                                                                {
                                                                    $Disp10[3] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[3] = " ";
                                                                }
                                                                if($SDayNum[$a] == 5)
                                                                {
                                                                    $Disp10[4] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[4] = " ";
                                                                }
                                                                if($SDayNum[$a] == 6)
                                                                {
                                                                    $Disp10[5] = $SName[$a];
                                                                }
                                                                else
                                                                {
                                                                    $Disp10[5] = " ";
                                                                }
                                                                break;
                                                                case 11:
                                                                    if($SDayNum[$a] == 1)
                                                                    {
                                                                        $Disp11[0] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[0] = " ";
                                                                    }
                                                                    if($SDayNum[$a] == 2)
                                                                    {
                                                                        $Disp11[1] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[1] = " ";
                                                                    }
                                                                    if($SDayNum[$a] == 3)
                                                                    {
                                                                        $Disp1[2] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[2] = " ";
                                                                    }
                                                                    if($SDayNum[$a] == 4)
                                                                    {
                                                                        $Disp11[3] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[3] = " ";
                                                                    }
                                                                    if($SDayNum[$a] == 5)
                                                                    {
                                                                        $Disp11[4] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[4] = " ";
                                                                    }
                                                                    if($SDayNum[$a] == 6)
                                                                    {
                                                                        $Disp11[5] = $SName[$a];
                                                                    }
                                                                    else
                                                                    {
                                                                        $Disp11[5] = " ";
                                                                    }
                                                                    break;
                                                                    case 12:
                                                                        if($SDayNum[$a] == 1)
                                                                        {
                                                                            $Disp12[0] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[0] = " ";
                                                                        }
                                                                        if($SDayNum[$a] == 2)
                                                                        {
                                                                            $Disp12[1] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[1] = " ";
                                                                        }
                                                                        if($SDayNum[$a] == 3)
                                                                        {
                                                                            $Disp12[2] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[2] = " ";
                                                                        }
                                                                        if($SDayNum[$a] == 4)
                                                                        {
                                                                            $Disp12[3] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[3] = " ";
                                                                        }
                                                                        if($SDayNum[$a] == 5)
                                                                        {
                                                                            $Disp12[4] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[4] = " ";
                                                                        }
                                                                        if($SDayNum[$a] == 6)
                                                                        {
                                                                            $Disp12[5] = $SName[$a];
                                                                        }
                                                                        else
                                                                        {
                                                                            $Disp12[5] = " ";
                                                                        }
                                                                        break;
                                                                        case 13:
                                                                            if($SDayNum[$a] == 1)
                                                                            {
                                                                                $Disp13[0] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[0] = " ";
                                                                            }
                                                                            if($SDayNum[$a] == 2)
                                                                            {
                                                                                $Disp13[1] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[1] = " ";
                                                                            }
                                                                            if($SDayNum[$a] == 3)
                                                                            {
                                                                                $Disp13[2] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[2] = " ";
                                                                            }
                                                                            if($SDayNum[$a] == 4)
                                                                            {
                                                                                $Disp13[3] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[3] = " ";
                                                                            }
                                                                            if($SDayNum[$a] == 5)
                                                                            {
                                                                                $Disp13[4] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[4] = " ";
                                                                            }
                                                                            if($SDayNum[$a] == 6)
                                                                            {
                                                                                $Disp13[5] = $SName[$a];
                                                                            }
                                                                            else
                                                                            {
                                                                                $Disp13[5] = " ";
                                                                            }
                                                                            break;
                                                                                                        case 14:
                                if($SDayNum[$a] == 1)
                                {
                                    $Disp14[0] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[0] = " ";
                                }
                                if($SDayNum[$a] == 2)
                                {
                                    $Disp14[1] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[1] = " ";
                                }
                                if($SDayNum[$a] == 3)
                                {
                                    $Disp14[2] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[2] = " ";
                                }
                                if($SDayNum[$a] == 4)
                                {
                                    $Disp14[3] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[3] = " ";
                                }
                                if($SDayNum[$a] == 5)
                                {
                                    $Disp14[4] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[4] = " ";
                                }
                                if($SDayNum[$a] == 6)
                                {
                                    $Disp14[5] = $SName[$a];
                                }
                                else
                                {
                                    $Disp14[5] = " ";
                                }
                                break;
                        }
                    }
                    for($f = 1; $f <= $STimehighest; $f++)
                    {
                        if($f < 7)
                        {
                            $f = $f + 6;
                            $TIMEST = $f . ":00 AM";
                            $f = $f - 6;
                        }
                        else
                        {
                            $f = $f - 6;
                            $TIMEST = $f . ":00 PM";
                            $f = $f + 6;
                        }
                        switch($f)
                        {
                            case 1:
                                $MONDAY = $Disp1[0];
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp1[0] . "</td><td>" . $Disp1[1] . "</td><td>" . $Disp1[2] . "</td><td>" . $Disp1[3] . "</td><td>" . $Disp1[4] . "</td><td>". $Disp1[5] . "</td></tr>";
                                break;
                            case 2:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp2[0] . "</td><td>" . $Disp2[1] . "</td><td>" . $Disp2[2] . "</td><td>" . $Disp2[3] . "</td><td>" . $Disp2[4] . "</td><td>". $Disp2[5] . "</td></tr>";
                                break;
                            case 3:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp3[0] . "</td><td>" . $Disp3[1] . "</td><td>" . $Disp3[2] . "</td><td>" . $Disp3[3] . "</td><td>" . $Disp3[4] . "</td><td>". $Disp3[5] . "</td></tr>";
                                break;
                            case 4:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp4[0] . "</td><td>" . $Disp4[1] . "</td><td>" . $Disp4[2] . "</td><td>" . $Disp4[3] . "</td><td>" . $Disp4[4] . "</td><td>". $Disp4[5] . "</td></tr>";
                                break;
                            case 5:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp5[0] . "</td><td>" . $Disp5[1] . "</td><td>" . $Disp5[2] . "</td><td>" . $Disp5[3] . "</td><td>" . $Disp5[4] . "</td><td>". $Disp5[5] . "</td></tr>";
                                break;
                            case 6:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp6[0] . "</td><td>" . $Disp6[1] . "</td><td>" . $Disp6[2] . "</td><td>" . $Disp6[3] . "</td><td>" . $Disp6[4] . "</td><td>". $Disp6[5] . "</td></tr>";
                                break;
                            case 7:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp7[0] . "</td><td>" . $Disp7[1] . "</td><td>" . $Disp7[2] . "</td><td>" . $Disp7[3] . "</td><td>" . $Disp7[4] . "</td><td>". $Disp7[5] . "</td></tr>";
                                break;
                            case 8:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp8[0] . "</td><td>" . $Disp8[1] . "</td><td>" . $Disp8[2] . "</td><td>" . $Disp8[3] . "</td><td>" . $Disp8[4] . "</td><td>". $Disp8[5] . "</td></tr>";
                                break;
                            case 9:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp9[0] . "</td><td>" . $Disp9[1] . "</td><td>" . $Disp9[2] . "</td><td>" . $Disp9[3] . "</td><td>" . $Disp9[4] . "</td><td>". $Disp9[5] . "</td></tr>";
                                break;
                            case 10:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp10[0] . "</td><td>" . $Disp10[1] . "</td><td>" . $Disp10[2] . "</td><td>" . $Disp10[3] . "</td><td>" . $Disp10[4] . "</td><td>". $Disp10[5] . "</td></tr>";
                                break;
                            case 11:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp11[0] . "</td><td>" . $Disp11[1] . "</td><td>" . $Disp11[2] . "</td><td>" . $Disp11[3] . "</td><td>" . $Disp11[4] . "</td><td>". $Disp11[5] . "</td></tr>";
                                break;
                            case 12:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp12[0] . "</td><td>" . $Disp12[1] . "</td><td>" . $Disp12[2] . "</td><td>" . $Disp12[3] . "</td><td>" . $Disp12[4] . "</td><td>". $Disp12[5] . "</td></tr>";
                                break;
                            case 13:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp13[0] . "</td><td>" . $Disp13[1] . "</td><td>" . $Disp13[2] . "</td><td>" . $Disp13[3] . "</td><td>" . $Disp13[4] . "</td><td>". $Disp13[5] . "</td></tr>";
                                break;
                            case 14:
                                $Disptxt = "<tr><td>" . $TIMEST . "</td><td>" . $Disp14[0] . "</td><td>" . $Disp14[1] . "</td><td>" . $Disp14[2] . "</td><td>" . $Disp14[3] . "</td><td>" . $Disp14[4] . "</td><td>". $Disp14[5] . "</td></tr>";
                                break;
                        }
                        echo $Disptxt;
                    }
                    $conn->close();
            ?> 
        </table>
        <center>
            <button id="addbtn" type="submit" onclick="openAddSubForm()">Add a Subject</button>
            <button id="delbtn" type="submit" onclick="openDelSubForm()">Delete a Subject</button>
            <a href="ClearData.php"><button id= "clrbtn" type="submit">Clear Subjects</button></a><br>
        </center>
    </div>
    <div id="RectangleB">
        <form method="POST" action="addsubject.php" id="formaddsub" class="formpopup">
            <center><h2 fontstyle="bold" id="subheader">Add Subject</h2><br></center>
            <label>Subject Name: </label><br>
            <center><input type="SubName" placeholder="Enter Subject Name" name="SubName" required><br></center>
            <label>Subject Day (Monday, Tuesday, etc): </label><br>
            <center><input type="Day" placeholder="Enter Day of Subject" name="SubDay" required></center>
            <label>Subject Start Time: </label><br>
            <center><input type="Day" placeholder="Enter Start Time of Subject" name="SubST" required></center>
            <label>Subject End Time: </label><br>
            <center><input type="Day" placeholder="Enter End Time of Subject" name="SubET" required></center>
            <label>Subject Zoom Meeting Link: </label><br>
            <center><input type="Day" placeholder="Enter Meeting Link of Subject" name="SubLink" required></center>
            <br>
            <center>
                <button type="submit" onclick="closeAddSubForm()">submit</button>
                <button onclick="refreshPage()">cancel</button>
            </center>
        </form>
        <form method="POST" action="deletesubject.php" id="formdelsub" class="formpopup">
            <center><h2 fontstyle="bold" id="subheader">Delete Subject</h2><br></center>
            <label>Subject ID: </label><br>
            <center><input type="Day" placeholder="Enter Subject ID" name="SubNameDel" required><br></center>
            <br>
            <center>
                <button type="submit" onclick="closeDelSubForm()">submit</button>
                <button onclick="refreshPage()">cancel</button>
            </center>
        </form>
               <?php
                    error_reporting(0);
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
                    $sql = "SELECT Subject_ID, subjectn, SubjectDay, TimeStart, TimeEnd, ZoomMeetingURL FROM myscheduledb" ;
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) 
                    {
                        echo "<center><h2> MEETING LINKS </h2></center>";
                        while($row = $result->fetch_assoc())
                        {
                            echo "<br><label>" . $row["subjectn"]. ":</label><br><label><a href=" . $row["ZoomMeetingURL"] . ">". $row["ZoomMeetingURL"]."</a></label><br>";
                        }
                    }
                    $conn->close();
               ?>

    </div>
    <h1 id="fontstyle" fontstyle="bold">CLASS SET UP</h1>
</body>
