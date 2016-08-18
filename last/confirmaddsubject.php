<?php
$db_username = 'root';
$db_password = '';
$db_name = 'final';
$db_host = 'localhost';

$con=mysql_connect($db_host ,$db_username,$db_password );
mysql_select_db($db_name); 
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
mysql_select_db($db_username, $con);
$sql="INSERT INTO categories (cat_name)
VALUES
if (isset($_POST['submit'])) {
('$_POST[subjectname]')";
}
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
 
mysql_close($con)



?>
