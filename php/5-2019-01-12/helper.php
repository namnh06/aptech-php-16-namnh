<?php
function connectDatabase($serverName = "localhost", $userName = "root", $password = "", $database = "aptech_php_16_ss4")
{
  $conn = mysqli_connect($serverName, $userName, $password, $database);
  if (!$conn) {
    die("Connection failed : " . $mysqli_connect_error());
  }
  return $conn;
}