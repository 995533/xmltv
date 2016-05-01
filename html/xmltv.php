<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL | E_ERROR | E_WARNING);
header("X-Frame-Options: SAMEORIGIN");
//header("Content-Type: text/html; charset=utf-8");
mb_internal_encoding("UTF-8");
setlocale(LC_ALL, 'ru_RU.UTF-8', 'rus_RUS.UTF-8', 'Russian_Russia.UTF-8');
setlocale(LC_NUMERIC, 'C');
date_default_timezone_set('Europe/Moscow');

include("class/mysql.class.php");


$db = new MySQL(true, "xmltv", "localhost", "xmltv", "xmltvpassword");
if ($db->Error()) $db->Kill();


include("func.php");

$fileget = "https://www.teleguide.info/download/new3/xmltv.xml.gz";
var_dump(downloadFile ($fileget));

