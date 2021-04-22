<!DOCTYPE html>
<html>

<body>

    <h2>JavaScript Statements</h2>

    <p>Multiple statements in one line is allowed.</p>

    <p id="demo1"></p>

    <button type="button" onclick="calcu()">Calculate</button>

    <script>
        // calculate number, then transfer to c, display the result
        // Multiple statement in one line is allowed
        function calcu() {
            a = 5, b = 32, c = a + b;

            // Display the result
            alert(c);
        }
    </script>

</body>

</html>