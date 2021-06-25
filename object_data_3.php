<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALtran</title>
</head>

<body>
    <div id="wrapper">
        <section class="boxMain">
            <p id="mesD">Car type: <span id="carMake"></span></p>
            <button type="button" onclick="carMaker()">Brand</button>
        </section>
    </div>
    <script>
        function carMaker() {
            let car = {
                brand: "Toyota",
                model: "2020",
                color: "Red"
            };

            document.getElementById('carMake').innerHTML = car.brand;
        }
    </script>
</body>

</html>