<?php
include_once'includes/config.php';
include_once'includes/functions.php';


$pizza_size = $pdo->query('SELECT * FROM pizza_size');

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$orderInsertStatus=addOrder($pdo);
	
}

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
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
<h2>Customer Info</h2>


<form action="" method="post">
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
  
  <input type="submit" value="Submit">
</form> 




<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
