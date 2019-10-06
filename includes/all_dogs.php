<?php
	require_once('dbconnect.php');
			$sql = "SELECT * FROM dogs WHERE adopted = 0 ";
			$result = mysql_query($sql);
			while( $row = mysql_fetch_assoc($result) ) { ?>
				<li>
                	<div class="clearAll">
                	<h2><?php echo stripslashes($row['name']); ?></h2>
                    <p><span class="blue">Sex:</span> <?php echo stripslashes($row['sex']); ?></p>
                    <p><img src="images/<?php echo stripslashes($row['picture']); ?>" alt="<?php echo stripslashes($row['name']); ?>" class="leftImg" /><span class="blue">About <?php echo stripslashes($row['name']); ?>: </span> <?php echo stripslashes($row['description']); ?></p>
                    <p><span class="blue">Special Needs:</span> <?php echo stripslashes($row['needs']); ?></p>
                    
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="details">
                    <tr class="head">
                        <td>Current Shots</td>
                        <td>House Trained</td>
                        <td>Spayed/Neutered</td>                    
                    </tr>
                      <tr>
                        <td><?php echo stripslashes($row['shots']); ?></td>
                        <td><?php echo stripslashes($row['trained']); ?></td>
                        <td><?php echo stripslashes($row['fixed']); ?></td>
                      </tr>
                    </table>
                    </div>
				</li>
			<?php }
		?>