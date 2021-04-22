<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Procrastinate</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Area you a COVID-19 Positive?</h1>
    <hr>
    <button type="button" onclick="choices()">Submit</button>

    <!-- Result will be displayed here -->
    <p id="parMes"></p>

    <script>
        function choices() {
            // You can also include new line here by inserting '\n'
            var ans = confirm("Press OK or Cancel");
            var txtMes;
            // Testing for boolean result 
            if (ans == true) {
                txtMes = 'You press OK';
            } else {
                txtMes = 'You press cancel';
            }
            document.getElementById('parMes').innerHTML = txtMes;
        }
    </script>
</body>

</html>