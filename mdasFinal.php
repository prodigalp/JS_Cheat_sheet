<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">Eyestrain</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 d-flex ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Settings</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Download</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Bloggs</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-3 p-2">
        <div class="row justify-content-center ms-3 me-3">
            <div class="col-md-12 col-lg-12 col-xl-10">
                <div class="card">
                    <div class="card-header text-center">
                        Arithmethic Operation
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST">
                            <div class="row">
                                <div class="col-md-12 col-lg-6 col-xl-6 text-center mb-3 d-flex align-items-center justify-content-center bg-dark rounded-3 p-3">
                                    <select class="form-select" id="math" name="math">
                                        <option selected hidden disabled>Select operation</option>
                                        <option value="mul">Multiplication</option>
                                        <option value="div">Division</option>
                                        <option value="add">Addition</option>
                                        <option value="sub">Subtraction</option>
                                        <option value="mod">Modulus</option>
                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-6 col-xl-6 mb-3">
                                    <div class="input-group mb-2 align-items-center">
                                        <span class="input-group-text" id="basic-addon1">1st: &nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="txtNum1" id="txtNum1" placeholder="Enter first number">
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">2nd:&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="txtNum2" id="txtNum2" placeholder="Enter second number">
                                    </div>
                                    <div class="input-group mb-2">
                                        <span class="input-group-text" id="basic-addon1">Answer</span>
                                        <input type="text" class="form-control" name="txtAns" id="txtAns" placeholder="Result">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12 col-xl-12 mb-3 d-flex justify-content-center">
                                    <button type="button" class="btn btn-primary btn-lg w-25 d-flex justify-content-center" onclick="perForm()">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-muted text-center">
                        Programmer: Eyestrain
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
    <script>
        function perForm() {
            let x = document.getElementById('math').value;
            let a = parseInt(document.getElementById('txtNum1').value);
            let b = parseInt(document.getElementById('txtNum2').value);
            let ans;

            if (x == 'mul') {
                ans = a * b;
                processMath(ans);

            } else if (x == 'div') {
                ans = a / b;
                processMath(ans);
            } else if (x == 'add') {
                ans = a + b;
                processMath(ans);
            } else if (x == 'sub') {
                ans = a - b;
                processMath(ans);
            } else if (x == 'mod') {
                ans = a % b;
                processMath(ans);
                // console.log(ans);
            }
        }

        function processMath(num) {
            document.getElementById('txtAns').value = num;
        }
    </script>
</body>

</html>