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
$table2 = "userinfo";


if (empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['phone']) || 
	empty($_POST["email"]) || empty($_POST["addy"]) || empty($_POST["city"]) || empty($_POST["state"]) ||
	empty($_POST["userName"]) || empty($_POST["password"]) || empty($_POST["password2"])) {
	echo "Please fill all areas";
}elseif ($_POST["password"] != $_POST["password2"]){
	header("Location:register.html");
}else{
	$firstN = $_POST['fName'];
	$lastN = $_POST['lName'];
	$phoneNum = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['addy'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$userName = $_POST['userName'];
	$pass = $_POST['password'];

	$sqlString = "INSERT INTO $table(userName, password) values('$userName', '$pass');";
	$query = mysql_query($sqlString);

	$sqlString2 = "INSERT INTO $table2(firstName, lastName, phone, email, address, city, state) values('$firstN', '$lastN', 
		'$phoneNum', '$email', '$address', '$city', '$state');";
	$query2 = mysql_query($sqlString2);

	if($query && $query2){
		echo "Database update was awesome sauce!!";
	}else{
	echo mysql_error();
	}
}

?>
</body>
</html>
