<?
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
/*var_dump($_POST);*/
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');
//var_dump($_POST);
foreach($_POST as $key=>$value) {
  changeData($key, $value);
}

function changeData($key, $value) {
  global $mysqli;
  //var_dump($mysgli);
  //echo $key . "=>" . $value;
  $id =$_SESSION['id'];
  
  if( empty($key) or empty($value)) {
    exit("Поля не заполнены");
  }
 
  $key = htmlspecialchars( trim($key) );
  $value = htmlspecialchars( trim($value) );
  
  $restrictedKeys = ['id', 'login', 'pass'];
  
  if( in_array($key, $restrictedKeys)) {
    exit("айайай");
    
  }
  
  $result = $mysqli->query("UPDATE `users` SET `$key`='$value' WHERE `id`='$id'");
  //var_dump($result);
  if(!$result) {
    exit("Не удалось обновить данные");
  } else {
    $_SESSION[$key] = $value;
    exit("ok");
  }
  
  
}