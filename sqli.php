<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 

<?php
    ini_set('display_errors','on');

include 'connect_sqli.php';
// if(isset($_GET['id']) && ! empty($_GET['id'])) {
//  $userid= $_GET['id'];
//  prepare 
 $stmt = $con->prepare("SELECT * FROM user WHERE id =1");

 $stmt->execute();

 $count= $stmt->rowCount();
 while($row = $stmt->fetch()){
  $id = $row['id'];
  $name = $row['name'];
 }
echo $name;
// if($count > 0){
//   echo $name;
// }else{
//   echo "THERES No Profile With This Id";
// }


// }




//code not faxt

// $servername = "localhost";
// $username = "m5awy";
// $password = "password";
// $dbname = "test";
// if (isset($_GET['id'])){
//     $id = $_GET['id'];
// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// $sql = "SELECT * FROM sqli WHERE ID=".$id;
// $result = $conn->query($sql);
// if (!empty($result) && $result->num_rows > 0) {
// // output data of each row
// while($row = $result->fetch_assoc()) {
// echo "ID : ". $row["ID"] . "<br/>";
// }
// }
// $conn->close();
// }
//code fixt

/**
 * Check if the 'id' GET variable is set
 * Example - http://localhost/?id=1
 */
// if (isset($_GET['id'])){
//   $id = $_GET['id'];
//   /**
//    * Validate data before it enters the database. In this case, we need to check that
//    * the value of the 'id' GET parameter is numeric
//    */
//    if ( is_numeric($id) == true){
//     try{ // Check connection before executing the SQL query 
//       /**
//        * Setup the connection to the database This is usually called a database handle (dbh)
//        */
//       $dbh = new PDO('mysql:host=localhost;dbname=test', 'm5awy', 'password');
//       /**
//        * Use PDO::ERRMODE_EXCEPTION, to capture errors and write them to
//        * a log file for later inspection instead of printing them to the screen.
//        */
//       $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//       /**
//        * Before executing, prepare statements by binding parameters.
//        * Bind validated user input (in this case, the value of $id) to the
//        * SQL statement before sending it to the database server.
//        *
//        * This fixes the SQL injection vulnerability.
//        */
//       $q = "SELECT * FROM sqli WHERE ID = :id";
//       // Prepare the SQL query string.
//       $sth = $dbh->prepare($q);
//       // Bind parameters to statement variables.
//       $sth->bindParam(':id', $id);
//       // Execute statement.
//       $sth->execute();
//       // Set fetch mode to FETCH_ASSOC to return an array indexed by column name.
//       $sth->setFetchMode(PDO::FETCH_ASSOC);
//       // Fetch result.
//       $result = $sth->fetchColumn();
//       /**
//        * HTML encode our result using htmlentities() to prevent stored XSS and print the
//        * result to the page
//        */
//       print( "ID: " . htmlentities($result) );
//       //Close the connection to the database.
//       $dbh = null;
//     }
//     catch(PDOException $e){
//       /**
//        * You can log PDO exceptions to PHP's system logger, using the
//        * log engine of the operating system
//        *
//        * For more logging options visit http://php.net/manual/en/function.error-log.php
//        */
//       error_log('PDOException - ' . $e->getMessage(), 0);
//       /**
//        * Stop executing, return an Internal Server Error HTTP status code (500),
//        * and display an error
//        */
//       http_response_code(500);
//       die('Error establishing connection with database');
//     }
//    } else{
//     /**
//      * If the value of the 'id' GET parameter is not numeric, stop executing, return
//      * a 'Bad request' HTTP status code (400), and display an error
//      */
//     http_response_code(400);
//     die('Error processing bad or malformed request');
//    }
// }
?>
 
 </body>
</html>
