<?php
$db['db_host'] = 'localhost';
$db['db_user'] = 'aakash';
$db['db_pass'] = 'root';
$db['db_name'] = 'userinfogen';

foreach($db as $key => $value){
  define(strtoupper($key), $value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>
