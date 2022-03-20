<?php  
include "conn.php";
if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$update = true;
		$sql = "SELECT * FROM userlogin WHERE id=$id";
		$record = mysqli_query($conn, $sql);

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['username'];
		
			$email = $n['email'];
			
		}

	}
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\htdocs\email\vendor\autoload.php';
$mail = new PHPMailer(TRUE);
try {
   
   $mail->setFrom('aryaltrylowchan@gmail.com', 'System');
   $mail->addAddress($email, 'Customer');

   $mail->Subject = 'Order Completed';
   $mail->Body = 'Dear '.$name.',

   		Your order has been completed you will be receiving it soon.';
   
   /* SMTP parameters. */
   
   /* Tells PHPMailer to use SMTP. */
   $mail->isSMTP();
   
   /* SMTP server address. */
   $mail->Host = 'smtp.elasticemail.com';

   /* Use SMTP authentication. */
   $mail->SMTPAuth = TRUE;
   
   /* Set the encryption system. */
   $mail->SMTPSecure = 'tls';
   
   /* SMTP authentication username. */
   $mail->Username = 'aryaltrylowchan@gmail.com';
   
   /* SMTP authentication password. */
   $mail->Password = '995F98168CDB443677615E2149A370B79932';
   
   /* Set the SMTP port. */
   $mail->Port = 2525;
   
   /* Finally send the mail. */
   
   if($mail->send()){
   	echo "Success";


   }


}
catch (Exception $e)
{
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   echo $e->getMessage();
}

?>
