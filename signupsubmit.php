<?php
// connection
$connect = mysqli_connect("localhost", "root", "", "data");
if (isset($_POST["email"])) {
  $query = " INSERT INTO signup (username,email,password) VALUES ('{$_POST["username"]}','{$_POST["email"]}','{$_POST["password"]}')";
  $result = mysqli_query($connect, $query);
  if (($result) > 0) {
    echo 'sucess';
  } else {
    echo 'No';
  }
}
