<?php
class Comment extends Model{

    public function getComments($pID){

        $sql = 'SELECT c.commentID, c.commentText, c.date, c.postID, c.uID, u.first_name, u.last_name
                FROM comments c
                INNER JOIN users u ON u.uID = c.uID
                WHERE c.postID = ?
                ORDER BY c.date DESC';

        $results = $this->db->execute($sql, $pID);

        while ($row=$results->fetchrow()) {
            $comments[] = $row;
        }

        return $comments;
    }

    public function postComment($date, $uID, $pID){
      $data = array($date, $uID, $pID);
      $sql='INSERT INTO comments (commentText,date,postID,uID) VALUES (?,?,?,?)';
      $this->db->execute($sql,$data);
      $message = 'Comment added.';
      return $message;
    }

    public function deleteComment($commentID){
      $sql='DELETE FROM comments
            WHERE commentID = ?';
      $this->db->execute($sql,$commentID);
      $message = 'Comment deleted.';
      return $message;
    }

}

?>
