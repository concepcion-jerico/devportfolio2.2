<?php 


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../../vendor/autoload.php';



$name = $_POST['name'];
$email = $_POST['email'];
$subject1 = $_POST['subject'];
$message = $_POST['message'];


// Send email notification to customer
// ==============================================================================


$mail = new PHPMailer(true); 
// Passing `true` enables exceptions

$staff_email = 'jconstorej@gmail.com';
$customer_email = 'concepcion.jerico@gmail.com';          //
$subject = 'Inquiry - Developer Portfolio';
$body = '<div style="text-transform:uppercase;">
            <h3>Message from: </h3>
            <h4>Name: '.$name.'</h4>
            <h4>Email: '.$email.'</h4>
            <h4>Subject: '.$subject1.'</h4>
            <p>Message: '.$message.'</p>
        </div>';
try {
    //Server settings
    $mail->SMTPDebug = 4;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $staff_email;                       // SMTP username
    $mail->Password = '@password123';                     // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($staff_email, 'MyPortfolio');
    $mail->addAddress($customer_email);  // Name is optional

    //Content
    $mail->isHTML(true);  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body = $body;

    // Route user to confirmation page


   
    header('refresh: 1.5 ; url = ../views/home.php?success');
    $mail->send();

   
    // header('location: ../views/home.php'); 
   


    // echo 'Message has been sent';

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

?>


	

 ?>