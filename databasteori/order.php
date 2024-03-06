
<?php
include_once'includes/config.php';
include_once'includes/functions.php';

$pizza_size = $pdo->query('SELECT * FROM pizza_size');
//$pizza_toppings = $pdo->query('SELECT * FROM pizza_toppings');





?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <!--Navbar för sidan -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/php/dynamiska/databasteori/order.php">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
<!-- End för navbar för sidan -->

<br>

<h1 class="text-center">Select your order</h1>

<br>

<!--Pizza toppings -->

<div class="container"><
  <div class="row">

    <?php
    foreach ($pizza_size as $row)
    {
        echo "<input type='radio' id='{$row['Size_name']}' value='{$row['Size_name']}' name='small' >
        <label for='{$row['Size_name']}'></label>";
        
      
    }
    ?>
<!--
    <div class="col-sm">
        <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Small
           </label>
        </div>
    </div>
    <div class="col-sm">
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Normal
           </label>
        </div>
    </div>
    <div class="col-sm">
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Large
           </label>
        </div>
    </div>
    <div class="col-sm">
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Family
           </label>
        </div>
    </div>
  </div>
</div>
  -->


<br>
<br>


<div class="container"><h3 class="text-left pb-2">Select Topping</h3>
  <div class="row">
    <div class="col-sm">
    <select class="form-select" aria-label="Disabled select example" enabled>
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    </div>
    <div class="col-sm">
    <select class="form-select" aria-label="Disabled select example" enabled>
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    </div>
    <div class="col-sm">
    <select class="form-select" aria-label="Disabled select example" enabled>
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    </div>
    <div class="col-sm">
    <select class="form-select" aria-label="Disabled select example" enabled>
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>
    </div>
  </div>
</div>


<br>
<br>

<div class="container"><h2 class="pb-2">Condiments</h2>
  <div class="row">
    <div class="col-2">
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
         <label class="form-check-label" for="flexCheckDefault">
            Oregano
          </label>
      </div>
    </div>
    <div class="col-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Garlic
        </label>
      </div>
    </div>
  </div> 
</div>
 
<br>
<br>

<div class="container"><h2>Allergies</h2>
  <div class="row">
    <div class="col-1">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
        Garlic
        </label>
      </div>
    </div>
  </div>
</div>

<br>
<br>

<div class="container"><h2>Delivery Method</h2>
  <div class="row">
    <div class="col-2">
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Deliver
           </label>
        </div>
    </div>
    <div class="col-2">
    <div class="form-check">
         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
           <label class="form-check-label" for="flexRadioDefault1">
            Pick-up
           </label>
        </div>
    </div>
  </div>
</div>

<br>
<br>

<div class="container">
     <form id="form-box">
        <div class="form-group">
         <label for="exampleFormControlTextarea1"><h3>Additional info</h3></label>
         <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </form>
    </div>
  </div>
</div>

<br>
<br>

<div class="container pb-4">
<a href="http://localhost/php/dynamiska/databasteori/index.php" class="btn btn-info" role="button">Next</a>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>