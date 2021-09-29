<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "data");
if (isset($_POST["email"])) {
  $query = "  
      SELECT * FROM signup  
      WHERE email = '" . $_POST["email"] . "' 
      AND password = '" . $_POST["password"] . "' 
      ";
  $result = mysqli_query($connect, $query);
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $_POST['email'];
    echo 'Success';
  } else {
    echo 'No';
  }
}
if (isset($_POST["action"])) {
  unset($_SESSION["email"]);
}
