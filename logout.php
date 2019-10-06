<?php 
	//log out
	session_start();
	if (isset($_SESSION['RESCUE_USERNAME'])) {
		$_SESSION = array();
		session_destroy();
		header("Location: cms.php");
	} else {
		header("Location: cms.php");
}
?>