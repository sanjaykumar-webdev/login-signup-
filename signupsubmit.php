<?php
// connection
$conn = new mysqli("localhost", "root", "", "data");
$sql = " INSERT INTO form (username,email,password,confirmpassword) VALUES ('{$_POST["username"]}','{$_POST["email"]}','{$_POST["password"]}','{$_POST["confirmpassword"]}')";
$conn->query($sql);
