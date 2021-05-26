<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenate string</title>
</head>

<body>
    <div id="wrapper">
        <section class="mainBox">
            <article class="strJoin">
                <p>String A = Eyestrain</p>
                <p>String B = Prodigalp</p>
                <p>String C = Recluse</p>
                <p>Concatenated:
                <h2 id="conStr"></h2>
                </p>
                <button type="button" onclick="strConCat()">Merge</button>
            </article>
        </section>
    </div>
    <script>
        function strConCat() {
            let str1 = 'Eyestrain';
            str1 += ' Prodigalp';
            str1 += ' Recluse';
            let str2 = str1.toUpperCase(); // Uppercase

            // Display concatenated string
            document.getElementById('conStr').innerHTML = str2;
        }
    </script>
</body>

</html>