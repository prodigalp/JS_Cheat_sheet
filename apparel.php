<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apparel Clothing Procrastinate</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            -o-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            margin: 0px;
            padding: 0px;
            background: linear-gradient(90deg, violet, #FFF) no-repeat center center fixed;
            background-size: cover;
            font: 100%/1.3 sans-serif;
            overflow: auto;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        #wrapper {
            min-width: 30%;
            background: #000;
            padding: 10px;
            box-shadow: 0 0 1em rgba(0, 0, 0, .1);
            border: 10px SOLID violet;
            border-radius: 10px;
            overflow: hidden;
        }

        section.boxApparel {
            padding: 10px;
            background: #FFF;
            border-radius: 10px;
        }

        h2 {
            margin: 0px;
            padding: 0px;
            background: violet;
            text-align: center;
            color: #FFF;
            text-shadow: 1px 1px 2px #000;
        }

        .upperApp {
            display: flex;
            justify-content: center;
            margin-top: 5px;
            /* background: lightpink; */
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 10px 12px;
            border: 2px SOLID violet;
            border-radius: 10px;
            outline: none;
        }

        input[type="text"] {
            border: 2px SOLID violet;
            border-radius: 10px;
            padding: 10px 12px;
            outline: none;
        }

        h3 {
            margin: 0px;
            padding: 0px;
            background: #FFF;
            color: violet;
            text-align: center;
            /* margin-top: 5px; */
            margin-bottom: 5px;
            padding: 5px;
            border-radius: 10px 10px 0 0;
        }

        .sizeShirt {
            background: #333;
            padding: 10px;
            color: #FFF;
            text-align: center;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        .apprelQuantity {
            /* background: lightslategray; */
            padding: 10px;
            text-align: center;
            color: #000;
        }

        .apprelQuantity input[type="number"] {
            padding: 10px 12px;
            border: none;
            outline: none;
            border: 2px SOLID violet;
            border-radius: 10px;
        }

        .apparelDiscount {
            background: #FAF8CC;
            padding: 10px;
            text-align: center;
            margin-bottom: 2%;
        }

        .ApparelBtn {
            text-align: center;
        }

        button {
            border: none;
            outline: none;
            background: #306EFF;
            padding: 12px 15px;
            color: #FFF;
            border-radius: 5px;
            width: 40%;
            transition: all .5s ease-out;
        }

        button:hover {
            background: darkblue;
            cursor: pointer;
        }

        button:active {
            background: #306EFF;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <section class="boxApparel">
            <form action="#" method="POST" name="apparel">
                <div class="apprelHeader">
                    <h2>Eyestrain Apparel</h2>
                </div>
                <div class="apparelBrandPriceBox">
                    <div class="upperApp">
                        <div class="apparelBrand">
                            <select name="brands" id="brands" onchange="PriceyBrnd()">
                                <option disabled selected hidden>Choose your brand:&nbsp;</option>
                                <option>Giordano</option>
                                <option>Nike</option>
                                <option>Speedo</option>
                                <option>Louis Vuitton</option>
                                <option>Reebok</option>
                            </select>
                        </div>
                        <div class="apprelPrice">
                            <label>&nbsp;&nbsp;Price:&nbsp;</label>
                            <input type="text" name="txtPrice" id="txtPrice">
                        </div>
                    </div>
                    <div class="sizeShirt">
                        <h3>Choose your size:</h3>
                        <input type="radio" name="size" id="radSml" value="small">Small&nbsp;&nbsp;
                        <input type="radio" name="size" id="radMed" value="medium">Medium&nbsp;&nbsp;
                        <input type="radio" name="size" id="radLrg" value="large">Large&nbsp;&nbsp;
                    </div>
                    <div class="apprelQuantity">
                        <label>Quantity:&nbsp;&nbsp;</label>
                        <input type="number" name="txtQty" id="txtQty" placeholder="Use arrow key">
                    </div>
                    <div class="apparelDiscount">
                        <input type="checkbox" name="txtDis" id="txtDis" value="10">&nbsp;Membership discount.
                    </div>
                    <div class="ApparelBtn">
                        <button type="button" onclick="buyNow()">Buy</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    <script>
        function buyNow() {
            let priceTag = parseInt(document.getElementById('txtPrice').value);
            let priceQty = parseInt(document.getElementById('txtQty').value);
            let payment;
            // Check if value is a number
            if (isNaN(priceTag) || isNaN(priceQty)) {
                alert('Please fill in all the fields');
            } else {
                // Radio box identifying sizes
                if (apparel.size[0].checked == true) { // Small size
                    let payment = priceTag * priceQty;
                    checkDis(payment);
                } else if (apparel.size[1].checked == true) { // Mediuam size
                    let payment = (priceTag * priceQty) + 100;
                    checkDis(payment);
                } else if (apparel.size[2].checked == true) { // Large size
                    let payment = (priceTag * priceQty) + 200;
                    checkDis(payment);
                } else {
                    alert('Please choose your size!');
                }
            }
        }
        // Check for discounted price
        function checkDis(discount) {
            if (document.apparel.txtDis.checked == true) {
                // alert(discount);
                discount = discount * 0.90;
                displayPrice(discount);
            } else {
                displayPrice(discount);
            }
        }
        // Price of the product
        function PriceyBrnd() {
            let price = document.getElementById('brands');

            if (price.options.selectedIndex == 1) {
                pesoPrice(1300);
            } else if (price.options.selectedIndex == 2) {
                pesoPrice(2500);
            } else if (price.options.selectedIndex == 3) {
                pesoPrice(1700);
            } else if (price.options.selectedIndex == 4) {
                pesoPrice(1950);
            } else if (price.options.selectedIndex == 5) {
                pesoPrice(1800);
            }
        }
        // Display the price in textbox
        function pesoPrice(numPrice) {
            // This will display a typeError problem if you forgot to insert '' in txtPrice
            document.getElementById('txtPrice').value = numPrice;
        }
        // Display total payment
        function displayPrice(finalPrice) {
            alert('Total payment: ' + finalPrice);
        }
    </script>

</body>

</html>