<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
// Include config file
require_once "config.php";

$sql = "SELECT id, name, email, phone FROM students";
$result = mysqli_query($link, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. " - Phone: ". $row["phone"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($link);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of student </title>

</head>
</html>