<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    
<?php
include_once 'includes/header.php';

include_once'includes/config.php';
include_once'includes/functions.php';


$allOrdres = $pdo->query('SELECT * FROM pizza_orders
                        INNER JOIN pizza_customer
                        ON pizza_orders.customer_fk = pizza_customer.customer_id');


foreach ($allOrdres as $row) {
  echo "<div class='accordion-item'>
  <h2 class='accordion-header' id='heading{$row['pizza_id']}'>
    <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$row['pizza_id']}' aria-expanded='false' aria-controls='collapse{$row['pizza_id']}'>
      Order #{$row['pizza_id']}
    </button>
  </h2>
  <div id='collapse{$row['pizza_id']}' class='accordion-collapse collapse' aria-labelledby='heading{$row['pizza_id']}' data-bs-parent='#accordionExample'>
    <div class='accordion-body'>
      {$row['customer_fname']} {$row['customer_lname']} <br> {$row['customer_adress']} {$row['customer_zip']}
    </div>
  </div>
</div>";
}

?>




<?php 
include_once 'includes/footer.php';
?>