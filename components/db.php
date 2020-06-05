<?php
$dbhost = "localhost";
$dbuser = "pchel0k_0380"; //root
$dbpass = "%b5O5O&I"; //root
$dbname = "pchel0k_0380";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}