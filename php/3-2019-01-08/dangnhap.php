<?php

echo $_GET['thu-dien-tu'] . "<br>";
echo $_GET['mat-khau'] . "<br>";
$matKhau = $_GET['mat-khau'];
echo gettype($_GET['mat-khau']);

if ($_GET['thu-dien-tu'] === 'a@gmail.com' && $matKhau === '123456') {
  echo "Dang nhap thanh cong ban oi !";
} else {
  echo "Dang nhap that bai roi ban oi !";
}