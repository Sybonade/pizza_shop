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


}







?>