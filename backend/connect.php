<?php

require_once 'config.php';
 
$conn = mysqli_connect($host, $user, $pass, $db);

/* change character set to utf8 */
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";

?>
