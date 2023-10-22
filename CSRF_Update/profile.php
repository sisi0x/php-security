<?php
// ####################
// code not fix
//######################

/*
# Here no check for anythink ,
*/

// require 'connect.php';
// $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
// $query->execute([
//   'user_id' => $_SESSION['user_id'],
// ]);



####################
// code fix
######################
session_start();
//require 'connect.php';



    if(isset($_SERVER['REQUEST_METHOD']) == 'POST')
    {
      echo "Valied Mthoed.... (: <br>";
      if(isset($_POST['CSRF']) === $_SESSION['TOKEN']){
        echo "Valied TOKEN.... (: <br>";

        
        echo "<br>"; 
        echo "<br>";
        echo "Account deleted successfully";
        $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
        $query->execute(['user_id' => $_SESSION['user_id']]);
      }else{
        die("Invailed Token");
      }
      
    }
    
        ?>
