<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Choices Picker / Procrastinate</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        table {
            width: 50%;
            text-align: center;
        }

        table,
        th,
        td {
            border: 1px SOLID #000;
            border-collapse: collapse;
        }

        tr:nth-child(even) {
            background: #FAF8CC;
        }

        td {
            padding: 10px;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <div class="boxChoice">
            <form action="#" method="POST">
                <table>
                    <tr>
                        <th colspan="5">
                            <h3>Computer courses</h3>
                        </th>
                    </tr>
                    <tr>
                        <td id="course1" onmouseover="colorYel(1)" onmouseout="colorWhi(1)" onclick="courierPas(1)">Computer Scientist</td>
                        <td id="course2" onmouseover="colorYel(2)" onmouseout="colorWhi(2)" onclick="courierPas(2)">Computer Engineering</td>
                        <td id="course3" onmouseover="colorYel(3)" onmouseout="colorWhi(3)" onclick="courierPas(3)">Computer Secretary</td>
                        <td id="course4" onmouseover="colorYel(4)" onmouseout="colorWhi(4)" onclick="courierPas(4)">Computer Management</td>
                        <td id="course5" onmouseover="colorYel(5)" onmouseout="colorWhi(5)" onclick="courierPas(5)">Computer Developer</td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <button type="button" onclick="clearScr()">Clear</button>
                        </td>
                        <td colspan="2">
                            <input type="text" name="txtMes" id="txtMes">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <script>
        function colorYel(num) {
            document.getElementById('course' + num).style.backgroundColor = "#FF0";
        }

        function colorWhi(num) {
            document.getElementById('course' + num).style.backgroundColor = "#FFF";
        }

        function courierPas(num) {
            // onclicked, transfer data from table to textbox
            document.getElementById('txtMes').value = document.getElementById("course" + num).innerHTML;
        }
        // Clear textbox
        function clearScr() {
            document.getElementById('txtMes').value = '';
        }
    </script>
    <!-- <script src="impress.js"></script> -->
</body>

</html>