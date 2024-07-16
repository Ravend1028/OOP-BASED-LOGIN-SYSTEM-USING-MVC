<?php include 'autoloader.php'; ?>

<?php

 if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $repassword = $_POST['repassword'];

  $signupController = new SignupController($username, $email, $firstname, $lastname, $password, $repassword);
  $signupController->signupUser();

  header('location: ../views/signupForm.php?error=none');
  }

?>