<?php
$DB_HOST = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'store_ms';

$mysql_conect = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

if($mysql_conect->connect_error){
  echo "Something is wrong";
}


?>