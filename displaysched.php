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
            $sql = "SELECT Subject_ID, subjectn, SubjectDay, TimeStart, TimeEnd, ZoomMeetingURL FROM myscheduledb" ;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc())
                {
                    echo " " . $row["subjectn"]. " " . $row["SubjectDay"]. " " . $row["TimeStart"]. "</td><td>" . $row["TimeEnd"]. "</td><td>"  . $row["ZoomMeetingURL"]. "</td></tr>";
                }
                echo "</table>";
            }
            else 
            {
                
            }
            $conn->close();
?>