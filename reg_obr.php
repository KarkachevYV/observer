<?php
session_start();
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
header('Content-Type: text/html; charset=utf-8');
require_once('components/db.php');

$login = $_POST['login'];
$pass = $_POST['password'];
$passRepeat = $_POST['password_repeat'];
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$patronymic = $_POST['patronymic'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$passport = $_POST['passport'];
$issued = $_POST['issued'];
$dataofissue = $_POST['dataofissue'];
$thecode = $_POST['thecode'];
$placeofbirth = $_POST['placeofbirth'];
$registered = $_POST['registered'];
$street = $_POST['street'];
$hourse = $_POST['hourse'];
$body = $_POST['body'];
$flat = $_POST['flat'];
$ofregistration = $_POST['ofregistration'];
$pollingstation =$_POST['pollingstation'];

$login = trim($login);
$lastname = trim($lastname);
$name = trim($name);
$patronymic = trim($patronymic);
$birthday = trim($birthday);
$gender = trim($gender);
$phone = trim($phone);
$email = trim($email);
$passport = trim($passport);
$issued = trim($issued);
$dataofissue = trim($dataofissue);
$thecode = trim($thecode);
$placeofbirth =trim($placeofbirth);
$registered = trim($registered);
$street = trim($street);
$hourse = trim($hourse);
$body = trim($body);
$flat = trim($flat);
$ofregistration = trim($ofregistration);
$pollingstation =trim($pollingstation);

$login = htmlspecialchars($login);
$pass = htmlspecialchars($pass);
$passRepeat = htmlspecialchars($passRepeat);
$lastname = htmlspecialchars($lastname);
$name = htmlspecialchars($name);
$patronymic = htmlspecialchars($patronymic);
$birthday = htmlspecialchars($birthday);
$gender = htmlspecialchars($gender);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$passport = htmlspecialchars($passport);
$issued = htmlspecialchars($issued);
$dataofissue = htmlspecialchars($dataofissue);
$thecode = htmlspecialchars($thecode);
$placeofbirth = htmlspecialchars($placeofbirth);
$registered = htmlspecialchars($registered);
$street = htmlspecialchars($street);
$hourse = htmlspecialchars($hourse);
$body = htmlspecialchars($body);
$flat = htmlspecialchars($flat);
$ofregistration = htmlspecialchars($ofregistration);
$pollingstation = htmlspecialchars($pollingstation);

if (empty($login) or empty($pass) or empty($passRepeat) or empty($lastname) or empty($name) or empty($gender) or empty($phone) or empty($email) ) {
  exit("Не все поля заполнены");
}

if ($pass != $passRepeat) {
  exit("Пароли не совпадают");
}

if (preg_match('/^[0-9a-zA-Z!@#$%^&*]{5,}$/',$pass) === 0) {
  exit("Пароль может содержать  латинские буквы, цифры и спец.символы !@#$%^&*, а также должен быть не меньше 5 символов в длину");
}

$pass = password_hash($pass, PASSWORD_BCRYPT);

$result = $mysqli->query("SELECT * FROM `observer` WHERE `login`='$login'")->fetch_assoc();

if (isset($result) ) {
  exit("Такой пользователь уже существует, Вам следует Войти");
}

$result = $mysqli->query("INSERT INTO `observer`(`login`, `password`, `lastname`, `name`, `birthday`, `gender`, `phone`, `email`) VALUES ('$login', '$pass', '$lastname', '$name', '$birthday', '$gender', '$phone', '$email')");


if(!$result) {
  exit("Не удалось добавить пользователя");
} else {
  $result = $mysqli->query("SELECT `id` FROM `observer` WHERE `login`='$login'")->fetch_assoc();
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
  $_SESSION['issued'] = $resul['issued'];
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
}
?>



