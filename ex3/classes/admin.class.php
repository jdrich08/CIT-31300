<?
class admin extends user {

  public function __construct($level, $id) {
    parent::__construct($level);
    $this->user_id = $id;
    $this->user_type = '2';
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

  static function calc($a,$b) {
    return ($a + $b)*$a;
  }

}
?>
