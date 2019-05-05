<html>
<body>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
print 'success' ;

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

$sql = "SELECT name, icno, permaddr, corraddr, hpno, email, spaddr, status, lawyer, complaint FROM form";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " Name: " . $row["name"]. " IC NO: " . $row["icno"]. " Permanent Address: " . $row["permaddr"]." Corresponding Address: " . $row["corraddr"]." HP NO: " . $row["hpno"]." Email: " . $row["email"]." Spouse Address: " . $row["spaddr"]." Status: " . $row["status"]." Lawyer: " . $row["lawyer"]." Complaint: " . $row["complaint"].
"<br><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<form action="logout.php" method="post">

<input type="submit" value="Logout" />

</form>

</body>
</html>
