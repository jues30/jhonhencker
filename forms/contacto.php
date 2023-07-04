<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'jepelaezescritor@gmail.com';

  /*if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'jepelaezescritor@gmail.com',
    'password' => 'Meladriel.2023',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();*/
  
  $to = "jepelaezescritor@gmail.com";
  
  $message = $_POST['message'];

  $subject = $_POST['subject'];
/* Next we are setting some basic headers */
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
/* We have to add also a from header, because we want to know the email address from
the user who is contacting us. */
$headers .= 'From: '. $_POST['email'] . "\r\n";
/* Next we are sending the email */
$send = mail($to,$subject,$message, $headers);
/* And last we check if the mail() function was successful*/
if(!$send){
        echo "Εrror: El mensaje no pudo ser enviado.";
}else{
        echo "El mensaje fue enviado exitosamente.";
}
