<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MDAS Colored Procrastination</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            background: linear-gradient(120deg, #FFF, #306EFF) no-repeat center center fixed;
            background-size: cover;
            font: 100%/1.3 sans-serif;
            overflow: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #wrapper {
            width: 35%;
            background: #FFF;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 0 1em rgba(0, 0, 0, .7);
            overflow: hidden;
            border: 5px SOLID #306EFF;
        }

        section.boxSum {
            background: #FAF8CC;
            padding: 10px;
            border-radius: 10px;
        }

        h3 {
            margin: 0px;
            padding: 0px;
            background: #306EFF;
            text-align: center;
            padding: 5px;
            color: #FFF;
            border-radius: 5px;
            margin-bottom: 3%;
        }

        input[type="text"] {
            border: none;
            outline: none;
            padding: 10px 12px;
            border: 2px SOLID #306EFF;
            border-radius: 5px;
            margin-bottom: 5px;
            width: 100%;
            background: #FAF8CC;
            transition: all 1s ease-out;
        }

        input[type="text"]:hover {
            background: #FFFF00;
            color: #000;
        }

        button {
            background: #306EFF;
            border: none;
            outline: none;
            padding: 10px;
            border-radius: 5px;
            color: #FFF;
            transition: all .5s ease-out;
            width: 25%;
        }

        button:hover {
            background: #000;
            color: #FFF;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <section class="boxSum">
            <div class="boxHeader">
                <h3>Addition Program 2.0</h3>
            </div>
            <div class="boxContent">
                <form action="#" method="POST">
                    <div class="numOne">
                        <label>First Number:&nbsp;&nbsp;</label>
                        <input type="text" name="txtOne" id="txtOne" placeholder="Enter number">
                    </div>
                    <div class="numTwo">
                        <label>Second Number&nbsp;&nbsp;</label>
                        <input type="text" name="txtTwo" id="txtTwo" placeholder="Enter number">
                    </div>
                    <div class="numAns">
                        <label>Answer:&nbsp;&nbsp;</label>
                        <input type="text" name="txtAns" id="txtAns" placeholder="Answer">
                    </div>
                    <div class="areaBtn">
                        <button type="button" onclick="calSum()">Calculate</button>
                        <button type="button" onclick="calReset()">Reset</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script>
        function calSum() {
            let x = parseInt(document.getElementById('txtOne').value);
            let y = parseInt(document.getElementById('txtTwo').value);
            if (isNaN(x) || isNaN(y)) {
                alert('Please enter a valid number');
                calReset();
            } else {
                let z = x + y;
                document.getElementById('txtAns').value = z;
            }
        }

        function calReset() {
            document.getElementById('txtOne').value = '';
            document.getElementById('txtTwo').value = '';
            document.getElementById('txtAns').value = '';
        }
    </script>
</body>

</html>