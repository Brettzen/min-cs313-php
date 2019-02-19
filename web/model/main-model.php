<?php

function sendMessage($name, $email, $phone="", $message) {
 
    $email_to = "brettz.starks@gmail.com";
    $email_subject = "Message from ePortfolio Site";
    if(!isset($name) || !isset($email) || !isset($message)) {
       return 0;      
    }

    $email_message = "<b>Name: </b> $name <br>";
    $email_message .= "<b>Email: </b> $email <br>";
    $email_message .= "<b>Telephone: </b> $phone <br>";
    $email_message .= "<b>Message: </b> $message <br>";

    // create email headers
    $headers = 'From: messages@starksdnd.com'."\r\n".
    'Reply-To: '.$email."\r\n" .
    'Content-type: text/html'."\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($email_to, $email_subject, $email_message, $headers);  

    return 1;
}
