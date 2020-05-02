<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$data = $_POST['data'];
$time = $_POST['time'];
$question = $_POST['question'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$data = htmlspecialchars($data);
$time = htmlspecialchars($time);
$question = htmlspecialchars($question);
$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$data = urldecode($data);
$time = urldecode($time);
$question = urldecode($question);
$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$data = trim($data);
$time = trim($time);
$question = trim($question);
if (mail('tatarstroy@gmail.com', 'Заявка с сайта', 'Имя: '.$name."\n Телефон: ".$phone."\n Email: ".$email."\n Дата: ".$data."\n Время: ".$time."\n Вопрос: ".$question)) {
	echo "<h2>Заявка успешно отправлена</h2>";
	return;
	
}
else {
	echo "error";}
