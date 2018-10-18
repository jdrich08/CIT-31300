<?php
class User extends Model{

	function getUser($uID){

		$sql =  'SELECT * FROM users WHERE uID = ?';

		// perform query
		$results = $this->db->getrow($sql, array($uID));

		$post = $results;

		return $post;

	}

  public function getAllUsers($limit = 0){

    if($limit > 0){

      $numusers = ' LIMIT '.$limit;
    }

    $sql =  'SELECT email, first_name, last_name FROM users'.$numposts;

    // perform query
    $results = $this->db->execute($sql);

    while ($row=$results->fetchrow()) {
      $users[] = $row;
    }

    return $users;

  }

	public function addUser($data){

		$sql='INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)';
		$this->db->execute($sql,$data);
		$message = 'User added.';
		return $message;

	}

}
