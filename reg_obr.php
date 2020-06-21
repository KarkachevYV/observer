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
$patronymic = $_POST['patronymic'];
$birthday =$_POST['birthday'];
$mobilephone =$_POST['mobilephone'];
$mailaddress =$_POST['mailaddress'];
$pollingstation =$_POST['pollingstation'];

$login = trim($login);
$lastname = trim($lastname);
$name = trim($name);
$patronymic = trim($patronymic);
$birthday =trim($birthday);
$mobilephone =trim($mobilephone);
$mailaddress =trim($mailaddress);
$pollingstation =trim($pollingstation);

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$passRepeat = htmlspecialchars($passRepeat);
$lastname = htmlspecialchars($lastname);
$name = htmlspecialchars($name);
$patronymic = htmlspecialchars($patronymic);
$birthday = htmlspecialchars($birthday);
$mobilephone = htmlspecialchars($mobilephone);
$mailaddress = htmlspecialchars($mailaddress);
$pollingstation = htmlspecialchars($pollingstation);

if (empty($login) or empty($pass) or empty($passRepeat) or empty($lastname) or empty($name) or empty($patronymic) or empty($birthday) or empty($mobilephone) or empty($mailaddress) or empty($pollingstation)) {
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

$result = $mysqli->query("INSERT INTO `users`(`login`, `pass`, `lastname`, `name`, `patronymic`, `birthday`, `mobilephone`, `mailaddress`, `pollingstation`) VALUES ('$login', '$pass', '$lastname', '$name', '$patronymic', '$birthday', '$mobilephone', '$mailaddress', '$pollingstation')");
$result->fetch_assoc();

if(!$result) {
  exit("Не удалось добавить пользователя");
} else {
  $result = $mysqli->query("SELECT `id` FROM `users` WHERE `login`='$login'")->fetch_assoc();
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
}




