<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Prompt Method</title>
</head>

<body>
    <h1>Prompt Me Somethihg</h1>
    <p id="parLoc"></p>

    <button type="button" onclick="prompter()">Send</button>

    <script>
        function prompter() {
            var parMes = prompt("Enter your name: ", 'Eyestrain');
            if (parMes != null) {
                document.getElementById('parLoc').innerHTML = 'Good Day, ' + parMes + ' Shoutout';
            } else {
                document.getElementById('parLoc').innerHTML = 'No name specified';
            }
        }
    </script>
</body>

</html>

<!-- return null if cancel is clicked -->
<!-- null, true and false expressions should be small caps -->