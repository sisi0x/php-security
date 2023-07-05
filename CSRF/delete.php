<?php
// ####################
// code not fix
//######################

/*

# Here no check for anythink ,
# Here you can see the lab for Example  (
https://portswigger.net/web-security/csrf/lab-no-defenses 
)

*/

// require 'connect.php';
// $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
// $query->execute([
//   'user_id' => $_SESSION['user_id'],
// ]);
// ?>

<?php 

####################
// code fix
######################

/*

To fix The vulnerable we nade :  
1- create token and check the parameter send be REQUEST METHOD
2- must The token  be strong , and the length must be no less than 16 And must gev the User new token in every requst
2- we nade check The REQUEST_METHOD only POST 


require 'connect.php';

/*

# Here you will see The token ,then you should put a comment (//)   
   
*/
 
//  echo $_SESSION['_token']=bin2hex(random_bytes(32)); 


/*
# Here The developer check The token ,but forget check the REQUEST METHOD
# Here you can see the lab for  Example ( https://portswigger.net/web-security/csrf/bypassing-token-validation/lab-token-validation-depends-on-request-method )
*/

if($_SERVER['REQUEST_METHOD'] !== 'POST'){

  die('Invalid METHOD');

}


 /*
 # Here The developer check The token with SESSION
*/

 if(!isset($_POST['token']) || ($_POST['token'] !== $_SESSION['token'])){
        
  die("Invalid token");
  die("Missing parameter token");

}
$query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
$query->execute([
  'user_id' => $_SESSION['user_id'],
]);
 ?>
