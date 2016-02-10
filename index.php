<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$nationality = $_POST['nationality'];
	$from = 'Hackapython';
	$to = 'gj.gjonn@gmail.com';
	$subject = 'Registration';

	$body = "From: $name\n E-mail : $email\n Nationality:\n $nationality";

	if (!$_POST['name']) {
		$errName = 'Please enter name';
	}
	if (!$_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Please enter a valid email address'
    }
    if ($human !==4) {
    	$errHuman = 'Your anti-spam is incorrect';
    }
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! You are now subscribed!</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error in your Registration. Please try again later</div>';
    }
}

?>
