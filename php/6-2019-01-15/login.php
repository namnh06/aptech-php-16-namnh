<?php
if (isset($_POST['submit'])) {
  $user = $password = "";
  if ($_POST['username'] == null) {
    echo "Please enter your username<br />";
  } else {
    $user = $_POST['username'];
  }
  if ($_POST['password'] == null) {
    echo "Please enter your password<br />";
  } else {
    $password = $_POST['password'];
  }
  if ($user && $password) {
    require './helper.php';
    $conn = connectDatabase();
    $sql = "select * from users where email='" . $u . "' and password='" . $p . "'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) == 0) {
      echo "Username or password is not correct, please try again";
    } else {
      $row = mysqli_fetch_array($query);
      echo 'dang nhap thanh cong!!!';
    }
  }
}
?>
<form action='login.php' method='post'>
  Username: <input type='text' name='username' size='25' /><br />
  Password: <input type='password' name='password' size='25' /><br />
  <input type='submit' name='submit' value='Dang Nhap' />
</form>