<?
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

$login = $_POST['login'];
$pass = $_POST['pass'];
$passRepeat = $_POST['pass_repeat'];
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$birthday =$_POST['birthday'];

$login = trim($login);
$lastname = trim($lastname);
$name = trim($name);
$birthday =trim($birthday);

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$passRepeat = htmlspecialchars($passRepeat);
$lastname = htmlspecialchars($lastname);
$name = htmlspecialchars($name);
$birthday = htmlspecialchars($birthday);

if (empty($login) or empty($pass) or empty($passRepeat) or empty($lastname)
or empty($name) or empty($birthday)) {
  exit("Не все поля заполнены");
}

if ($pass != $passRepeat) {
  exit("Пароли не совпадают");
}

if (preg_match('/^[0-9a-zA-Z!@#$%^&*]{5,}$/',$pass) === 0) {
  exit("Пароль может содержать  латинские буквы, цифры и спец.символы !@#$%^&*, а также должен быть не меньше 5 символов в длину");
}

$pass = password_hash($pass, PASSWORD_BCRYPT);

$result = $mysqli->query("SELECT * FROM `users` WHERE `login`='$login'")->fetch_assoc();

if (isset($result) ) {
  exit("Такой пользователь уже существует, Вам следует Войти");
}

$result = $mysqli->query("INSERT INTO `users`(`login`, `pass`, `lastname`, `name`, `birthday`) VALUES ('$login', '$pass', '$lastname', '$name', '$birthday')")->fetch_assoc();

if(!$result) {
  exit("Не удалось добавить пользователя");
} else {
  $result = $mysqli->query("SELECT `id` FROM `users` WHERE `login`='$login'")->fetch_assoc();
  $_SESSION['id'] = $result['id'];
  $_SESSION['login'] = $result['login'];
  $_SESSION['name'] = $result['name'];
  $_SESSION['lastname'] = $result['lastname'];
  $_SESSION['birthday'] = $result['birthday'];  
    exit("ok");
}




