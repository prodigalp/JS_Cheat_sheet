<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dummy Javascript</title>
    <link rel="stylesheet" href="#">
</head>

<body>
    <div id="wrapper">
        <section class="boxMain">
            <p id="mesD"></p>
        </section>
    </div>

    <script>
        let employee = {
            firstName: "Eyestrain",
            lastName: "Prodigalp",
            age: 37,
            fullName: function() {
                return this.firstName + ' ' + this.lastName;
            }
        };
        document.getElementById('mesD').innerHTML = employee.fullName();
    </script>
</body>

</html>