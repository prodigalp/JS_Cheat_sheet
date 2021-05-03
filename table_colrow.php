<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Col-Row Procrastinate</title>
    <style>
        body {
            margin: 0px;
            padding: 0px;
            font: 100%/1.3 sans-serif;
            background: #306EFF;
            overflow: auto;
        }

        #wrapper {
            max-width: 50%;
            background: #FAF8CC;
            margin: 3% auto;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 8px 8px 10px rgba(0, 0, 0, .7);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px SOLID #000;
        }

        th {
            padding: 7px;
            text-transform: uppercase;
            background: #306EFF;
            color: #FFF;
            letter-spacing: 1px;
        }

        td {
            text-align: center;
        }

        tr:nth-child(odd) {
            background: lightgray;
        }

        input[type="text"] {
            border: none;
            border: 1px SOLID #000;
            border-radius: 5px;
            padding: 5px 10px;
            margin-bottom: 5px;
            width: 50%;
            background: #000;
            color: #FFF;
            font-size: 1.1em;
        }

        button {
            border: none;
            outline: none;
            background: #306EFF;
            color: #FFF;
            padding: 15px 20px;
            border-radius: 5px;
            width: 15%;
            transition: all .5s ease-out;
        }

        .textBox {
            margin-bottom: 1%;
            margin-top: 2%;
        }

        button:hover {
            background: darkblue;
            cursor: pointer;

        }
    </style>

</head>

<body>
    <div id="wrapper">
        <form action="#" method="POST">
            <section class="tableBox" style="overflow-x: auto">
                <table>
                    <caption>NOTE: Please click on the table to choose!</caption>
                    <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Age</th>
                        <th>Birthday</th>
                        <th>Position</th>
                    </tr>
                    <tr id="r1" onmouseover="colorYel(1)" onmouseout="colorWhi(1)" onclick="textTrans(1)">
                        <td id="c1A">Eyestrain</td>
                        <td id="c1B">New York</td>
                        <td id="c1C">39</td>
                        <td id="c1D">July 12, 1998</td>
                        <td id="c1E">Consultant</td>
                    </tr>
                    <tr id="r2" onmouseover="colorYel(2)" onmouseout="colorWhi(2)" onclick="textTrans(2)">
                        <td id="c2A">Prodigalp</td>
                        <td id="c2B">Boston</td>
                        <td id="c2C">32</td>
                        <td id="c2D">Aug 20, 1955</td>
                        <td id="c2E">Contractor</td>
                    </tr>
                    <tr id="r3" onmouseover="colorYel(3)" onmouseout="colorWhi(3)" onclick="textTrans(3)">
                        <td id="c3A">Ethan Hawk</td>
                        <td id="c3B">Cambridge</td>
                        <td id="c3C">42</td>
                        <td id="c3D">Feb. 15, 1945</td>
                        <td id="c3E">Line Man</td>
                    </tr>
                    <tr id="r4" onmouseover="colorYel(4)" onmouseout="colorWhi(4)" onclick="textTrans(4)">
                        <td id="c4A">Wesley Snipe</td>
                        <td id="c4B">Quezon City</td>
                        <td id="c4C">21</td>
                        <td id="c4D">Jan 5, 1984</td>
                        <td id="c4E">Hair Stylist</td>
                    </tr>
                    <tr id="r5" onmouseover="colorYel(5)" onmouseout="colorWhi(5)" onclick="textTrans(5)">
                        <td id="c5A">Korver Matt</td>
                        <td id="c5B">Alabama</td>
                        <td id="c5C">41</td>
                        <td id="c5D">Sep. 17, 1978</td>
                        <td id="c5E">Printer</td>
                    </tr>
                </table>
            </section>
            <section class="textBox">
                <div class="boxField">
                    <label>Name:&nbsp;&nbsp;</label>
                    <input type="text" name="txtA" id="txtA" readonly>
                </div>
                <div class="boxField">
                    <label>Address:&nbsp;&nbsp;</label>
                    <input type="text" name="txtB" id="txtB" readonly>
                </div>
                <div class="boxField">
                    <label>Age:&nbsp;&nbsp;</label>
                    <input type="text" name="txtC" id="txtC" readonly>
                </div>
                <div class="boxField">
                    <label>Birthday:&nbsp;&nbsp;</label>
                    <input type="text" name="txtD" id="txtD" readonly>
                </div>
                <div class="boxField">
                    <label>Occupation:&nbsp;&nbsp;</label>
                    <input type="text" name="txtE" id="txtE" readonly>
                </div>
            </section>
            <button type="button" onclick="personMes()">Submit</button>
        </form>
    </div>
    <script>
        // Color Yellow on mouseover
        function colorYel(num) {
            document.getElementById('r' + num).style.backgroundColor = "#FF0";
        }
        // Color White on mouseout
        function colorWhi(num) {
            document.getElementById('r' + num).style.backgroundColor = "#FFF";
        }

        function textTrans(userNum) {
            let userChar = new Array();

            // Declaring value of array
            userChar[0] = 'A';
            userChar[1] = 'B';
            userChar[2] = 'C';
            userChar[3] = 'D';
            userChar[4] = 'E';

            // Cycling through the data
            for (x = 0; x < userChar.length; x++) {
                // Copy value from table to textbox
                document.getElementById('txt' + userChar[x]).value = document.getElementById('c' + userNum + userChar[x]).innerHTML;
            }
        }

        function personMes() {
            let name = document.getElementById('txtA').value;
            let adr = document.getElementById('txtB').value;
            let age = document.getElementById('txtC').value;
            let bday = document.getElementById('txtD').value;
            let pos = document.getElementById('txtE').value;

            alert(
                'Name : ' + name + '\n' +
                'Address : ' + adr + '\n' +
                'Age : ' + age + '\n' +
                'Birthday : ' + bday + '\n' +
                'Position : ' + pos
            );

        }
    </script>
</body>

</html>