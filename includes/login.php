<?php include 'autoloader.php'; ?>

<?php

 if(isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $loginController = new LoginController($username, $password);
  $loginController->loginUser();

  header('location: ../index.php?error=none');
  }

?>