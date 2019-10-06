<?php
	$title = 'NE/IA Saint Bernard Rescue - Content Management - Admin Login';
	$nav = 'cms';
?>
<?php require_once("includes/top.php"); ?>
<?php
	if( !isset($_SESSION['RESCUE_USERNAME']) || !isset($_SESSION['SESSION']) ) {
		$_SESSION['PAGE'] == 'login';
	}
?>
<?php
	//LOGIN CREDENTIALS *********************************************************
$message = '';

//This area checks for username 
if (isset($_POST['submitlogin'])) {
	//perform validations of the form data
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$hashed_password = sha1($password);
	$query = "SELECT * ";
	$query .= "FROM users ";
	$query .= "WHERE username = '$username' ";
	$query .= "AND hashed_password = '$hashed_password' ";
	$Result = mysql_query($query);
	 
	if (mysql_num_rows($Result) == 1) {
		$found_user = mysql_fetch_array($Result);
		
		//storing session variables
		$_SESSION['RESCUE_USERNAME'] = $found_user['username'];
		$_SESSION['SESSION'] = true;
		$_SESSION['PAGE'] = 'admin';
	} else {
		$message = "<p>Username and Password combination was incorrect. Please make sure the caps lock key is off and try again!</p>";
		$username = "";
		$password = "";
		}
} else {
		$username = "";
		$password = "";
}
?> 
<?php require_once("includes/navbar.php"); ?>
<?php
	if( isset($_SESSION['RESCUE_USERNAME']) ) { ?>
		<style type="text/css">
			#sidebar { display: none; }
		</style>
	<?php }
?>    
    <div id="content_main">
    	<h2>Admin Page</h2>
    <?php
		switch( $_SESSION['PAGE'] ) {
			case 'login':
				require_once('includes/cms/login.php');
			break;
			case 'admin':
				require_once('includes/cms/admin.php');
			break;
			default:
				require_once('includes/cms/login.php');
		}
	?>    
       	
  	</div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>