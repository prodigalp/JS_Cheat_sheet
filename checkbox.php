<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Checkbox procrastination</title>
</head>

<body>
    <form action="#" method="POST" name="fruitStand">
        <h2>Fruit Selections</h2>
        <h3>Check the fruits that you like.</h3>
        <input type="checkbox" name="name[]" id="fruit1" onclick="fruitStand(1, 'Guava')">Guava<br>
        <input type="checkbox" name="name[]" id="fruit2" onclick="fruitStand(2, 'Papaya')">Papaya<br>
        <input type="checkbox" name="name[]" id="fruit3" onclick="fruitStand(3, 'Apple')">Apple<br>
        <input type="checkbox" name="name[]" id="fruit4" onclick="fruitStand(4, 'Manggo')">Manggo</br>
        <input type="checkbox" name="name[]" id="fruit5" onclick="fruitStand(5, 'Grapes')">Grapes<br><br>

        <p id="result1"></p>
        <p id="result2"></p>
        <p id="result3"></p>
        <p id="result4"></p>
        <p id="result5"></p>
    </form>
    <script>
        // Check if Fruit is selected and display name of the fruit
        function fruitStand(num, fruit) {

            if (document.getElementById('fruit' + num).checked == true) {
                document.getElementById('result' + num).innerHTML = fruit;
            } else {
                document.getElementById('result' + num).innerHTML = '';
            }
        }
    </script>
</body>

</html>