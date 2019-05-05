<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elegalclinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO form (name, icno, permaddr, corraddr, hpno, email, spaddr, status, lawyer, complaint)
VALUES ('$_POST[name]','$_POST[icno]','$_POST[permaddr]','$_POST[corraddr]','$_POST[hpno]','$_POST[email]','$_POST[spaddr]','$_POST[status]','$_POST[lawyer]','$_POST[complaint]')";;


if ($conn->query($sql) === TRUE) {
    echo "New  record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>