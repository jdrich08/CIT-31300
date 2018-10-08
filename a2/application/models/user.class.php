<?php
class User extends Model {

  public function __construct() {
    //we will be revisiting this
    parent::__construct();

  }

  public function __setAtrributes($name, $value) {
    $this->$name = $value;
  }

  public function __getName() {
      return array (
        $this->model->userID,
        $this->model->firstname,
        $this->model->lastname,
        $this->model->email,
        $this->model->role
      );
  }

  public function __destruct() {

  }

}


?>
