<?php
	if(isset($_GET['id'])) {
	$id = $_GET['id'];
		switch($id) {
			case 'dogs':
				$_SESSION['EDIT_PAGE'] = 'dogs';
			break;
			case 'links':
				$_SESSION['EDIT_PAGE'] = 'links';
			break;
			case 'stories':
				$_SESSION['EDIT_PAGE'] = 'stories';
			break;
			case 'news':
				$_SESSION['EDIT_PAGE'] = 'news';
			break;
			case 'memory':
				$_SESSION['EDIT_PAGE'] = 'memory';
			break;
			default:
				$_SESSION['EDIT_PAGE'] = 'news';
		}
	}
?>
<h3>Admin</h3>
<p style="float: right;"><a href="logout.php">Logout</a></p>
<div id="adminDiv" style="clear: both;">
	<p>Welcome to the Admin Page. This is where you can update information in the website. Menu items on the left marked in "red" can be clicked and edited. If you need assistance, contact <a href="mailto:crazykaine5391@yahoo.com">Matthew Wright</a>.</p>
    
	<?php
		switch($_SESSION['EDIT_PAGE']) {
			case 'dogs':
				require_once('includes/cms/dogs.php');
			break;
			case 'links':
				require_once('includes/cms/links.php');
			break;
			case 'stories':
				require_once('includes/cms/stories.php');
			break;
			case 'news':
				require_once('includes/cms/news.php');
			break;
			case 'memory':
				require_once('includes/cms/memory.php');
			break;
			default:
				require_once('includes/cms/news.php');
		}
	?>
    
</div>