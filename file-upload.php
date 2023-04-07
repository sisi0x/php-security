<?php
if (isset($_FILES['image'])){
    // print_r($_FILES['image'])."<br>";
    $file_name=$_FILES['image']['name'];
    $file_size=$_FILES['image']['size'];
    $file_tmp=$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
      
    echo "name is: " .$file_name."<br>";
    echo "Size is: " .$file_size."<br>";
    echo "Tmp is: " .$file_tmp."<br>";
    echo "type is: " .$file_type."<br>";
    $avalible_ext= array('jprg','jpg','png','jpeg') ;
    // // JPG JpG jPg 
    $ext=(end(explode('.',$file_name)));
    $imgage = rand(0,100000). '.' . $ext;

    if(!in_array($ext,$avalible_ext))
    {
        echo $error="invalid extension";
    }
        
    
//    if(!$error){
//         move_uploaded_file($file_tmp,$file_name);
//         echo "secces";
//     }
    // else 
    // echo "<pre>";
    // print_r($error."<br>");
    // echo "</pre>";
}
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