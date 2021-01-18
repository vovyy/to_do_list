<?php


$value = htmlspecialchars(strip_tags(filter_input(INPUT_POST,"value")));
$id = htmlspecialchars(strip_tags(filter_input(INPUT_POST,"id")));
if($value != "" && $id != ""):

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "to_do_list";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $sql = "UPDATE form SET splněno='".$value."' WHERE id=".$id."";
  if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $conn->error;
  }
  $conn->close();
  die();
else:
  echo "";
endif;







?>
