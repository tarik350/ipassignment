<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon.png" />
    <title>Enebla.com| Chckout And Payment</title>

    
    <link rel="stylesheet" href="./css/checkout.css?v=<?php echo time(); ?>"> 

</head>
<body>

<div class="container">

    <form action="https://formsubmit.co/contactolyad@gmail.com" method="POST">
        <input type="hidden" name="_subject" value="Payment confirmed!">
        <!-- <input type="hidden" name="_cc" value="tarikteshome3333@email.com"> -->
        <input type="hidden" name="_autoresponse" value="Order confirmed">
        <!-- <input type="hidden" name="_cc" value="michaelbelachew09@email.com,tarikteshome3333@email.com"> -->
        <input type="hidden" name="_captcha" value="false">
        <div class="row">

            <div class="col">

                <h3 class="title">Billing address</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name" placeholder="john deo" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name ="email" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" name="address" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" name="city" placeholder="Addis Abeba" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" name="state" placeholder="Ethiopia" required>
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" name="zipcode" placeholder="1000 6000" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/download.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" name="card name" placeholder="mr. john deo" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" name="card number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" name="expire date"placeholder="january" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" name="expire year" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" name="CVV" placeholder="1234" required>
                    </div>
                </div>

            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>