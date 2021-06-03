<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Data Type</title>
</head>

<body>
    <div id="wrapper">
        <section class="boxMain">
            <p id="mesD"></p>
        </section>
    </div>
    <script>
        const employ = {
            firstName: "Lario",
            lastName: "Denava",
            address: "Manila, Philippines",
            fullName: function() {
                return this.firstName + ' ' + this.lastName;
            }
        };
        document.getElementById('mesD').innerHTML = employ.fullName();
    </script>
</body>

</html>