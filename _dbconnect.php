<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "loginsystem";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
  die("Sorry we failed to connect:". mysqli_connect_error());
}

?>

<!-- // Connecting to the Database 
$servername ="localhost";
$username ="root";
$password ="root";

// Create a Connection.
$conn = mysqli_connect($servername, $username, $password);


// Die if connection was not successful
if (!$conn){
  die("Sorry we failed to connect:". mysqli_connect_error());
}
else{
     echo "Connection was successful";
} -->