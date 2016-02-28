<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: YOUR_WEBSITE'; 
    $to = 'me@michaelkulinski.com'; 
    $subject = 'Hello';
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit']) {				 
        if (mail ($to, $subject, $body, $from)) { 
	    header('Location: /thankyou.html');
		exit;
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	}
} 
?>