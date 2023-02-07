<?php

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'matheusveranini_1999@hotmail.com';

  console.log('Deu Erro aqui 1');

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }
  console.log('Deu Erro aqui 2');

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  console.log('Deu Erro aqui 3');

  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];
  console.log('Deu Erro aqui 4');

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.office365.com',
    'username' => 'matheusveranini_1999@hotmail.com',
    'password' => 'Mat2805@',
    'port' => '587'
  );

  console.log('Deu Erro aqui 5');

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
