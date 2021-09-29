<?php

require 'backend/connect.php';

$nome = "João";
 
$sql = "INSERT INTO first_names (name) VALUES ('".$nome."')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
