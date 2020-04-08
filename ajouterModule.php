<?php
//connection to db
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

<?php
include "include/form.php"
?>

<?php
include "include/footer.php"
?>
