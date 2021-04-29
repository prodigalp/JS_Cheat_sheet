<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Procrastinate All day</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div id="wrapper">
        <section class="mdasOperation">
            <form action="#" method="POST" name="math">
                <table>
                    <tr>
                        <th>Arithmetic Operation</th>
                    </tr>
                    <tr>
                        <td>Operation</td>
                        <td>Data Entry</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="radio" name="r1" id="mdas1">Multiplication<br>
                            <input type="radio" name="r1" id="mdas2">Division<br>
                            <input type="radio" name="r1" id="mdas3">Addition<br>
                            <input type="radio" name="r1" id="mdas4">Subtraction<br>
                        </td>
                        <td>
                            <Label>Enter first number:&nbsp;&nbsp;</Label>
                            <input type="text" name="numOne" id="numOne"><br>

                            <label>Enter second number:&nbsp;&nbsp;</label>
                            <input type="text" name="numTwo" id="numTwo"><br>

                            <label>Result:&nbsp;&nbsp;</label>
                            <input type="text" name="numAns" id="numAns">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button type="button" onclick="checkNum()">Computer</button>
                            <button type="button" onclick="resets()">Reset</button>
                        </td>
                    </tr>
                </table>
            </form>
        </section>
    </div>
    <!-- <script src="main.js"></script> -->
    <script>
        function resets() {
            document.getElementById('numOne').value = '';
            document.getElementById('numTwo').value = '';
            document.getElementById('numAns').value = '';
            document.getElementById('mdas1').checked = false;
            document.getElementById('mdas2').checked = false;
            document.getElementById('mdas3').checked = false;
            document.getElementById('mdas4').checked = false;
        }

        function checkNum() {
            let x = document.getElementById('numOne').value;
            let y = document.getElementById('numTwo').value;
            // Check if value is a Number
            if (isNaN(x) || isNaN(y)) {
                alert('Please enter a valid number');
                window.location = 'mdas_one.php';
            } else {
                // Calculate the number
                computeNum();
            }
        }

        // Continue with the operation
        function computeNum() {
            if (document.getElementById('mdas1').checked == true) {
                let ans = parseInt(document.getElementById('numOne').value) * parseInt(document.getElementById('numTwo').value);
                document.getElementById('numAns').value = ans;
            }
            if (document.getElementById('mdas2').checked == true) {
                let ans = parseInt(document.getElementById('numOne').value) / parseInt(document.getElementById('numTwo').value);
                document.getElementById('numAns').value = ans;
            }
            if (document.getElementById('mdas3').checked == true) {
                let ans = parseInt(document.getElementById('numOne').value) + parseInt(document.getElementById('numTwo').value);
                document.getElementById('numAns').value = ans;
            }
            if (document.getElementById('mdas4').checked == true) {
                let ans = parseInt(document.getElementById('numOne').value) - parseInt(document.getElementById('numTwo').value);
                document.getElementById('numAns').value = ans;
            }
        }
    </script>
</body>

</html>