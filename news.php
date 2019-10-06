<?php
	$title = 'NE/IA Saint Bernard Rescue - News';
	$nav = '';
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>
    
    <div id="content_main">
    	<h2>News</h2>
<?php
	$sql = 'SELECT * FROM news ORDER BY date DESC';
	$result = mysql_query($sql);
?>
<?php
	while ($row = mysql_fetch_assoc($result)) {
		print "<div class=\"clearAll\">";
		print "<h3>" . stripslashes($row['title']) . "</h3>";
		print "<p class=\"date\">Date: " . stripslashes($row['date']) . "</p>";
		print "<p>" . stripslashes($row['content']) . "</p>";
		print "</div><br />";
	}
?>
  	</div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>