<?php
abstract class Model {

  protected $userID;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $role;

  public function __construct() {
    //we will be revisiting this
  }

  public function __set($name, $value) {

  }

  public function __get($name) {

  }

  public function __destruct() {

  }

}

?>
