<!-- Input, Output data, and reset value -->
<!-- using getElementById(''); -->
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Procrastination</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <section class="tabulated">
            <form action="#" method="POST">
                <table>
                    <th>
                        <h1>Data Insertion</h1>
                    </th>
                    <tr>
                        <td>Input Area</td>
                        <td>Outpu Area</td>
                    </tr>
                    <tr>
                        <td id="inOne">1.&nbsp;&nbsp;<input type="text" name="txtOne" id="txtOne" placeholder="Enter first value"></td>
                        <td id="outOne"></td>
                    </tr>
                    <tr>
                        <td id="inTwo">2.&nbsp;&nbsp;<input type="text" name="txtTwo" id="txtTwo" placeholder="Enter second value"></td>
                        <td id="outTwo"></td>
                    </tr>
                    <tr>
                        <td id="inTri">3.&nbsp;&nbsp;<input type="text" name="txtTri" id="txtTri" placeholder="Enter third value"></td>
                        <td id="outTri"></td>
                    </tr>
                    <tr>
                        <td id="inFour">4.&nbsp;&nbsp;<input type="text" name="txtFour" id="txtFour" placeholder="Enter fourth value"></td>
                        <td id="outFour"></td>
                    </tr>
                    <tr>
                        <td id="inFive">5.&nbsp;&nbsp;<input type="text" name="txtFive" id="txtFive" placeholder="Enter fifth value"></td>
                        <td id="outFive"></td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" onclick="displayNum()">Send</button>
                            <button type="button" onclick="displayNone()">Reset</button>
                        </td>
                    </tr>

                </table>
            </form>
        </section>
    </div>

    <script src="main.js"></script>
    <script>
        function displayNum() {
            // Data insertion
            document.getElementById('outOne').innerHTML = document.getElementById('txtOne').value;
            document.getElementById('outTwo').innerHTML = document.getElementById('txtTwo').value;
            document.getElementById('outTri').innerHTML = document.getElementById('txtTri').value;
            document.getElementById('outFour').innerHTML = document.getElementById('txtFour').value;
            document.getElementById('outFive').innerHTML = document.getElementById('txtFive').value;
        }

        function displayNone() {
            // output section cleared
            document.getElementById('outOne').innerHTML = '';
            document.getElementById('outTwo').innerHTML = '';
            document.getElementById('outTri').innerHTML = '';
            document.getElementById('outFour').innerHTML = '';
            document.getElementById('outFive').innerHTML = '';
            // input section cleared
            document.getElementById('txtOne').value = '';
            document.getElementById('txtTwo').value = '';
            document.getElementById('txtTri').value = '';
            document.getElementById('txtFour').value = '';
            document.getElementById('txtFive').value = '';
        }
    </script>
</body>

</html>