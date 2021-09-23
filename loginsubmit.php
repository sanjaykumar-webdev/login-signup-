<?php
// connection
$conn = new mysqli("localhost", "root", "", "data");
$sql = " INSERT INTO form (email,password) VALUES ('{$_POST["email"]}','{$_POST["password"]}')";
$conn->query($sql);
