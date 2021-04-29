<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Checkbox procrastination</title>
</head>

<body>
    <form action="#" method="POST">
        <h2>Fruit Selections</h2>
        <h3>Check the fruits that you like.</h3>
        <input type="checkbox" name="name[]" id="fruit1" value="Guava">Guava<br>
        <input type="checkbox" name="name[]" id="fruit2" value="Papaya">Papaya<br>
        <input type="checkbox" name="name[]" id="fruit3" value="Manggo">Manggo<br>
        <input type="checkbox" name="name[]" id="fruit4" value="Apple">Apple</br>
        <input type="checkbox" name="name[]" id="fruit5" value="Grapes">Grapes<br><br>
        <button type="button" onclick="fruitStand()">Submit</button>

        <p id="result1"></p>
        <p id="result2"></p>
        <p id="result3"></p>
        <p id="result4"></p>
        <p id="result5"></p>
    </form>
    <script>
        function fruitStand() {
            if (document.getElementById('fruit1').checked == true) {
                document.getElementById('result1').innerHTML = 'Guava';
            }
            if (document.getElementById('fruit2').checked == true) {
                document.getElementById('result2').innerHTML = 'Papaya';
            }
            if (document.getElementById('fruit3').checked == true) {
                document.getElementById('result3').innerHTML = 'Manggo';
            }
            if (document.getElementById('fruit4').checked == true) {
                document.getElementById('result4').innerHTML = 'Apple';
            }
            if (document.getElementById('fruit5').checked == true) {
                document.getElementById('result5').innerHTML = 'Grapes';
            }
            // let a = document.getElementById('fruit1').value;
            // let b = document.getElementById('fruit2').value;
            // let c = document.getElementById('fruit3').value;
            // let d = document.getElementById('fruit4').value;
            // let e = document.getElementById('fruit5').value;

        }
    </script>
</body>

</html>