<!-- 
Password protection with only MD5 like this code 
````````````````````````````````````
$Password = 'Mohamed';
$hashedPassword= md5($Password);
echo $hashedPassword;
````````````````````````````````````
And It is not the best way to protect users passwords.
why is not the best way? Because easily an attacker can Decryption the MD5 to get the passwords.
ex: open : https://www.md5online.org/md5-decrypt.html and Enter this md5 hash `bc2ab28e4cda984ca76646874371e864`
It will return the value of the MD5 hashed Password `Mohamed`.
-->
<?php
// $Password = 'Mohamed';
// $hashedPassword= md5($Password);
// echo $hashedPassword;
?>


<!-- fixt  -->
<!--

one of the best ways to protect the users passwords is to use the `password_hash` function like this code
``````````````````````````````````````````````````````````
$password = 'Mohamed';
$hashedpassword= password_hash($password,PASSWORD_DEFAULT);
``````````````````````````````````````````````````````````
You can also see all the ways through this link https://www.php.net/manual/en/function.password-hash.php
-->
<?php
#Full Code.
$password = 'Mohamed';
$hashedpassword= password_hash($password,PASSWORD_DEFAULT);
if (password_verify($password,$hashedpassword))
{
    echo "Password is valid!";
} else{
    echo "Invalid password.";
}
?>
<!--Now you will face a problem, how can you verify the correct password after the hash? Because of course we can't decrypt it
We will use the `password_verify` function to Make sure the password matches the hash
you can use this code 
``````````````````````````````````````````````````````````
if (password_verify($password,$hashedpassword))
{
    echo "Password is valid!";
} else{
    echo "Invalid password.";
}
``````````````````````````````````````````````````````````
You can find out more through : https://www.php.net/manual/en/function.password-verify.php
-->
