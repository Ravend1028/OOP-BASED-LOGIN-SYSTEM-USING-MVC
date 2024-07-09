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
    // RUN ALL VALIDATIONS HERE
    // IF NO ERRORS, THEN RUN MODEL QUERY TO INSERT
  }

  // LIST OF VALIDATIONS HERE:

}

?>