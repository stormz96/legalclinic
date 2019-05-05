<html>
<body>
 
 
<?php
$con = mysql_connect('127.0.0.1','root','');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("fypwebsite", $con);
 
$sql="INSERT INTO test (name, email)
VALUES
('$_POST[name]','$_POST[email]')";
 
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)
?>
</body>
</html>