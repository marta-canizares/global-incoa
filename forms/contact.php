<?php

if (isset($_POST['submit'])) {
  //ini_set( 'display_errors', 1 ); # REMOVE // FOR DEBUG
  //error_reporting( E_ALL ); # REMOVE // FOR DEBUG
  $from = "marta.s.canizares@gmail.com"; // Email con el dominio del Hosting para evitar SPAM
  $fromName = "CONSULTA-WEB"; // Nombre que saldrá en el email recibido
  $to = "marta.s.canizares@gmail.com"; // Dirección donde se enviará el formulario
  $subject = $_POST['subject']; // Asunto del Formulario

  /* Componemos el mensaje */
  $fullMessage .= "Nombre: " . $_POST['name'] . "\r\n";
  $fullMessage .= "E-Mail: " . $_POST['email'] . "\r\n";
  $fullMessage .= "Asunto: " . $_POST['subject'] . "\r\n";
  $fullMessage .= "Mensaje: " . $_POST['message'] . "\r\n";

  /* Creamos las cabeceras del Email */
  $headers = "Organization: RPF WEB\r\n";
  $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
  $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
  $headers .= "Return-Path: " . $to . "\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

  /* Enviamos el Formulario*/
  if (mail($to, $subject, $fullMessage, $headers)) {
      echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
  } else {
      echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
  }
}







///
/*

  $receiving_email_address = 'marta.s.canizares@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
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
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
*/



?>
