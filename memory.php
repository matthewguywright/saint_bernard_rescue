<?php
	$title = 'NE/IA Saint Bernard Rescue - Memory Lane';
	$nav = 'memory';
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>
<?php
	$sql = 'SELECT * FROM memories ORDER BY date DESC';
	$result = mysql_query($sql);
?>    
    <div id="content_main">
    	<h2>Memory Lane</h2>
            <ul id="successStories">
                <?php while ($row = mysql_fetch_assoc($result)) { ?>
                    <li>
                    	<div class="clearAll">
                    	<h3><?php echo stripslashes($row['dog']); ?></h3>
                        <p id="successContent"><img src="images/<?php echo stripslashes($row['picture']); ?>" /><span class="blue">Story</span>: <?php echo stripslashes($row['content']); ?></p>
                        <p style="clear: both;"></p>
                        </div>
                    </li>
                <?php 
                }
                ?>
            </ul>
    </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>