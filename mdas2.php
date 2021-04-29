<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Procrastination MDAS</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div id="wrapper">
        <section class="mathbox">
            <div class="mathHeader">Arithmetic Operation</div>
            <div class="mathIO">
                <label>Operation</label>
                <label>Output</label>
            </div>
            <div class="mathTwoPart">
                <form action="#" method="POST">
                    <div class="operators">
                        <select name="mathOps" id="mathOps">
                            <option value="" disabled selected hidden>Choose operation</option>
                            <option value="mul">Multiplication</option>
                            <option value="div">Division</option>
                            <option value="add">Addition</option>
                            <option value="sub">Subtraction</option>
                        </select>
                    </div>
                    <div class="outCome">
                        <div class="valOne">
                            <label>Value one:&nbsp;&nbsp;</label>
                            <input type="text" name="numOne" id="numOne" autocomplete="off">
                        </div>
                        <div class="valTwo">
                            <label>Value two:&nbsp;&nbsp;</label>
                            <input type="text" name="numTwo" id="numTwo" autocomplete="off">
                        </div>
                        <div class="valAns">
                            <label>Answer:&nbsp;&nbsp;</label>
                            <input type="text" name="numAns" id="numAns" autocomplete="off">
                        </div>
                    </div>
                </form>
            </div>
            <div class="btnPart">
                <button type="button" onclick="calculate()">Calculate</button>
                <button type="button" onclick="wiperOut()">Reset</button>
            </div>
        </section>
    </div>
    <!-- <script src="main.js"></script> -->
    <script>
        function calculate() {
            // Variable assignment and declaration
            let optr = document.getElementById('mathOps').value;
            let x = document.getElementById('numOne').value;
            let y = document.getElementById('numTwo').value;
            let ans;

            // Operation, depending on the users choice
            if (optr == 'mul') {
                ans = parseInt(x) * parseInt(y);
                displayAns(ans);
            } else if (optr == 'div') {
                ans = parseInt(x) / parseInt(y);
                displayAns(ans);
            } else if (optr == 'add') {
                ans = parseInt(x) + parseInt(y);
                displayAns(ans);
            } else if (optr == 'sub') {
                ans = parseInt(x) = parseInt(y);
                displayAns(ans);
            }
        }
        // Display the answer
        function displayAns(num) {
            document.getElementById('numAns').value = num;
        }
        // Clear screen
        function wiperOut() {
            document.getElementById('numOne').value = '';
            document.getElementById('numTwo').value = '';
            document.getElementById('numAns').value = '';
        }
    </script>

</body>

</html>