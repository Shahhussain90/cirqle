<?php
session_start();
include "connection.php";
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
// require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
function sendMail($full_name,$email){
  include 'PHPMailer\Exception.php';
  include 'PHPMailer\SMTP.php';
include 'PHPMailer\PHPMailer.php';

$mail = new PHPMailer(true);


try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'shahhussain123.rizvi@gmail.com';                     //SMTP username
    $mail->Password   = 'oexu qmkq gvpd laty';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('shahhussain123.rizvi@gmail.com', 'cirqle');
    $mail->addAddress($email, $full_name);     //Add a recipient

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Message received';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    return true;
    echo '<script>alert("Thank you for submitting the form")</script>';
} catch (Exception $e) {
  return false;
}
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = htmlspecialchars($_POST['full_name']);
    $phone_number = filter_var($_POST['phone_number'], FILTER_SANITIZE_NUMBER_INT);
    $message = $_POST['message']; 
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address";
        exit;
    }

    $query = "INSERT INTO `customer_messages`(`full_name`, `phone_number`, `email`, `message`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "siss", $full_name, $phone_number, $email, $message);
    mysqli_stmt_execute($stmt);

    $query2 = "SELECT * FROM `customer_messages` WHERE `full_name`= '$full_name' AND `email`= '$email'";
    mysqli_query($con,$query2) && sendMail($full_name,$email);
    

    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo '<script>alert("Thank you for submitting the form")</script>';
        header("location:index.php");
        exit; // Added exit to prevent further execution
    } else {
        echo "Error inserting data: " . mysqli_error($con);
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($con);
   
}

?>








