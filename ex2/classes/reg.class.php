<?
class reg extends user {

  public function __construct($level, $id) {
    parent::__construct($level);
    $this->user_id = $id;
    $this->user_type = '1';
  }

  public function __set($name, $value) {
    $this->$name = $value;
    return;
  }

  public function __get($name) {
    return $this->$name;
  }

  public function __destruct() {

  }

}
?>
