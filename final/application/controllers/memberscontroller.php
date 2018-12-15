<?php

class MembersController extends Controller{

	public $userObject;

   	public function users($uID){
        $this->userObject = new Users();
				$user = $this->userObject->getUser($uID);
	  		$this->set('user',$user);
   	}

	public function index(){
        $this->userObject = new Users();
		$users = $this->userObject->getAllUsers();
		$this->set('title', 'The Members View');
		$this->set('users',$users);
		$this->set('first_name',$first_name);
		$this->set('last_name',$last_name);
		$this->set('email',$email);
	}

	public function profile(){
		$this->userObject = new Users();

    $password = $_POST['password'];
		if($password != null) {
			$passhash = password_hash($password,PASSWORD_DEFAULT);
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'password'=>$passhash,'uID'=>$_POST['uID']);
			$this->userObject->updateUser($data);
			$this->set('message', 'Profile Updated.');
		}
		else {
			$data = array('first_name'=>$_POST['first_name'],'last_name'=>$_POST['last_name'],'email'=>$_POST['email'],'uID'=>$_POST['uID']);
			$this->userObject->updateUser($data);
			$this->set('message', 'Profile Updated.');
		}


	}

}

?>
