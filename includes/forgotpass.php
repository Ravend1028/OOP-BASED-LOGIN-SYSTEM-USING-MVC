<?php include 'autoloader.php'; ?>

<?php

 if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $newPassword = $_POST['newPassword'];

  $forgotpassController = new ForgotpassController($username, $email, $newPassword);
  $forgotpassController->updateUser();

  header('location: ../views/forgotpassForm.php?error=none');
  exit();
  }

?>