<?php
$serverName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($serverName, $userName, $password);
// var_dump($conn);

function quetNha($ten)
{
  return [
    'a' => 5,
    'b' => 10,
    'ten' => $ten
  ];
}

$a = quetNha('Vu');
// $a = 'toi dang quet nha cua Vu';
$b = [];
var_dump(!true);