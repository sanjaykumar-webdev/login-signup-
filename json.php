<?php
function get_data()
{

  $connect = mysqli_connect("localhost", "root", "", "data");
  $query = "select * from form";
  $result = mysqli_query($connect, $query);

  $User_data = array();
  while ($row = mysqli_fetch_array($result)) {
    $User_data[] = array(
      'email' => $row['email'],
      'password' => $row['password']
    );
  }
  return json_encode($User_data);
}
$file_name = 'database.json';
if (file_put_contents($file_name, get_data())) {
  echo $file_name . 'file created';
} else {
  echo "error";
}
