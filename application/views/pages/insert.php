<?php
if (isset($_POST["insert"]))
{
  $conn = mysqli_connect("localhost", "root", "", "to_do_list");
  $query = "INSERT INTO form(splněno) VALUES ('".$_POST["insert"]."')";
  $result = mysqli_query($conn, $query);
  echo "Data inserted";
}
 ?>
