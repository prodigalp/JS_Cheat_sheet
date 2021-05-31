<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function call Procrastination</title>
</head>

<body>
    <div id="wrapper">
        <section class="boxMain">
            <article class="formSum">
                <form action="#" method="post">
                    <h2>Add-Up Function</h2>
                    <div class="formData">
                        <label for="numOne">First value:&nbsp;&nbsp;</label>
                        <input type="number" name="numOne" id="numOne" placeholder="Enter a number">
                    </div>
                    <div class="formData">
                        <label for="numTwo">Second value:&nbsp;&nbsp;</label>
                        <input type="number" name="numTwo" id="numTwo" placeholder="Enter a number">
                    </div>
                    <div class="formData">
                        <label for="numAns">Ansnwer&nbsp;&nbsp;</label>
                        <input type="number" name="numAns" id="numAns" placeholder="Answer goes here" readonly>
                    </div>
                    <div class="formBtn">
                        <button type="button" onclick="canCel()">Cancel</button>
                        <button type="button" onclick="calCu(document.getElementById('numOne').value, document.getElementById('numTwo').value)">Send</button>
                    </div>
                </form>
            </article>
        </section>
    </div>

    <script>
        function canCel() {
            document.getElementById('numOne').value = '';
            document.getElementById('numTwo').value = '';
            document.getElementById('numAns').value = '';
        }

        function calCu(a, b) {

            let final = parseInt(a, 10) - parseInt(b, 10); // convert to INT and round-off
            console.log(typeof(final));
            document.getElementById('numAns').value = final;
        }
    </script>
</body>

</html>