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
(Cross-Site Request Forgery) is a type of web application vulnerability that allows an attacker to execute unwanted actions on a website on behalf of a victim user. To mitigate CSRF attacks, you can implement the following measures:

1. Use CSRF tokens: A CSRF token is a unique value that is generated by the server and included in the HTML form as 
a hidden input field. When the form is submitted, the server verifies that the token is valid and matches the one that was generate
d for the user session. This ensures that the request was made by an authorized user and not by an attacker. To implement CSRF tokens, you can us
e libraries such as the OWASP CSRFGuard or implement it manually.

2. Use the HTTP "SameSite" attribute: The SameSite attribute is used to prevent the browser from sending cookies in cross-site requests
. When a cookie has the SameSite attribute set to "Strict" or "Lax", the browser will only send the cookie if the request is initiated from the same site as the cookie.
This can prevent CSRF attacks that rely on stealing cookies to impersonate the victim user.

3. Implement the HTTP "Referer" header check: The Referer header is sent by the browser in every HTTP request and contains the URL of the page that initiated the request. 
You can check the Referer header to ensure that the request was initiated from the same origin as the website. However, note that the Referer header can be spoofed by an attacker, 
so this measure should be used in combination with other measures.

4. Use anti-CSRF tokens with expiration and one-time use: Anti-CSRF tokens that expire after a short period of time and can only be used once can provide additional security against CSRF attacks
. This ensures that even if an attacker manages to steal a valid token, they can only use it for a limited time and for one request.

5. Use multi-factor authentication: Multi-factor authentication can provide an additional layer of security against CSRF attacks.
By requiring the user to provide a second factor of authentication, such as a one-time code, you can prevent attackers from using stolen credentials to impersonate the victim user.

By implementing these measures, you can significantly reduce the risk of CSRF attacks on your web application. However, note that no single measure can provide complete protection, 
and it is recommended to use a combination of measures to provide a defense in depth approach.
*/
   /*

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
