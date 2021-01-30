<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

foreach($_POST as $key=>$value) {
  changeData($key, $value);
}

function changeData($key, $value) {
  global $mysqli;
  
  $id = $_SESSION['id'];
  
  if( empty($key) or empty($value)) {
    exit("Поля не заполнены");
  }
 
  $key = htmlspecialchars( trim($key) );
  $value = htmlspecialchars( trim($value) );
  
  $restrictedKeys = ['id', 'login', 'password'];
  
  if( in_array($key, $restrictedKeys)) {
    exit("айайай");
    
  }
  
  $result = $mysqli->query("UPDATE `observer` SET `$key`='$value' WHERE `id`='$id'");
 
  if($result) {
    $_SESSION[$key] = $value;
    exit("ok");
  } else {
   exit("Не удалось обновить данные");
  }
  
}
?>