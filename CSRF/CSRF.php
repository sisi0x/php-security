<?php
// ####################
// code not fix
//######################

/*
# Here no check for anythink ,
*/

require 'connect.php';
// $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
// $query->execute([
//   'user_id' => $_SESSION['user_id'],
// ]);



####################
// code fix
######################

/*

To fix The vulnerable we nade :  
1- create token and check the parameter with REQUEST METHOD
2- must The token  be strong , and the length must be no less than 16 And must gev the User new token in every requst
2- we nade check The REQUEST_METHOD only POST 

/*

# Here you will see The token ,then you should put a comment (//)   
   
*/
 
//  echo $_SESSION['_token']=bin2hex(random_bytes(32)); 
    
/*
    # Check the request method 
    # If the requset method POTS ,display a success message 
    # Otherwise , display an error message and exit
*/
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
      echo "Valied Mthoed.... (: ";
/*
    # Check the token
    # If the token is found , display a success message  
    # Otherwise, display an error message and exit
*/
          if (isset($_POST["token"]) == "token") 
          {
              echo "<br>";
              echo "vailed premeter .... (: ";
              
/*

    # Check the token length
    # The length must be at least 64 characters
    # If the token length is valid,update the user status and display a success message 
    # Otherwise, display an error message and exit

    */  
            if (strlen($_POST['token']) == 65) 
            {
              
              echo "<br>"; 
                echo strlen($_POST['token']);

                    echo "<br>";
                    echo "valid token length";
                    echo "<br>";
                    echo "Account deleted successfully";
                    $query = $db->prepare("UPDATE users SET status = 0 WHERE id = :user_id");
                    $query->execute(['user_id' => $_SESSION['user_id']]);
            } else {
                  echo "<br>"; 
                  // herer you shoud use the die becaes if you ues echo you gest have hem  message error , but the attack successfully
                 die("Error: Invalid token length");
                }
              
          }else{
                echo "<br>";
                die("Invalied Premeter...!");
          }
      
    }else{
             echo "<br>";
              die("Invailed Mthoed....!");
          }
        
    
        ?>
