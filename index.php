<?php
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//select the Database modules
mysqli_select_db($conn,"modules");
?>

<?php
include "include/header.php"
?>

<div class=" justify-content-center container">

<?php
include "include/listModule.php"
?>

</div>

<?php
include "include/footer.php"
?>
