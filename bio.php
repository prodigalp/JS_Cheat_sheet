<!-- Display personal information -->
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <title>Javascript Procrastination</title>
    <link rel="stylesheet" href="style.css" </head>

<body>
    <h1 id="h1Per">Personal Information</h1>
    <p id="parMes"></p>
    <button type="button" onclick="starLight()">Submit</button>

    <script src="main.js"></script>
    <script>
        function starLight() {
            let name = 'Eyestrain';
            let age = '37';
            let address = "#227 Area 5 Luzon Avenue Diliman Quezon City";
            let string = `My name is: ${name}<br> My age is: ${age} <br>My address is: ${address} `;

            document.getElementById('parMes').innerHTML = string;
            document.getElementById('h1Per').innerHTML = 'Eyestrain Prodigalp';
        }
    </script>
</body>

</html>