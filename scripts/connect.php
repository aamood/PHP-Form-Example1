<?php
$db = 'test';
$host = 'localhost';
$user = 'aaron';
$password = '';
$dbConn = mysql_connect($host, $user, $password);
if($dbConn === false) {
	echo "Sorry, we could not connect to the server: "  . mysql_error();
} else {	 
	$dbSelect = mysql_select_db($db, $dbConn);
	echo "Connection Successful, DB created/selected!!<br>";
	
	/*Note that this WILL NOT work with version 4.x of mySQL
	if(mysql_create_db("newDB", $dbConn) === true) {
		
	} else {
		echo "Could not created/select the DB";
	}*/
}

?>