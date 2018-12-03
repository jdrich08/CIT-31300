<?php

class AjaxController extends Controller{

		protected $postObject;
		protected $commentObject;
    protected $userObject;
    protected $categoryObject;


	public function index(){
		$this->set("response","Invalid Request");
	}

    public function get_post_content() {
        $this->postObject = new Post();
        $post = $this->postObject->getPost($_GET['pID']);
        $this->set('response',$post['content']);
    }

		public function getComments() {
			$pID = $_POST['pID'];
			$this->commentObject = new Comment();
			$comments = $this->commentObject->getComments($pID);
			$this->set('comments',$comments);
		}

		public function deleteComment() {
			$cID = $_POST['comID']
			$this->commentObject = new Comment();
			$message = $this->commentObject->deleteComment($cID);
			$this->set('response',$message);
		}

		public function addComment() {
			$this->commentObject = new Comment();
			$message = $this->commentObject->postComment($_POST['data']);
			$this->set('response',$message);
		}

		public function addPost() {

		}

		public function deletePost() {

		}

		public function deleteUser() {

		}

}

?>
