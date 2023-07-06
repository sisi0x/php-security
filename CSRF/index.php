<?php require 'connect.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="CSRF.php" method="POST">
   
    <input type="submit" value="delete my account">
    <?php // Here generate token and change token for each request ?>

    <input type="hidden" name="token" value= <?php $lens=bin2hex(random_bytes(16));echo$lens;?>/>
  </form>

        
  
 
</body>
</html>
