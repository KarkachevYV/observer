<?php
class User {
  private $id;
  private $login;
  private $lastname;
  private $name;
  private $patronymic;
  private $birthday;
  private $gender;
  private $phone;
  private $email;
  private $passport;
  private $issued;
  private $dataofissue;
  private $thecode;
  private $placeofbirth;
  private $registered;
  private $street;
  private $hourse;
  private $body;
  private $flat;
  private $ofregistration; 
  private $pollingstation;
  
  public function __construct($id, $login, $lastname, $name, $patronymic, $birthday, $gender, $phone, $email, $passport, $issued, $dataofissue, $thecode, $placeofbirth, $registered, $street, $hourse, $body, $flat, $ofregistration, $pollingstation) {
    
    $this->login = $login;
    $this->lastname = $lastname;
    $this->name = $name;
    $this->patronymic = $patronymic;
    $this->birthday = $birthday;
    /*$allowed = ['М', 'Ж'];
    if (!in_array($gender, $allowed)) {
      return;
    } */
    $this->gender = $gender;
    $this->phone = $phone;
    $this->email = $email;
    $this->passport = $passport;
    $this->issued = $issued;
    $this->dataofissue = $dataofissue;
    $this->thecode = $thecode;
    $this->placeofbirth = $placeofbirth;
    $this->registered = $registered;
    $this->street = $street;
    $this->hourse = $hourse;
    $this->body = $body;
    $this->flat = $flat;
    $this->ofregistration = $ofregistration;
    $this->pollingstation = $pollingstation;
  }
  
  public function setGender($gender) {
    $allowed = ['М', 'Ж'];
    if (!in_array($gender, $allowed)) {
      return;
    }
    $this->gender =$gender;
  }

  public function __get($property) { //$vasya->login
    
    if ($property == "password") {
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
?>