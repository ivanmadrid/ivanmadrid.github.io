<?php
$from      = $_POST["from"];
$name = $_POST['name'];
$subject = 'New Email on ivanmadrid.github.io';
$message = 'Name: '$name . "\r\n" .$_POST["message"];
$organization = $_POST["organization"];
if($organization) {
    $subject = $subject . " (". $organization .")"
}
$headers = 'From: '.$_POST['from'] . "\r\n" .
    'Reply-To: ivan.ici_uaa@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail('ivan.ici_uaa@hotmail.com', $subject, $message, $headers);
?>
