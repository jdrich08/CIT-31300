<?php
class Post extends Model{

	function getPost($pID){

		$sql =  'SELECT posts.*, categories.name, users.first_name, users.last_name
		FROM posts
		LEFT JOIN categories
		ON categories.categoryID = posts.categoryID
		LEFT JOIN users
		ON users.uID = posts.uID
		WHERE pID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($pID));

		$post = $results;

		return $post;

	}

	public function getAllPosts($limit = 0){

		if($limit > 0){

			$numposts = ' LIMIT '.$limit;
		}

		$sql =  'SELECT posts.*, categories.name, users.first_name, users.last_name
		FROM posts
		LEFT JOIN categories
		ON categories.categoryID = posts.categoryID
		LEFT JOIN users
		ON users.uID = posts.uID'.$numpost;

		// perform query
		$results = $this->db->execute($sql);

		while ($row=$results->fetchrow()) {
			$posts[] = $row;
		}

		return $posts;

	}

	public function addPost($data){

		$sql='INSERT INTO posts (title, categoryID, content, date) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'Post added.';
		return $message;

	}

	public function updatePost($data){
		$sql='UPDATE posts SET (title = ?, categoryID = ?, content = ?, date = ?) WHERE pID = ?';
		$this->db->execute($sql,$data);
		$message = 'Post updated.';
		return $message;
	}


}
