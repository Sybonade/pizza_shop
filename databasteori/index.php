<?php
include_once'includes/config.php';
include_once'includes/functions.php';

if(isset($_POST['order-info'])){
  $_SESSION['size'] = $_POST['size'];
  $_SESSION['topping1'] = $_POST['topping1'];
  $_SESSION['topping2'] = $_POST['topping2'];
  $_SESSION['topping3'] = $_POST['topping3'];
  $_SESSION['topping4'] = $_POST['topping4'];

  if(isset($_POST['oregano'])){
  $_SESSION['oregano'] = 1;
  }
  else {
    $_SESSION['oregano'] = 0;
  }


  if(isset($_POST['garlic'])){
    $_SESSION['garlic'] = 1;
    }
    else {
      $_SESSION['garlic'] = 0;
    }


    if(isset($_POST['allergy'])){
      $_SESSION['allergy'] = 1;
      }
      else {
        $_SESSION['allergy'] = 0;
      }
   
      if(isset($_POST['delivery'])){
           $_SESSION['delivery'] = 1;
       } 
       else {
        $_SESSION['delivery'] = 0;
       }     
       
       if(isset($_POST['additional-info'])){
       $_SESSION['additional-info'] = $_POST['additional-info'];
  }
}



$pizza_size = $pdo->query('SELECT * FROM pizza_size');


if(isset($_POST['complete-order'])) {
	$orderInsertStatus=addOrder($pdo);
	echo $orderInsertStatus;
}

  //$cust_id = $pdo->query('SELECT * FROM pizza_customer WHERE customer_id IS NOT NULL ORDER BY 1 DESC LIMIT 1');


?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Customer Info <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/php/dynamiska/pizza_shop/pizza_shop/databasteori/order.php">Order</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
  </div>
</nav>
<h2 class="ml-5" >Customer Info</h2>


<form action="" method="post" class="ml-5">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John" required="required"><br><br>
  
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe" required="required"><br><br>
  
  <label for="adress">Adress:</label><br>
  <input type="text" id="adress" name="adress" value="Kivipellonkatu 2" required="required"><br><br>
  
  <label for="zip">Zip Code:</label><br>
  <input type="text" id="zip" name="zip" value="10300" required="required"><br><br>
  
  <label for="city">City:</label><br>
  <input type="text" id="city" name="city" value="Karjaa" required="required"><br><br>
  
  <label for="phone">Phone number:</label><br>
  <input type="text" id="phone" name="phone" value="0401234567" required="required"><br><br>
  
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="john.doe@example.com"><br><br>
  
  <input name="complete-order" type="submit" value="Submit">
</form> 

<?php 

  var_dump($_POST);
  var_dump($_SESSION);
  
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
