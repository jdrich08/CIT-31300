<?php
class controller {

  public $load;
  public $user;

  function __construct() {

    $this->load = new Load();
    $this->user = new User();
    $this->home();

  }

  function home() {

    //creates User
    $this->model->userID = 'jrich';
    $this->model->firstname = 'Jeremy';
    $this->model->lastname = 'Rich';
    $this->model->email = 'jedrich@iu.edu';
    $this->model->role = 'Admin';

    //talks to user
    $data = $this->user->getName();

    //talks to view
    $this->load->view('view.php',$data);

  }

}
?>
