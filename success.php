<?php
	$title = 'NE/IA Saint Bernard Rescue - Success Stories';
	$nav = 'success';
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>
<?php
	$sql = 'SELECT * FROM stories ORDER BY date DESC';
	$result = mysql_query($sql);
?>    
    <div id="content_main">
    	<h2>Success Stories</h2>
            <ul id="successStories">
                <?php while ($row = mysql_fetch_assoc($result)) { ?>
                    <li>
                    	<div class="clearAll">
                    	<h3><?php echo stripslashes($row['dog']); ?></h3>
                        <p id="successContent"><img src="images/<?php echo stripslashes($row['picture']); ?>" /><span class="blue">Story</span>: <?php echo stripslashes($row['content']); ?></p>
                        <p id="successFamily"><span class="blue">New Owner(s)</span>: <?php echo stripslashes($row['familyName']); ?></p>
                        </div>
                    </li>
                <?php 
                }
                ?>
            </ul>
    </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>