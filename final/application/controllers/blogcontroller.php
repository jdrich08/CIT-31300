<?php

class BlogController extends Controller{

	public $postObject;
	public $commentObject;

  public function post($pID){
      $this->postObject = new Post();
			$post = $this->postObject->getPost($pID);
			$this->commentObject = new Comment();
			$comments = $this->commentObject->getComments($pID);
	  	$this->set('post',$post);
			$this->set('comments',$comments);
			$this->set('task', 'addComment');
  }

	public function index(){
			$this->postObject = new Post();
			$posts = $this->postObject->getAllPosts();
			$this->set('title', 'The Default Blog View');
			$this->set('posts',$posts);
	}

	public function addComment(){
		$this->commentObject = new Comment();
		$data = array('commentText'=>$_POST['commentText'],'date'=>$_POST['date'],'postID'=>$_POST['pID'],'uID'=>$_POST['uID']);
		$result = $this->commentOject->postComment($data);
		$this->set('message',$result);
	}

}

?>
