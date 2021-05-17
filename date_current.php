<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="veiwport" content="width=device-width, initial-scale=1.0">
    <title>Date Procrastination</title>
</head>

<body>
    <h1>Show current day</h1>
    <p id="dater"></p>
    <button type="button" onclick="datePass()">Show date</button>

    <script>
        function datePass() {
            document.getElementById('dater').innerHTML = Date();
        }
    </script>
</body>

</html>