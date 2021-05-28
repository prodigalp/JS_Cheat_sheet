<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Object</title>
</head>

<body>
    <h2>Personal Information</h2>
    <hr>
    <label>Name: <span id="fnm"></span></label><br>
    <label>Username: <span id="usr"></span></label><br>
    <label>Address: <span id="adr"></span></label><br>
    <label>Age: <span id="age"></span></label>

    <script>
        let person = {
            fullName: "Lario De Nava",
            userName: "Prodigalp",
            address: "Manila, Philippines",
            age: 37
        };
        document.getElementById('fnm').innerHTML = person.fullName;
        document.getElementById('usr').innerHTML = person.userName;
        document.getElementById('adr').innerHTML = person.address;
        document.getElementById('age').innerHTML = person.age;
    </script>
</body>

</html>