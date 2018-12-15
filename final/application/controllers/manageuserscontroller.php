<?php

class ManageUsersController extends Controller{

	public $userObject;

  public function delete($uID){
	   $this->userObject = new Users();
	   $user = $this->userObject->deleteUser($uID);
		 $this->userObject = new Users();
 		 $users = $this->userObject->getAllUsers();
 		 $this->set('title', 'Manage Users');
 		 $this->set('users',$users);
  }

  public function approve($uID){
	   $this->userObject = new Users();
	   $user = $this->userObject->approveUser($uID);
		 $this->userObject = new Users();
 		 $users = $this->userObject->getAllUsers();
 		 $this->set('title', 'Manage Users');
 		 $this->set('users',$users);
  }

	public function index(){
		$this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'Manage Users');
		$this->set('users',$users);
	}

}

?>
