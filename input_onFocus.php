<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Procrsatination</title>
</head>

<body>
    <div id="wrapper">
        <div class="boxModel">
            <div class="boxHeader">
                <h1>Input Output System</h1>
            </div>
            <div class="boxTable">
                <form method="POST">
                    <table>
                        <tr>
                            <td>Input</td>
                            <td>Output</td>
                        </tr>
                        <tr>
                            <td id="in1st"><input onmouseover="colorYel(1)" onmouseout="colorWhi(1)" type="text" name="txt1" id="txt1" placeholder="Enter 1st number"></td>
                            <td id="out1st"></td>
                        </tr>
                        <tr>
                            <td id="in2nd"><input onmouseover="colorYel(2)" onmouseout="colorWhi(2)" type="text" name="txt2" id="txt2" placeholder="Enter 2nd number"></td>
                            <td id="out2nd"></td>
                        </tr>
                        <tr>
                            <td id="in3rd"><input onmouseover="colorYel(3)" onmouseout="colorWhi(3)" type="text" name="txt3" id="txt3" placeholder="Enter 3rd number"></td>
                            <td id="out3rd"></td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" onclick="transfer()">Send</button>
                                <button type="button" onclick="cleared()">Clear</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Copy data to output table
        function transfer() {
            document.getElementById('out1st').innerHTML = document.getElementById('txt1').value;
            document.getElementById('out2nd').innerHTML = document.getElementById('txt2').value;
            document.getElementById('out3rd').innerHTML = document.getElementById('txt3').value;
        }

        // clear screen
        function cleared() {
            document.getElementById('out1st').innerHTML = '';
            document.getElementById('out2nd').innerHTML = '';
            document.getElementById('out3rd').innerHTML = '';

            document.getElementById('txt1').value = '';
            document.getElementById('txt2').value = '';
            document.getElementById('txt3').value = '';
        }

        // Yellow
        function colorYel(num) {
            document.getElementById('txt' + num).style.backgroundColor = '#FF0';
        }
        // White
        function colorWhi(num) {
            document.getElementById('txt' + num).style.backgroundColor = '#FFF';
        }
    </script>
</body>

</html>