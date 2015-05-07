<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="robots" content="noindex, nofollow">
</head>
<body>

<?php 
include_once 'scripts/connect.php';

$table = "users";
$userName = $_POST['userName'];
$password = $_POST['password'];

$sqlString = "Select * From $table";
$query = mysql_query($sqlString);
	while($row = mysql_fetch_array($query)) {
		$user = $row['userName'];
		$pass = $row['password'];
		if ($row['userName'] == $userName && $row['password'] == $password){
			header("Location:siteContent.php");
		}else{
			header("Location:login.php");
		}
		//echo "something";
	}
?>
</body>
</html>
