<?php 
session_start();
//require 'connect.php';
$_SESSION['TOKEN'] = md5(random_bytes(100));
?>


<!DOCTYPE html>
<html lang="en">
<head>
 
  <title>CSRF</title>
</head>
<body>
       <center>

  <form action="profile.php" method="POST">
    <?php echo $_SESSION['TOKEN'];echo"<br>";?>
    <input type="submit" value="delete my account">
    <input type="hidden" name="CSRF" value= <?php echo $_SESSION['TOKEN'];?>/>
  
  </form>

        
  
 
</body>
</html>
