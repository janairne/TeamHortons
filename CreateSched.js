function CreateSchedule() {
    var sched = prompt("Please enter subject: ");
    if (sched == null || sched == "") {
        txt = "User cancelled the prompt.";
    } else {
        var day = prompt("Please the day of subject: ");
        if (day == null || day == "") {
            txt = "User cancelled the prompt.";
        } else {
            var timestart = prompt("Please time of subject: ");
            if (timestart == null || timestart == "") {
                txt = "User cancelled the prompt.";
            } else {
                var timeend = prompt("Please time of subject: ");
                if (timeend == null || timeend == "") {
                    txt = "User cancelled the prompt.";
                } else {
                    txt = "Subject: " + sched + "\nday: " + day + "\ntime start: " + timestart + "\ntime end: " + timeend;
                    addRow(sched, day, timestart, timeend);
                }
            }
        }
    }
    document.getElementById("showsched").innerHTML = txt;
    myFunction(sched);
}

function addRow(s, d, ts, te) {
    var daynum = convertDaytoNumber(d);
    var rownum = convertTimeStartToRowNumber(ts);
    var table = document.getElementById("schedule");
    var tablecolumnlength = table.rows[0].cells.length;

    for (var c = table.rows.length, m = rownum; c < m; c++) {
        var newRow = table.insertRow(table.rows.length);
        var newcel = newRow.insertCell(0);
        if (c > 6) {
            var timestamp = c - 6;
            newcel.innerHTML = timestamp + ":00 PM";
        } else if (c == 6) {
            newcel.innerHTML = "12:00 PM";
        } else {
            var timestamp = c + 6;
            newcel.innerHTML = timestamp + ":00 AM";
        }
        for (var d = 1, n = tablecolumnlength; d < n; d++) {
            var newcel = newRow.insertCell(d);
            newcel.innerHTML = "";
        }
    }
    var newRow = table.insertRow(table.rows.length);
    var newcel = newRow.insertCell(0);
    if (rownum > 6) {
        var timestamp = rownum - 6;
        newcel.innerHTML = timestamp + ":00 PM";
    } else if (rownum == 6) {
        newcel.innerHTML = "12:00 PM";
    } else {
        var timestamp = rownum + 6;
        newcel.innerHTML = timestamp + ":00 AM";
    }
    for (var c = 1, m = tablecolumnlength; c < m; c++) {
        var newcel = newRow.insertCell(c);
        if (c == daynum) {
            newcel.innerHTML = s;
        } else {
            newcel.innerHTML = "";
        }
    }
}

function convertDaytoNumber(d) {
    switch (d) {
        case 'monday':
        case 'Monday':
            var a = 1;
            break;
        case 'tuesday':
        case 'Tuesday':
            var a = 2;
            break;
        case 'wednesday':
        case 'Wednesday':
            var a = 3;
            break;
        case 'thursday':
        case 'Thursday':
            var a = 4;
            break;
        case 'friday':
        case 'Friday':
            var a = 5;
            break;
        case 'saturday':
        case 'Saturday':
            var a = 6;
            break;
    }
    return a;
}

function convertTimeStartToRowNumber(ts) {
    switch (ts) {
        case '7':
            var cn = 1;
            break;
        case '8':
            var cn = 2;
            break;
        case '9':
            var cn = 3;
            break;
        case '10':
            var cn = 4;
            break;
        case '11':
            var cn = 5;
            break;
        case '12':
            var cn = 6;
            break;
        case '1':
        case '13':
            var cn = 7;
            break;
        case '2':
        case '14':
            var cn = 8;
            break;
        case '3':
        case '15':
            var cn = 9;
            break;
        case '4':
        case '16':
            var cn = 10;
            break;
        case '5':
        case '17':
            var cn = 11;
            break;
        case '6':
        case '18':
            var cn = 12;
            break;
        case '19':
            var cn = 13;
            break;
        case '20':
            var cn = 14;
            break;
    }
    return cn;
}

function myFunction() {
    var tbodyRef = document.getElementById('schedule').getElementsByTagName('tbody')[0];

    var l = tbodyRef.rows.length - 1;
    // Insert a row at the end of table
    var newRow = tbodyRef.insertRow();

    // Insert a cell at the end of the row
    for (var c = 0; c < 0; c++) {
        var newCell = newRow.insertCell();
    }
    // Append a text node to the cell
    var newText = document.createTextNode('');
    newCell.appendChild(newText);
}

function openAddSubForm() {
    document.getElementById("addbtn").style.display = "none";
    document.getElementById("delbtn").style.display = "none";
    document.getElementById("clrbtn").style.display = "none";
    document.getElementById("formaddsub").style.display = "block";

}

function closeAddSubForm() {
    document.getElementById("addbtn").style.display = "block";
    document.getElementById("delbtn").style.display = "block";
    document.getElementById("clrbtn").style.display = "block";
    document.getElementById("formaddsub").style.display = "none";
}

function openDelSubForm() {
    document.getElementById("addbtn").style.display = "none";
    document.getElementById("delbtn").style.display = "none";
    document.getElementById("clrbtn").style.display = "none";
    document.getElementById("formdelsub").style.display = "block";

}

function closeDelSubForm() {
    document.getElementById("addbtn").style.display = "block";
    document.getElementById("delbtn").style.display = "block";
    document.getElementById("clrbtn").style.display = "block";
    document.getElementById("formdelsub").style.display = "none";
}

function refreshPage() {
    window.location.reload();
}

function displaysched() {
    var con = mysql.createConnection({
        servername: "localhost",
        username: "root",
        password: "",
        dbname: "scheduledb"
    });

}

function getData() {

}

var test = "<?php echo $SubName; ?>";

function IncPassPrompt() {
    alert("username/password incorrect!");
}