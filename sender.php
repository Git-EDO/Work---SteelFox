<?php
    $oil = $_POST['oil'];
    $name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['tel'];

	$to = "test@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Масло: $oil /n
    Имя: $name /n
    E-mail: $email /n
    Телефон: $phone /n 	
	mail($to, $subject, $msg, "From: $to ");

?>