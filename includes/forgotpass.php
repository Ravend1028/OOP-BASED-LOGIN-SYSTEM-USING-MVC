<?php include 'autoloader.php'; ?>

<?php

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../phpmailer/src/Exception.php';
  require '../phpmailer/src/PHPMailer.php';
  require '../phpmailer/src/SMTP.php';

  session_start();

  if(isset($_POST['send_otp'])) {
    $email = $_POST['email'];
    
    if (empty($email)) {
      header('location: ../views/forgotpassForm.php?error=EmailIsRequired');
      exit();
    }
  
    // Generate OTP
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = (string) $otp; // Store OTP as string
    $_SESSION['otp_email'] = $email;
  
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $app_password = getenv('APP_PASSWORD');
  
    try {
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com';  // Replace with your SMTP server
      $mail->SMTPAuth   = true;
      $mail->Username   = 'ravendavid.rd30@gmail.com';  // Your email address
      $mail->Password   = $app_password;  // Your email password or app-specific password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->Port       = 465;
  
      //Recipients
      $mail->setFrom('ravendavid.rd30@gmail.com', 'Login System');
      $mail->addAddress($email);
  
      //Content
      $mail->isHTML(true);
      $mail->Subject = 'Your OTP Code';
      $mail->Body    = 'Your OTP code is <b>' . $otp . '</b>';
      $mail->AltBody = 'Your OTP code is ' . $otp;
  
      $mail->send();
      header('location: ../views/forgotpassForm.php?noError=OTPSent');
      exit();
    } catch (Exception $e) {
      error_log("Mailer Error: " . $mail->ErrorInfo);  // Log error message
      header('location: ../views/forgotpassForm.php?error=CouldNotSendOTP');
      exit();
    }
  }
  
  if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $newPassword = $_POST['newPassword'];
    $otp = $_POST['otp'];
  
    if(empty($otp)) {
      header('location: ../views/forgotpassForm.php?error=OTPIsRequired');
      exit();
    }
  
    if($otp !== $_SESSION['otp'] || $email !== $_SESSION['otp_email']) {
      header('location: ../views/forgotpassForm.php?error=InvalidOTP');
      exit();
    }
  
    // Clear OTP session
    unset($_SESSION['otp']);
    unset($_SESSION['otp_email']);
  
    // Verify OTP and update user password
    $forgotpassController = new ForgotpassController($email, $newPassword);
    $forgotpassController->updateUser();
  
    header('location: ../views/forgotpassForm.php?error=none');
    exit();
  }

?>