<!-- code Not fix-->
<!-- <form action="" method="get">
<select name="lang"> 
<option value="lang-1.php">English</option>
<option value="lang-2.php">Arabic</option>
</select>
<input type="submit" name="submit" value="Click"/>
</form> -->
<?php 
// if( array_key_exists( "lang", $_GET ) && $_GET[ 'lang' ] != NULL )
// {
// $lang = $_GET['lang'];
// include ($lang); 
// }
?>
<!-- code fix-->
<!-- THE FIRST WAY TO FIX THIS -->
<!-- is to use array of the allowed files you want :)) -->
<!-- <form action="" method="get">
<select name="lang"> 
<option value="lang-1.php">English</option>
<option value="lang-2.php">Arabic</option>
</select>
<input type="submit" name="submit" value="Click"/>
</form> -->
<?php 
// if( array_key_exists( "lang", $_GET ) && $_GET[ 'lang' ] != NULL )
// {
// $allowedpages = array ('lang-1.php', 'lang-2.php');
// $lang = $_GET['lang'];
// if (in_array($lang,$allowedpages)):
// include ($lang);
// else:
// echo "bad hacker";
// endif;
// }
?>


<?php

// code Not fix 
// class FI{

//     public function __construct()
   
//     {
//         if(isset($_GET['page'])){
//             include("config/".$_GET['page']);
//             // $file= file_get_contents("config/".$_GET['page']);
//             // echo $file;

//         }
//     }



// }
// $class = new FI();


// include("config/text.php");

// print_r(scandir("config"));

// code fix
ini_set('display_errors','on');
class FI{

            public function __construct()
        
            {
                $allowed= array('text.inc','html.html');
                if(isset($_GET['page']) && in_array($_GET['page'],$allowed)){
                    include("config/".$_GET['page']);
                    

                    $page = in_array($_GET['page'],$allowed) ? file_get_contents('config/'.$_GET['page']): '' ;
                   
                    echo $page;



                }else {
                    echo "file doesn't exist";
              }
           
        }



}
$class = new FI();








?>