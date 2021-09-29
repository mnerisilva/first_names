<?php

require 'backend/connect.php';
header ("Content-type: text/html; charset=utf-8");

$nome = "JOÃO";
 
$sql = "INSERT INTO first_names (name) VALUES ('".$nome."')";
if (mysqli_query($conn, $sql)) {
      echo "Um novo registro foi adicionado";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
