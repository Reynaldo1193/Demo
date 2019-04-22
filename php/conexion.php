<?php

  $conn = new mysqli("localhost","root", "","Demo");
  if ($conn->connect_error) {
    echo $error ->$conn->connect_error;
  }  

?>
