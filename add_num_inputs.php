<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User Inputs</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
    <div id="wrapper">
        <section class="userInput">
            <h3>Number Sum</h3>
            <form action="#">
                <div class="">
                    <label for="num1">First:</label>
                    <input type="number" name="num1" id="num1" placeholder="Enter 1st Number">
                </div>
                <div class="">
                    <label for="num2">Second</label>
                    <input type="number" name="num2" id="num2" placeholder="Enter 2nd Number">
                </div>
                <div class="ans">
                    <label for="sum">Answer:</label>
                    <input type="number" name="sumup" id="sumup" placeholder="Answer">
                </div>
                <div class="btns">
                    <button type="button" onclick="document.getElementById('sumup').innerHTML = 5 + 5">Compute</button>
                </div>
            </form>

        </section>
    </div>
    <!-- <script src="main.js"></script> -->
</body>

</html>