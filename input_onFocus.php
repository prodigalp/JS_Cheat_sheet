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
                            <td id="in1st"><input type="text" name="txt1st" id="txt1st" placeholder="Enter 1st number"></td>
                            <td id="out1st"></td>
                        </tr>
                        <tr>
                            <td id="in2nd"><input type="text" name="txt2nd" id="txt2nd" placeholder="Enter 2nd number"></td>
                            <td id="out2nd"></td>
                        </tr>
                        <tr>
                            <td id="in3rd"><input type="text" name="txt3rd" id="txt3rd" placeholder="Enter 3rd number"></td>
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
        function transfer() {
            alert('transfer test');
        }

        function cleared() {
            alert('clear test');
        }
    </script>
</body>

</html>