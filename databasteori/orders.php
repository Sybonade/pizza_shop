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

$allOrdres = $pdo->query
('SELECT * FROM pizza_orders
INNER JOIN pizza_customer
ON pizza_orders.customer_fk = pizza_customer.customer_id')->fetchAll();

$allStatuses = $pdo->query
('SELECT * FROM pizza_order_status')->fetchAll();

if(isset($_POST['update-status'])); {
  $updateStatusResult = updateOrderStatus($pdo);
}

if(isset($updateStatusResult)) {
  echo $updateStatusResult;
}

?>

<h2>Orders in queue</h2>
<div class="accordion" id="accordionExample">

<?php
foreach ($allOrdres as $row){
if ($row['order_status_fk'] === 1) {
  echo "<div class='accordion-item'>
  <h2 class='accordion-header' id='heading{$row['pizza_id']}'>
    <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$row['pizza_id']}' aria-expanded='false' aria-controls='collapse{$row['pizza_id']}'>
      Order #{$row['pizza_id']}
    </button>
  </h2>
  <div id='collapse{$row['pizza_id']}' class='accordion-collapse collapse' aria-labelledby='heading{$row['pizza_id']}' data-bs-parent='#accordionExample'>
    <div class='accordion-body'>
      {$row['customer_fname']} {$row['customer_lname']} <br> {$row['customer_adress']} {$row['customer_zip']}
      <form method='post' action=''>
      <select name='orderstatus'>
      ";

      foreach($allStatuses as $singleStatus){
        if($row['order_status_fk'] === $singleStatus['status_id']) {
              $selectedStatus = "selected";
        }

        else {$selectedStatus = "";}
        echo "<option value='{$singleStatus['status_id']}' {$selectedStatus} >{$singleStatus['status_name']}</option>";
      }
    echo "</select> <input type='hidden' id='cust-id' name='cust-id' value='{$row['pizza_id']}'><input type='submit' name='update-status' value='Update'></form>
    </div>
  </div>
</div>";
}}
?>
</div>
<h2>Preparing Order</h2>
<div class="accordion" id="accordionExample">

<?php
foreach ($allOrdres as $row){
if ($row['order_status_fk'] === 2) {
  echo "<div class='accordion-item'>
  <h2 class='accordion-header' id='heading{$row['pizza_id']}'>
    <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$row['pizza_id']}' aria-expanded='false' aria-controls='collapse{$row['pizza_id']}'>
      Order #{$row['pizza_id']}
    </button>
  </h2>
  <div id='collapse{$row['pizza_id']}' class='accordion-collapse collapse' aria-labelledby='heading{$row['pizza_id']}' data-bs-parent='#accordionExample'>
    <div class='accordion-body'>
      {$row['customer_fname']} {$row['customer_lname']} <br> {$row['customer_adress']} {$row['customer_zip']}
      <form method='post' action=''>
      <select name='orderstatus'>
      ";

      foreach($allStatuses as $singleStatus){
        if($row['order_status_fk'] === $singleStatus['status_id']) {
              $selectedStatus = "selected";
        }

        else {$selectedStatus = "";}
        echo "<option value='{$singleStatus['status_id']}' {$selectedStatus} >{$singleStatus['status_name']}</option>";
      }
    echo "</select> <input type='hidden' id='cust-id' name='cust-id' value='{$row['pizza_id']}'><input type='submit' name='update-status' value='Update'></form>
    </div>
  </div>
</div>";
}}
?>
</div>

<h2>Delivering Order</h2>
<div class="accordion" id="accordionExample">

<?php
foreach ($allOrdres as $row){
if ($row['order_status_fk'] === 3) {
  echo "<div class='accordion-item'>
  <h2 class='accordion-header' id='heading{$row['pizza_id']}'>
    <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse{$row['pizza_id']}' aria-expanded='false' aria-controls='collapse{$row['pizza_id']}'>
      Order #{$row['pizza_id']}
    </button>
  </h2>
  <div id='collapse{$row['pizza_id']}' class='accordion-collapse collapse' aria-labelledby='heading{$row['pizza_id']}' data-bs-parent='#accordionExample'>
    <div class='accordion-body'>
      {$row['customer_fname']} {$row['customer_lname']} <br> {$row['customer_adress']} {$row['customer_zip']}
      <form method='post' action=''>
      <select name='orderstatus'>
      ";

      foreach($allStatuses as $singleStatus){
        if($row['order_status_fk'] === $singleStatus['status_id']) {
              $selectedStatus = "selected";
        }

        else {$selectedStatus = "";}
        echo "<option value='{$singleStatus['status_id']}' {$selectedStatus} >{$singleStatus['status_name']}</option>";
      }
    echo "</select> <input type='hidden' id='cust-id' name='cust-id' value='{$row['pizza_id']}'><input type='submit' name='update-status' value='Update'></form>
    </div>
  </div>
</div>";
}}
?>
</div>


<?php 
include_once 'includes/footer.php';
?>