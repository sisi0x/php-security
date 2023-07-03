<?php require 'connect.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="delete.php" method="POST">
   
    <input type="submit" value="delete my account">
    <input type="hidden" name="_token" value="<?php $_SESSION['_token'];?>"/>
    <?php echo $_SESSION['_token']=bin2hex(random_bytes(32)); ?>
  </form>
</body>
</html>
