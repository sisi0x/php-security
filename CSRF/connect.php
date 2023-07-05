<?php 

session_start();
$_SESSION['user_id'] = 1 ;

$db =  new PDO('mysql:host=127.0.0.1;dbname=CSRF','root','');

?>
