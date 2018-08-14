<?php
include("welcome.php");
$conn = new mysqli($servername, $username, $password,"sarthak");
$eid =$_GET['eid'];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to delete a record
$sql = "DELETE FROM test WHERE id=" . $eid;

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
