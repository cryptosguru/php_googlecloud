<?php
/******************************/
// connecting to GCP cloud SQL instance
// $username = 'root';
// $password = 'rootpassword';
// $dbname = 'grocerease_db';
// $host = 'grocerease-293115:us-east4:grocerease-sql-instance';
/******************************/
// connecting to DB on XAMPP (local)
$username = 'emurdock1101';
$password = '';
$host = 'localhost:3306';
$dbname = 'grocerease_db';
/******************************/

$dsn = "mysql:host=$host;dbname=$dbname";
// $dsn = "mysql:unix_socket=/cloudsql/$host;dbname=$dbname";
$db = "";

/** connect to the database **/
try 
{
   $db = new PDO($dsn, $username, $password);   
   // echo "<p>You are connected to the database</p>";
}
catch (PDOException $e)     // handle a PDO exception (errors thrown by the PDO library)
{
   // Call a method from any object, 
   // use the object's name followed by -> and then method's name
   // All exception objects provide a getMessage() method that returns the error message 
   $error_message = $e->getMessage();        
   echo "<p>An error occurred while connecting to the database: $error_message </p>";
}
catch (Exception $e)       // handle any type of exception
{
   $error_message = $e->getMessage();
   echo "<p>Error message: $error_message </p>";
}

?>