<!-- Show the sum and clear the field if necessary -->
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widthd=device-width, initial-scale=1.0">
    <title>Add Ups</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Number Add Up</h1>
    <h2>5 + 19 = <span id="ans"></span></h2>

    <button type="button" onclick="document.getElementById('ans').innerHTML = 5 + 19">Compute</button>
    <button type="button" onclick="document.getElementById('ans').innerHTML =''">Clear</button>

    <script src="main.js"></script>
</body>

</html>