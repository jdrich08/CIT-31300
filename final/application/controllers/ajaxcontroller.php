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

		public function deleteComment() {
			$this->commentObject = new Comment();
			$response = $this->commentObject->deleteComment($_GET['commentID']);
			$this->set('response',$response);
		}

}

?>
