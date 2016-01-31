<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$nationality = $_POST['nationality'];
	$from = 'From: Hackapython';
	$to = 'gj.gjonn@gmail.com';
	$subject = 'Registration';

	$body = "From: $name\n E-mail : $email\n Nationality:\n $nationality";
	if ($_POST['submit']) {
	    /* Anything that goes in here is only performed if the form is submitted */
	}
	if ($_POST['submit']) {
    if ($name != '' && $email != '') {
        if ($human == '4') {				 
            if (mail ($to, $subject, $body, $from)) { 
	        echo '<p>Your message has been sent!</p>';
	    } else { 
	        echo '<p>Something went wrong, go back and try again!</p>'; 
	    } 
	} else if ($_POST['submit'] && $human != '4') {
	    echo '<p>You answered the anti-spam question incorrectly!</p>';
	}
    } else {
        echo '<p>You need to fill in all required fields!!</p>';
    }
}
?>