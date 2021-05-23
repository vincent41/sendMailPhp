<?php
//https://www.geekstrick.com/send-email-using-php-and-javascript/

/*
$to = "24web@domain.de";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: social@domain.com";

mail($to,$subject,$txt,$headers); 
*/

   // data sent in header are in JSON format
   // header('Content-Type: application/json');
   // takes the value from variables and Post the data

   $email = "info@domain.com";
   $postmessage = $_POST['message'];  
   $to = $_POST['email'];
   $subject = "Contact Us";
   // Email Template
   
   $message .= "<b>Email Address : </b>".$email."<br>";
   $message .= "<b>Message : </b>".$postmessage."<br>";

   $header = "From:" . $email . " \r\n";
   $header .= "MIME-Version: 1.0\r\n";
   $header .= "Content-type: text/html\r\n";
   $retval = mail ($to,$subject,$message,$header);
   // message Notification
   if( $retval == true ) {
      echo json_encode(array(
         'success'=> true,
         'message' => 'Message sent successfully'
      ));
   }else {
      echo json_encode(array(
         'error'=> true,
         'message' => 'Error sending message'
      ));
   }

   
?>