<?
$name = $_POST[''];
$phone_number = $_POST[''];
$visitor_email = $_POST[''];
$message = $_POST[''];

$email_form = 'chittib584@gmail.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
              "User Phone_number: $phone_number.\n".
              "User Email: $visitor_email.\n".
              "User Message: $message .\n";

$to = 'chittib584@gmail.com';
 
$headers = "From: $email_from \r\n";

$headers.= "Reply-To: $visitor_email \r\n;"

mail($to,$email_subject,$email_body,$headers );

header("location: contact.html");
               
  
  
  
  
  
  
?>