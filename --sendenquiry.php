<?
include('class.phpmailer.php');

$firstname 			= $_POST['txtName'];
$email 				= $_POST['txtEmail'];
$drp_Solutions     		= $_POST['drp_Solutions'];
 

$name = $firstname;

$from = "pnabera301@gmail.com";
$from_name = $firstname;  
$to = "pnabera301@gmail.com"; 
$to_name = $name;  


$subject = "Enquiry Mail From Website - Home Page"; //subject of email

$body .='		 Name: <b>'.$firstname.' </b><br><br>
				 Email: <b>'.$email.' </b><br><br>
				 Stone Type: <b>'.$drp_Solutions.' ' ;

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