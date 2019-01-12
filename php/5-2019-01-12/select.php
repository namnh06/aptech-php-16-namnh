<?php
require('./helper.php');
$conn = connectDatabase();

// Create sql select 
$sql = "SELECT id, name, email FROM users";
$result = mysqli_query($conn, $sql);
// var_dump(mysqli_num_rows($result) > 0);
// die();
echo "abc";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
  while ($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
    echo "id: " . $row["id"] . " - Name: " . $row["name"] . " " . $row["email"] . "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>