<?php

// Not fiex 
if (isset($_FILES['image']) == 'POST'){
$imageName = $_FILES['image']['name'];
$imageSize = $_FILES['image']['size'];
$imageTmp  = $_FILES['image']['tmp_name'];
$imageType = $_FILES['image']['type'];
    echo "name is: " .$file_name."<br>";
    echo "Size is: " .$file_size."<br>";
    echo "Tmp is: " .$file_tmp."<br>";
    echo "type is: " .$file_type."<br>";
    }


// Fiex code
if (isset($_FILES['image']) == 'POST'){
            // print_r($_FILES['image'])."<br>";
            $file_name=strtolower($_FILES['image']['name']);
            $file_size=$_FILES['image']['size'];
            $file_tmp=$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            
            echo "name is: " .$file_name."<br>";
            echo "Size is: " .$file_size."<br>";
            echo "Tmp is: " .$file_tmp."<br>";
            echo "type is: " .$file_type."<br>";
            

            $avalible_ext= array('jpeg','jpg','png') ;
            $ext = end(explode('.',$file_name));
            $imgage = rand(0,100000). '.' . $ext;
            
            //check for jprg,jp,png,image 
            if(!in_array($ext,$avalible_ext))
                {
                die($error="invalid extension");
                }else
            $contntess = end(explode('/',$file_type));
            echo "contntess ".  $contntess ."<br>";
    //check content 
        if($ext === $contntess){
            $test = $ext.$contntess ;
                if($file_type === 'image/jpeg' ||$file_type === 'image/jpg'||$file_type === 'image/png' ) 
                {
                        
                    $inaled = ['%','%00'];
                   
                   // check for Null
                            if(in_array($test,$inaled)){
                                die("nop");}
 //check for metadata, But i don't know how can do this if know Please  Tell me ??
 //linkedin // https://www.linkedin.com/in/sisi0x/
                                
                                if(!$error){
                                    move_uploaded_file($file_tmp,$file_name);
                                    echo "secces";}else {
                                        echo "<pre>";
                                        print_r($error."<br>");
                                        echo "</pre>";}
                                    
               }else{echo "invaled content ".$file_type."<br>";}
         // check for Content-Type

        }else{die($error="invaled content");}
}else{echo "invalid Request"; };
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
    <form action="" method="POST" enctype="multipart/form-data">
            <tr>
                <td>image:</td>
                <td><input name="image" type="file"></td>
                <input type="submit" value="upload">
            </tr>
            <tr>
            </form>
</body>
</html>
