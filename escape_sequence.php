<!-- Using escape sequences to insert "qoutes" in codes-->
<!DOCTYPE htm>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Sequence JavaScript</title>
</head>

<body>
    <p id="mesD"></p>
    <p id="mesP"></p>
    <p id="mesB"></p>


    <script>
        let strName = "People called him \"Eyestrain\"";
        let strAka = "Its me \'Prodigalp\'";
        let strBackSlash = "Let me use a backslash \\";

        document.getElementById('mesD').innerHTML = '<b>Double quotes: </b>' + strName;
        document.getElementById('mesP').innerHTML = '<b>Single quotes: </b>' + strAka;
        document.getElementById('mesB').innerHTML = '<b>Backslash char:  </b>' + strBackSlash;
    </script>
</body>

</html>