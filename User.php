<?
class User {
  private $id;
  private $login;
  private $name;
  private $lastname;
  private $birthday;
  
  public function __construct($id, $login, $name, $lastname, $birthday) {
    $this->id = $id;
    $this->login = $login;
    $this->name = $name;
    $this->lastname = $lastname;
    $this->birthday = $birthday;
  }
  
  public function __get($property) { //$vasya->login
    
    if ($property == "pass") {
      return;//еслинужно запретить изменение pass
    }
    if ($property == "birthday") {
      $birthday = explode("-", $this->birthday);
      $birthday = array_reverse($birthday);
      return join(".", $birthday);
    }
    return $this->$property;
  }
  public function getFullName() {
    return $this->lastname . " " . $this->name;
    
    
  }
}