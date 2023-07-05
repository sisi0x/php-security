<?php 
// ####################
// code not fix
//######################
// session_start();
// $_SESSION['user_id'] = 1 ;

// $db =  new PDO('mysql:host=127.0.0.1;dbname=CSRF','root','');
?>


<?php 
// ####################
// code fix
//######################
session_start();

$_SESSION['user_id'] = 1 ;


$db =  new PDO('mysql:host=127.0.0.1;dbname=CSRF','root','');


// // Chack if the METHOd POST not Get
// if($_SERVER["REQUSET_METHOD"] === "POST"){
//     //Chack the token 
//     if(!isset($_POST["token"]) || ($_POST["token"] !== $_SESSION["token"])){
        
//         die("Invalid token");
        
//     }
// }


$_SESSION['token']=bin2hex(random_bytes(32));

?>
