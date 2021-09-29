<?php
// connection
$connect = mysqli_connect("localhost", "root", "", "data");
if (isset($_POST["email"])) {
  $query = " INSERT INTO signup (dob,age,gender,contact) VALUES ('{$_POST["dob"]}','{$_POST["age"]}','{$_POST["dob"]}','{$_POST["contact"]}')";
  $result = mysqli_query($connect, $query);
  if (($result) > 0) {
    echo 'success';
  } else {
    echo 'No';
  }
}
