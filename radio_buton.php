<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio button procrastination</title>
</head>

<body>
    <div id="wrapper">
        <section class="boxMain">
            <form action="#" method="POST">
                <h1>Computer Courses</h1>
                <input type="radio" name="courses" id="c1" onclick="pressText(1)" value="Computer Scientist">Computer Scientist<br>
                <input type="radio" name="courses" id="c2" onclick="pressText(2)" value="Computer Engineering">Computer Engineering<br>
                <input type="radio" name="courses" id="c3" onclick="pressText(3)" value="Computer Science">Computer Science<br>
                <input type="radio" name="courses" id="c4" onclick="pressText(4)" value="Computer Technician">Computer Technician<br>
                <input type="radio" name="courses" id="c5" onclick="pressText(5)" value="Computer Secretariat">Computer Secretariat<br>
                <p id="result"></p>
                <button type="button" onclick="alertMes()">Submit</button>
                <!-- <button type="button" onclick="coursePick()">Submit</button> -->
            </form>
        </section>
    </div>
    <script>
        function pressText(num) {
            let x = document.getElementById('result').innerHTML = document.getElementById('c' + num).value;
            // console.log(x);
        }

        function alertMes() {
            mes = document.getElementById('result').innerHTML;
            alert('Your career choice is: ' + mes);
        }
    </script>
</body>

</html>