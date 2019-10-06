<?php
	$title = 'NE/IA Saint Bernard Rescue - Links';
	$nav = 'links';
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>
<?php
	$sql = "SELECT * FROM links";
	$result = mysql_query($sql);	
?>    
    <div id="content_main">
    	<h2>Links</h2>
        <ul id="links">
			<?php while ($row = mysql_fetch_assoc($result)) { ?>
                <li>
                    <div class="clearAll">
                        <a href="<?php print stripslashes($row['url']); ?>" target="_blank">
                            <p class="linkName"><?php echo stripslashes($row['name']); ?></p>
                            <p class="linkURL"><?php echo stripslashes($row['url']); ?></p>
                            <p class="linkDesc"><?php echo stripslashes($row['description']); ?></p>
                        </a>
                    </div>
                </li>
            <?php 
            }
            ?>
        </ul>
    </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>