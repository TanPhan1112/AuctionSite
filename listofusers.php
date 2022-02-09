<?php
// Initialize variable for database credentials
require_once("sql/sqlhelper.php");

//Check connection was successful
if ($db->connect_errno) {
  printf("Failed to connect to database");
  exit();
}

//Fetch 3 rows from actor table
$result = $db->query("SELECT username FROM user");

//Initialize array variable
$dbdata = array();

//Fetch into associative array
while ( $row = $result->fetch_assoc())  {
  $dbdata[]=$row;
}

//Print array in JSON format
echo json_encode($dbdata);
?>
