<?php
$dbhost = "localhost";
$dbuser = "pchel0k_observer"; //root
$dbpass = "deS&0OTC"; //root
$dbname = "pchel0k_observer";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$mysqli->set_charset("utf-8");

if ($mysqli->connect_error) {
  die("Не удалось подключиться к БД ".$mysqli->connect_error);
}