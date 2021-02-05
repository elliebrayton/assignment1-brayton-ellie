<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/qdg1hth.css">
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
    <?php

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $flavor = $_POST['flavor'];

    ?>
    <div class="content d-flex justify-content-center align-items-center">
    <img src="img/icecream.png" alt="icecream">
                <div class="wrapper border p-4">

                <h1>Thank you for your submission!</h1>
                <p>Below are the details of your submission.</p>
                <?php
                if(!empty($firstName)){
                    echo "<p><span>Name:</span> $firstName $lastName</p>";
                    
                };

                if(!empty($email)){
                    echo "<p><span>Primary Email:</span> $email</p>";
                };

                if(!empty($phoneNumber)){
                    echo "<p><span>Primary Phone Number:</span> $phoneNumber</p>";
                };

                if(!empty($flavor)){
                    echo "<p>Your favorite flavor is: $flavor!</p>";
                    echo "<p>What a great choice!</p>";
                } else{
                    echo "<p>You didn't select your favorite flavor... you must be a fan of all of them!</p>";
                }

                ?>
                
                </div>
        </div>

                <!-- JQUERY, POPPER, BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>