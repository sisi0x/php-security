<?php

// mysqli_connect(); 4 parmeters=>host,user,pass,dbname -1 return=>connectionstaus

$host="localhost";
$user_name="sisi_db";
$password="147258369";
$DB_name="test";

$connection=mysqli_connect($host,$user_name,$password,$DB_name);
// if($connection)echo "connected";
// else die( mysqli_connect_error());
if(!$connection) die("database error");
echo "<br> data here <br>";




?>