<!-- In this example, It shows how function call is use -->
<!-- in changing paragrap value after button click -->
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Functions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Using Function Call</h1>
    <!-- ID paragraph  -->
    <p id="messUp">Eyestrain Prodigalp</p>

    <!-- function is used onclick -->
    <button type="button" onclick="changeValue()">Click here</button>
    <script src="main.js"></script>
    <script>
        // Name of function
        function changeValue() {
            document.getElementById('messUp').innerHTML = 'Web Developer Kuno!';
        }
    </script>
</body>

</html>