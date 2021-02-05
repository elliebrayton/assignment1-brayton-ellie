<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://use.typekit.net/qdg1hth.css">

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Assignment 1</title>
  </head>
  <body>
      <div class="content d-flex justify-content-center align-items-center">
      <img src="img/icecream.png" alt="icecream">
      <div class="wrapper p-4">
    <form action="my-form-handle.php" method="post" class="container-fluid borderp-4">
    <h1>Icecream Evaluator Form</h1>
    <!-- NAME --> 
    <div class="row">
        <div class="form-group col-md-6">
            <label for="first">First Name</label>
            <input type="text" id="first" placeholder="First Name" name="firstName" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="last">Last Name</label>
            <input type="text" id="last" placeholder="Last Name" name="lastName" class="form-control">
        </div>
    </div>

    <!-- CONTACT INFO --> 
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Primary Email" name="email" class="form-control">
        </div>
        <div class="form-group col-md-6">
            <label for="phone">Phone Number</label>
            <input type="text" id="phone" placeholder="Primary Number" name="phoneNumber" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12"></div>
    </div>
    <!-- RATING -->

    <div class="row px-3 pb-3">
        <p>Select Your Favorite Flavor</p>
        <select class="custom-select" name="flavor">
            <option selected>Open this select menu</option>
                <option value="chocolate">Chocolate</option>
                <option value="vanilla">Vanilla</option>
                <option value="Strawberry">Strawberry</option>
                <option value="Rocky Road">Rocky Road</option>
                <option value="Mint Chocolate Chip">Mint Chocolate Chip</option>
                <option value="Cookie Dough">Cookie Dough</option>
                <option value="Oreo">Oreo</option>
                <option value="Chocolate Brownie">Chocolate Brownie</option>
                <option value="Buttered Pecan">Buttered Pecan</option>
                <option value="Oatmeal">Oatmeal</option>
                <option value="Pistachio">Pistachio</option>
                <option value="Coconut">Coconut</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    </form>
    </div>
    </div>
</div>

    <!-- JQUERY, POPPER, BOOTSTRAP JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>