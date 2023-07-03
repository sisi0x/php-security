<?php
// ####################
// code not fix
//######################
// require 'connect.php';

// $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
// $query->execute([
//   'user_id' => $_SESSION['user_id'],
// ]);
// ?>

// <?php 

####################
// code fix
######################

require 'connect.php';

if($_SERVER['REQUEST_METHOD'] !== 'POST'){

  die('Invalid operation');

}
if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){
        
  die("Invalid token");

}
$query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
$query->execute([
  'user_id' => $_SESSION['user_id'],
]);
 ?>

