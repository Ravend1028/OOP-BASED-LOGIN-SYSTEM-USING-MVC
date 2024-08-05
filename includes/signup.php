<?php include 'autoloader.php'; ?>

<?php

 if(isset($_POST['submit'])) {
  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $recaptcha_secret = getenv('SECRET_KEY');
  $recaptcha_response = $_POST['g-recaptcha-response'];

  // Make a POST request to the Google reCAPTCHA API
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret}&response={$recaptcha_response}");
  $response_keys = json_decode($response, true);
  
  if (intval($response_keys["success"]) !== 1) {
    // reCAPTCHA validation failed
    header('Location: ../views/signupForm.php?error=recaptchaRequired');
    exit();
  }

  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];

  $signupController = new SignupController($username, $email, $firstname, $lastname, $password, $repassword);
  $signupController->signupUser();

  header('location: ../views/signupForm.php?error=none');
  exit();
  }

?>