<?
class User {
  private $id;
  private $login;
  private $lastname;
  private $name;
  private $patronymic;
  private $birthday;
  private $mobilephone;
  private $mailaddress;
  private $pollingstation;
  
  public function __construct($id, $login, $lastname, $name, $patronymic, $birthday, $mobilephone, $mailaddress, $pollingstation) {
    $this->id = $id;
    $this->login = $login;
    $this->lastname = $lastname;
    $this->name = $name;
    $this->patronymic = $patronymic;
    $this->birthday = $birthday;
    $this->mobilephone = $mobilephone;
    $this->mailaddress = $mailaddress;
    $this->pollingstation = $pollingstation;
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
    return $this->lastname . " " . $this->name . " " . $this->patronymic;
    
    
  }
}