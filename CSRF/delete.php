<?php
// ####################
// code not fix
//######################

// require 'connect.php';
/*

 No in check for Token or METHOD 

*/
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


 /*
 Here to check Method only Post not Get becoes on labe portsweger you can pybass
 The check 
 you can see the labe from here
*/


if($_SERVER['REQUEST_METHOD'] !== 'POST'){

  die('Invalid operation');

}

/*



*/
if(!isset($_POST['_token']) || ($_POST['_token'] !== $_SESSION['_token'])){
        
  die("Invalid token");

}
$query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
$query->execute([
  'user_id' => $_SESSION['user_id'],
]);
 ?>

