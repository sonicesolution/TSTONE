<?
include('class.phpmailer.php');

$firstname 			= $_POST['txtName'];
$email 				= $_POST['txtEmail'];
$mobile     		= $_POST['txtMobileNo'];
$message 			= $_POST['txtMessage'];

$name = $firstname;

$from = "pnabera301@gmail.com";
$from_name = $firstname;  
$to = "pnabera301@gmail.com"; 
$to_name = $name;  


$subject = "Enquiry Mail From Website - Contact us"; //subject of email

$body .='		 Name: <b>'.$firstname.' </b><br><br>
				 Email: <b>'.$email.' </b><br><br>
				 Mobile: <b>'.$mobile.' </b><br><br>
				 Message: <b>'.$message.' </b><br><br>' ;

$Mailer = New PHPMailer;

$Mailer->From = $from;
$Mailer->FromName = $from_name;

$Mailer->AddAddress($to, $to_name);    

$Mailer->Subject = $subject;
$Mailer->ContentType = "text/html";
$Mailer->Body = $body;

if($Mailer->Send()) $direction = "thanks.html";
else  $direction =  "mailfailure.htm"; 		

header("Location: $direction");
exit;
?>