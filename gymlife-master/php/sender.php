<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "zheleznyy.ray@mail.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Имя: $name 
    Фамилия: $surname 
    Телефон: $phone 
    Почта: $email 
    Текст: $text"; 	
	mail($to, $subject, $msg, "From: $from ");

?>

