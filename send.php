<?phpcredits()
$to='labankulubasi@gmail.com';
$subject='test email';
$message="Hellohere\n\nThisisanew email from kulubasi";
$headers= "From: lkulubasi@gmail.com\r\nReply-To: lkulubasi@gmail.com";
$mail_sent=mail($to, $subject, $message, $headers);

if($mail_sent==true){
	echo "Mail has been sent";
}

else{
	echo "Mail Failed to go";
}



?>