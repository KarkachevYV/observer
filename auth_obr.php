<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

$login = htmlspecialchars( trim($_POST['login']) );
$pass = htmlspecialchars( trim($_POST['pass']) );

if (empty($login) or empty($pass) ) {
  exit("Не все поля заполнены!");
}

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();

if( isset($result) and password_verify($pass, $result['pass']) ) {
  $_SESSION['id'] = $result['id'];
  $_SESSION['login'] = $result['login'];
  $_SESSION['lastname'] = $result['lastname'];
  $_SESSION['name'] = $result['name'];
  $_SESSION['patronymic'] = $result['patronymic'];
  $_SESSION['birthday'] = $result['birthday'];
  $_SESSION['mobilephone'] = $result['mobilephone'];
  $_SESSION['mailaddress'] = $result['mailaddress'];
  $_SESSION['pollingstation'] = $result['pollingstation'];
  exit("ok");
} else {
  exit("Неверный логин или пароль! А ВЫ зарегистрированы?");
}





