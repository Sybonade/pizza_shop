<?php
  include_once'includes/config.php';
  include_once'includes/functions.php';
  include_once 'includes/header.php';
?>

  <!--Navbar för sidan 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/php/dynamiska/pizza_shop/pizza_shop/databasteori/index.php">Customer Info <span class="sr-only">(current)</span></a>
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
    End för navbar för sidan -->

<br>

<!-- Page title -->
<div class="container text-center pt-5 pb-5">
<h2 class="">About my pizza shop</h2>
<p class="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
  doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto 
  beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
  sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui 
  consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
  <a href="editpage.php" class="btn btn-warning align-center mt-2">Edit page text</a>
</div>

<br>
<h1 class="text-center">Select your order</h1>

<form action="customerinfo.php" method="post">
<!-- Pizza size here-->
<div class="container">
  <div class="row">

    <?php
    //including config and functions folder
    
    //$pizza_size fetching db data
    $pizza_size = $pdo->query('SELECT * FROM pizza_size');
    ?>
    <!-- Container for radio buttons-->
    <div class="container-fluid">
      <label class="form-check-label" for="size" id="size" name="size">
         <?php
            //foreach loop to display db data in radio button
           foreach ($pizza_size as $row)
            {
              echo "<div class='float-left'>
              
              <div class='form-check'>
              
              <input type='radio' id='{$row['size_name']}' value='{$row['size_id']}' name='size' >

              <label>{$row['size_name']} - {$row['size_price']} € </label><br>

              </div>
              
              </div>";
        
            }
          ?>
      </label>
    </div>
          </div>
<br>
<br>

<!-- Query för toppings -->
<?php 
$toppings = $pdo->query('SELECT * FROM pizza_topppings')->fetchAll(PDO::FETCH_ASSOC);
?>
<!--Pizza toppings start here -->
<div class="container"><h3 class="text-left pb-2">Select Topping</h3>
  <div class="row">
    <div class="col-sm">
     <select class="form-select" required="required" name="topping1" id="topping1" aria-label="Disabled select example" enabled>
         <?php foreach($toppings as $row){
             echo "<option value='{$row['top_id']}' >{$row['top_name']}</option>"; 
           }
           ?>
      </select>
    </div>

   <div class="col-sm">
     <select class="form-select" required="required" name="topping2" id="topping2" aria-label="Disabled select example" enabled>
        <?php foreach($toppings as $row){
           echo "<option value='{$row['top_id']}' >{$row['top_name']}</option>"; 
         }
         ?>
     </select>
    </div>

    <div class="col-sm">
     <select class="form-select" required="required" name="topping3" id="topping3" aria-label="Disabled select example" enabled>
         <?php foreach($toppings as $row){
           echo "<option value='{$row['top_id']}' >{$row['top_name']}</option>"; 
         }
         ?>
      </select>
    </div>

    <div class="col-sm">
       <select class="form-select" required="required" name="topping4" id="topping4" aria-label="Disabled select example" enabled>
           <?php foreach($toppings as $row){
             echo "<option value='{$row['top_id']}' >{$row['top_name']}</option>"; 
           }
          ?>
        </select>
    </div>

</div>
<!--Pizza toppings end here -->


<br>
<br>

<!-- Pizza condiments start here -->
<div class="container"><h2 class="pb-2">Condiments</h2>
  <div class="row">
    <div class="col-2">
       <div class="form-check">
         <input class="form-check-input" type="checkbox" value="oregano" name="oregano" id="oregano">
         <label class="form-check-label" for="oregano">
            Oregano
          </label>
      </div>
    </div>
    <div class="col-2">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="garlic" name="garlic" id="garlic">
        <label class="form-check-label" for="garlic">
        Garlic
        </label>
      </div>
    </div>
  </div> 
</div>
<!-- Pizza condiments end here-->
 

<br>
<br>

<!-- Allergies start here -->
<div class="container"><h2>Allergies</h2>
  <div class="row">
    <div class="col-1">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="allergy" name="allergy" id="allergy">
        <label class="form-check-label" for="allergy">
        Gluten
        </label>
      </div>
    </div>
  </div>
</div>
<!-- Allergies end here -->

<br>
<br>

<!-- Delivery method start here -->
<div class="container"><h2>Delivery Method</h2>
  <div class="row">
    <div class="col-2">
    <div class="form-check">
         <input class="form-check-input" required type="radio" name="delivery" value="homedelivery"  id="homedelivery">
           <label  class="form-check-label" for="delivery">
            Delivery
           </label>
        </div>
    </div>
    <div class="col-2">
    <div class="form-check">
         <input class="form-check-input" type="radio" value="pickup" name="delivery" id="pickup">
           <label class="form-check-label" for="pickup">
            Pick-up
           </label>
        </div>
    </div>
  </div>
</div>
<!-- Delivery method end here -->


<br>
<br>

<!-- Additional info box start here -->
<div class="container">
     <div id="form-box">
        <div class="form-group">
         <label for="additional-info"><h3>Additional info</h3></label>
         <textarea class="form-control" name="additional-info" id="additional-info" rows="3"></textarea>
        </div>
          </div>
    </div>
  </div>
</div>
<!-- Additional info box end here -->

<br>
<br>

<!-- Next page button start here
<div class="container pb-4">
<a href="http://localhost/php/dynamiska/pizza_shop/pizza_shop/databasteori/index.php" class="btn btn-info" role="button">Next</a>
</div>
 Next page button end here -->
<input type="submit" value="next" name="order-info">
</form>

<br>
<br>
<br>

<!-- Bootstrap link here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<?php 
include_once 'includes/footer.php';
?>