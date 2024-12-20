<?php

  class LoginController extends LoginModel {
    private $username;
    private $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }

    public function loginUser() {
      if($this->emptyInput() == false) {
        header('location: ../views/loginForm.php?error=emptyInput');
        exit();
      }

      $this->getUser($this->username, $this->password);
    }

    private function emptyInput() {
      $result = true;

      if(empty($this->username) || empty($this->password)) {
        $result = false;
      } 

      return $result;
    }
  }

?>