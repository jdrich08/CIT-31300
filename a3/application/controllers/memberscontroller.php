<?php

class MembersController extends Controller{

	public $membersObject;

   	public function view($uID){

		$this->membersObject = new Members();
		$post = $this->membersObject->getUser($uID);
	  	$this->set('user',$user);

   	}

	public function defaultTask(){

		$this->membersObject = new Members();
		$users = $this->membersObject->getAllUsers();
		$this->set('title', 'The Default Users View');
		$this->set('users',$users);

	}


}
