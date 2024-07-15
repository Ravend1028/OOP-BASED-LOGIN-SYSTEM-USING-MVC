<?php

  class SignupController extends SignupModel {
    private $username;
    private $email;
    private $firstname;
    private $lastname;
    private $password;
    private $repassword;

    public function __construct($username, $email, $firstname, $lastname, $password, $repassword) {
      $this->username = $username;
      $this->email = $email;
      $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->password = $password;
      $this->repassword = $repassword;
    }

    public function signupUser() {
      if($this->emptyInput() == false) {
        header('location: ../index.php?error=emptyInput');
        exit();
      }

      if($this->invalidEmail() == false) {
        header('location: ../index.php?error=invalidEmail');
        exit();
      }

      if($this->pwdMatch() == false) {
        header('location: ../index.php?error=pwdNotMatch');
        exit();
      }

      if($this->uidTakenCheck() == false) {
        header('location: ../index.php?error=usernameTaken');
        exit();
      }

      $this->setUser($this->username, $this->email, $this->firstname, $this->lastname, $this->password);
    }

    private function emptyInput() {
      $result = true;

      if(empty($this->username) || empty($this->email) || empty($this->firstname) || empty($this->lastname)
      || empty($this->password) || empty($this->repassword)) {
        $result = false;
      } 

      return $result;
    }

    private function invalidEmail() {
      $result = true;

      if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
      }

      return $result;
    }

    private function pwdMatch() {
      $result = true;

      if($this->password !== $this->repassword) {
        $result = false;
      } 
      
      return $result;
    }

    private function uidTakenCheck() {
      $result = true;

      if(!$this->checkUser($this->username, $this->email)) {
        $result = false;
      } 

      return $result;
    }
  }

?>