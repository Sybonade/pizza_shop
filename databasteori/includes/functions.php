<?php

function addOrder($pdo){
	
	
	$stmt_insertCustomer = $pdo->prepare('INSERT INTO pizza_customer
	(customer_fname, customer_lname, customer_adress, customer_zip, customer_city, customer_phone, customer_email)
	VALUES (:fname, :lname, :adress, :zip, :city, :phone, :email)');
	$stmt_insertCustomer->bindParam(':fname' , $_POST['fname'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':lname' , $_POST['lname'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':adress' , $_POST['adress'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':zip' , $_POST['zip'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':city' , $_POST['city'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':phone' , $_POST['phone'], PDO::PARAM_STR);
	$stmt_insertCustomer->bindParam(':email' , $_POST['email'], PDO::PARAM_STR);
	$stmt_insertCustomer->execute();

	$last_id = $pdo->lastInsertId();

	$stmt_insertOrder = $pdo->prepare('INSERT INTO pizza_orders
	(pizza_topping_1_fk, pizza_topping_2_fk, pizza_topping_3_fk, pizza_topping_4_fk, pizza_delivery, customer_fk, pizza_oregano, pizza_garlic, pizza_gluten, pizza_size_fk, order_info)
	VALUES (:pizza_topping_1, :pizza_topping_2, :pizza_topping_3, :pizza_topping_4, :pizza_delivery, :customer_fk, :pizza_oregano, :pizza_garlic, :pizza_gluten, :pizza_size, :additional)');
	$stmt_insertOrder->bindParam(':pizza_topping_1' , $_SESSION['topping1'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_topping_2' , $_SESSION['topping2'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_topping_3' , $_SESSION['topping3'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_topping_4' , $_SESSION['topping4'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_delivery' , $_SESSION['delivery'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':customer_fk' , $last_id, PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_oregano' , $_SESSION['oregano'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_garlic' , $_SESSION['garlic'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_gluten' , $_SESSION['allergy'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':pizza_size' , $_SESSION['size'], PDO::PARAM_INT);
	$stmt_insertOrder->bindParam(':additional' , $_SESSION['additional-info'], PDO::PARAM_STR);
	$stmt_insertOrder->execute();

	if($stmt_insertOrder->execute()){
		return "Order succesful";
	}
	else {
		return "Something went wrong";
	}

}







?>