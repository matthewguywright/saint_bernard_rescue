<?php
	require_once('rescue_constants.php');
?>
<?php
	//CONNECT TO MYSQL
	$dbconnect = mysql_connect($HOST,$USER,$PW);
	if (!$dbconnect) {
		print "Could not connect to the database";
		die;
	}
	
	//SELECT THE DATABASE
	$db_select = mysql_select_db($DB,$dbconnect);
	if (!$db_select) {
		print "Could not connect to the database";
		die;
	}
?>