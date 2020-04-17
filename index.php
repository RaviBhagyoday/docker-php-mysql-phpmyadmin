<?php
$mysqli = new mysqli("mysql:3306","ravi","ravi","test_db");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();

  
}

echo "connected";
?>