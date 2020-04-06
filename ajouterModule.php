<?php
 
// Create connection
$conn = new mysqli('localhost','root','');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database modules
mysqli_select_db($conn,"modules");
 
echo "\n DB is seleted as Test  successfully";
 
// create INSERT query
 
 
$sql="INSERT INTO `module`(`nom_module`, `numero_module`, `description_module`, `type_module`, `module_frequence_enntretien`, `module_date_start`, `module_date_end`)
VALUES ('wifi',123,'blablabla','gojfkjgnjrngt',2,'2003/01/22','2003/02/22');";

 
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 
mysqli_close($conn);

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
