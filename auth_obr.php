<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

$login = htmlspecialchars( trim($_POST['login']) );
$pass = htmlspecialchars( trim($_POST['password']) );

if (empty($login) or empty($pass) ) {
  exit("Введите: login и password!");
}

$result = $mysqli->query("SELECT * FROM `observer` WHERE `login`='$login'")->fetch_assoc();

/*exit( var_dump($result));*/

if( isset($result) and password_verify($pass, $result['password']) ) {
  $_SESSION['id'] = $result['id'];
  $_SESSION['login'] = $result['login'];
  $_SESSION['lastname'] = $result['lastname'];
  $_SESSION['name'] = $result['name'];
  $_SESSION['patronymic'] = $result['patronymic'];
  $_SESSION['birthday'] = $result['birthday'];
  $_SESSION['gender'] = $result['gender'];
  $_SESSION['phone'] = $result['phone'];
  $_SESSION['email'] = $result['email'];
  $_SESSION['passport'] = $result['passport'];
  $_SESSION['issued'] = $result['issued'];
  $_SESSION['dataofissue'] =$result['dataofissue'];
  $_SESSION['thecode'] = $result['thecode'];
  $_SESSION['placeofbirth'] = $result['placeofbirth'];
  $_SESSION['registered'] = $result['registered'];
  $_SESSION['street'] = $result['street'];
  $_SESSION['hourse'] = $result['hourse'];
  $_SESSION['body'] = $result['body'];
  $_SESSION['flat'] = $result['flat'];
  $_SESSION['ofregistration'] = $result['ofregistration'];
  $_SESSION['pollingstation'] = $result['pollingstation'];
  exit("ok");
} else {
  exit("Неверный логин или пароль! А ВЫ зарегистрированы?");
}

?>





