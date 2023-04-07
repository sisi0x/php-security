<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'):
        $username = $_POST['username'];
    
    
    if(! empty($username)):
        echo $username;

    else:
        echo "username Cant be empty";

    endif;
        echo $username;
    

    endif;
    
    ?>
    <form action="" method="POST">
        <input type="text" name="username" required /> 
        <input type="submit" value="Send">
    </form>
</body>
</html>