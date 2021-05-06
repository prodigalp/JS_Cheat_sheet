<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System Procrastinate</title>
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
            background: linear-gradient(100deg, #FFF, lightgreen) no-repeat center center fixed;
            background-size: cover;
            font: 100%/1.3 sans-serif;
            overflow: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #wrapper {
            min-width: 35%;
            background: greenyellow;
            padding: 10px;
            box-shadow: 0 0 1em rgba(0, 0, 0, .4);
            border-radius: 10px;
            border: 10px outset darkgreen;
        }

        section.gradingBOx {
            padding: 10px;
            border: 2px SOLID #000;
            border-radius: 5px;
        }

        h3 {
            margin: 0px;
            padding: 5px;
            background: darkgreen;
            color: #FFF;
            border-radius: 5px;
            text-align: center;
            text-transform: uppercase;
            text-shadow: 1px 2px #000;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        input[type="number"] {
            border: 0px;
            outline: 0px;
            padding: 10px 12px;
            margin-bottom: 2%;
            width: 100%;
            border: 2px SOLID #000;
            font-size: 1.1em;
            transition: all .7s ease-out;
        }

        input[type="number"]:hover:not(:disabled) {
            background: #000;
            color: #FFF;
        }

        button {
            border: none;
            outline: none;
            background: #306EFF;
            color: #FFF;
            padding: 10px 12px;
            width: 25%;
            font-size: 1.1em;
            border-radius: 5px;
            transition: background .5s ease-out;
        }

        button:hover {
            background: darkblue;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <section class="gradingBOx">
            <div class="gradingHeader">
                <h3>College Grading System</h3>
            </div>
            <div class="gradePre">
                <label>Prelim:&nbsp;&nbsp;</label>
                <input type="number" name="txtPre" id="txtPre">
            </div>
            <div class="gradeMid">
                <label>Midterm:&nbsp;&nbsp;</label>
                <input type="number" name="txtMid" id="txtMid">
            </div>
            <div class="gradePreFin">
                <label>Pre-Final</label>
                <input type="number" name="txtPreFin" id="txtPreFin">
            </div>
            <div class="gradeFin">
                <label>Final</label>
                <input type="number" name="txtFin" id="txtFin">
            </div>
            <div class="gradeAverage">
                <label>Average:</label>
                <input type="number" name="txtAve" id="txtAve" disabled>
            </div>
            <div class="btnSelect">
                <button type="button" onclick="checkFirst()">Calculate</button>
                <button type="button" onclick="aveReset()">Reset</button>
            </div>
        </section>
    </div>
    <script>
        function checkFirst() {
            let pre = parseInt(document.getElementById('txtPre').value);
            let mid = parseInt(document.getElementById('txtMid').value);
            let pfn = parseInt(document.getElementById('txtPreFin').value);
            let fin = parseInt(document.getElementById('txtFin').value);
            // console.log(pre, mid, pfn, fin);
            if (pre == '' || mid == '' || pfn == '' || fin == '') {
                alert('Please fill in all the fields!');
                aveReset();
            } else if (isNaN(pre) || isNaN(mid) || isNaN(pfn) || isNaN(fin)) {
                alert('Please enter a valid number');
                aveReset();
            } else(aveRage(pre, mid, pfn, fin))
        }

        function aveRage(pre, mid, pfn, fin) {
            let ave = (pre * 0.20) + (mid * 0.25) + (pfn * 0.25) + (fin * 0.30);
            ave = ave.toFixed(3);
            document.getElementById('txtAve').value = ave;
        }

        function aveReset() {
            document.getElementById('txtPre').value = '';
            document.getElementById('txtMid').value = '';
            document.getElementById('txtPreFin').value = '';
            document.getElementById('txtFin').value = '';
            document.getElementById('txtAve').value = '';

        }
    </script>

</body>

</html>