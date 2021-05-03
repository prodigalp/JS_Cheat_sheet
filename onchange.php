<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OnChange Procrastination</title>
</head>

<body>
    <div id="wrapper">
        <section class="boxCase">
            <h2>Pick your course:&nbsp;&nbsp;</h2>
            <select name="courseCol" id="courseCol" onchange="showCourse()">
                <option value="" selected disabled hidden>Computer Courses</option>
                <option value="Computer Scientist">Computer Scientist</option>
                <option value="Computer Engineering">Computer Engineering</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Computer Technician">Computer Technician</option>
                <option value="Computer Secritarial">Computer Secritarial</option>
            </select><br><br><br><br><br>
            <div class="">
                <p id="courseOut"></p>
            </div>
        </section>

    </div>
    <script>
        function showCourse() {
            // Transfer data to paragraph
            document.getElementById('courseOut').innerHTML = 'Course: ' + document.getElementById('courseCol').value;
        }
    </script>
</body>

</html>