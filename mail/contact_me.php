<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['message1']) || empty($_POST['message2']) || empty($_POST['message3']) || ) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$message1 = strip_tags(htmlspecialchars($_POST['message1']));
$message2 = strip_tags(htmlspecialchars($_POST['message2']));
$message3 = strip_tags(htmlspecialchars($_POST['message3']));

// Create the email and send the message
$to = "achieve0410@gmail.com"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "나는  $name 야띠-";
$body = "나는 $message1 하고싶고, 내용은 $message2야. \n\n첨부는 $message3를 할게.";
$header = "From: noreply@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $name";

if(!mail($to, $subject, $body, $header)){
  http_response_code(500);
}
?>
