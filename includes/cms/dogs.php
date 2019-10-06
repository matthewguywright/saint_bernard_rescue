<?php
	if(isset($_GET['d'])) {
		if(is_numeric($_GET['d'])) {
			$DELETE_ID = $_GET['d'];
			$sql = "DELETE FROM dogs WHERE id = '$DELETE_ID' ";
			$result = mysql_query($sql);
			if($result) {
				$dogMessage = 'The dog was successfully deleted!';
			}
		}
	}
	if (!isset($_POST['submitEdit']) ) {
		$_SESSION['EDIT_ID'] = '';
	}
	
	if(isset($_GET['dogid'])) {
		$DOGID = $_GET['dogid'];
	}
	if(isset($_GET['edit'])) {
		$EDIT = $_GET['edit'];
		$editFlag = true;
		$_SESSION['EDIT_ID'] = $EDIT;
	}
	
	if($_POST['showDog']) {
		$q = 1;
		$sql = "UPDATE dogs SET adopted = '$q' WHERE id = '$DOGID' ";
		$result = mysql_query($sql);
		$_SESSION['EDIT_ID'] = '';
	}
	
	if($_POST['hideDog']) {
		$q = 0;
		$sql = "UPDATE dogs SET adopted = '$q' WHERE id = '$DOGID' ";
		$result = mysql_query($sql);
		$_SESSION['EDIT_ID'] = '';
	}
?>
<?php
        if(isset($_POST['submitDog'])){
			if( empty($_POST['name']) || empty($_POST['description']) || empty($_POST['sex']) || empty($_POST['fixed']) || empty($_POST['trained']) || empty($_POST['shots']) || empty($_FILES['new_image']) ) {
				$dogMessage = 'The dog was not added! Make sure all required fields are filled out!';
			} else {
		  	if (isset($_FILES['new_image'])){
              $imagename = $_FILES['new_image']['name'];
              $source = $_FILES['new_image']['tmp_name'];
              $target = "images/".$imagename;
              @move_uploaded_file($source, $target);
 
              $imagepath = $imagename;
              $save = "images/" . $imagepath; //This is the new file you saving
              $file = "images/" . $imagepath; //This is the original file
 
              @list($width, $height) = @getimagesize($file) ; 
 
              $modwidth = 200; 
 				
              $diff = $width / $modwidth;
 			if($diff != 0) {
              $modheight = $height / $diff; 
			 }
              $tn = @imagecreatetruecolor($modwidth, $modheight) ; 
              $image = @imagecreatefromjpeg($file) ; 
              @imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              @imagejpeg($tn, $save, 100) ; 
			}
				if (@imagejpeg($tn, $save, 100)){
					$name = addslashes($_POST['name']);
					$desc = addslashes(nl2br($_POST['description']));
					$sex = addslashes($_POST['sex']);
					$fixed = addslashes($_POST['fixed']);
					$trained = addslashes($_POST['trained']);
					$shots = addslashes($_POST['shots']);
					$needs = addslashes(nl2br($_POST['needs']));
					$image = addslashes($imagepath);
					$sql = "INSERT INTO dogs (name, description, sex, fixed, trained, shots, needs, picture) VALUES ('$name','$desc','$sex','$fixed','$trained','$shots','$needs','$image') ";
					$result = mysql_query($sql);				
					if($result) {
						$dogMessage = 'The dog was successfully added!';
					}
				} else {
					$dogMessage = 'The dog was not added! Make sure all required fields are filled out!';
				}						
			}
        }
?>
<?php
	//********************************************* EDITS ****************************************************
        if(isset($_POST['submitEdit'])){
			if( empty($_POST['name']) || empty($_POST['description']) || empty($_POST['sex']) || empty($_POST['fixed']) || empty($_POST['trained']) || empty($_POST['shots']) ) {
				$dogMessage = 'The dog was not edited! Make sure all fields are filled out!';
			} else {
		  	if (isset($_FILES['new_image']) && $_FILES['new_image']['size'] != 0){
              $imagename = $_FILES['new_image']['name'];
              $source = $_FILES['new_image']['tmp_name'];
              $target = "images/".$imagename;
              @move_uploaded_file($source, $target);
 
              $imagepath = $imagename;
              $save = "images/" . $imagepath; //This is the new file you saving
              $file = "images/" . $imagepath; //This is the original file
 
              @list($width, $height) = @getimagesize($file) ; 
 
              $modwidth = 200; 
 				
              $diff = $width / $modwidth;
 			if($diff != 0) {
              $modheight = $height / $diff; 
			 }
              $tn = @imagecreatetruecolor($modwidth, $modheight) ; 
              $image = @imagecreatefromjpeg($file) ; 
              @imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
 
              @imagejpeg($tn, $save, 100) ; 
			}
				$name = addslashes($_POST['name']);
				$desc = addslashes(nl2br($_POST['description']));
				$sex = addslashes($_POST['sex']);
				$fixed = addslashes($_POST['fixed']);
				$trained = addslashes($_POST['trained']);
				$shots = addslashes($_POST['shots']);
				$needs = addslashes(nl2br($_POST['needs']));
				if(isset($_FILES['new_image']) && $_FILES['new_image']['size'] != 0) {
					$image = addslashes($imagepath);
				}
				$EDIT_ID = $_SESSION['EDIT_ID'];
				$sql = "UPDATE dogs SET name = '$name', description = '$desc', sex = '$sex', fixed = '$fixed', trained = '$trained', shots = '$shots', needs = '$needs' WHERE id ='$EDIT_ID' ";
				if(isset($_FILES['new_image']) && $_FILES['new_image']['size'] != 0) {
					$picSql = "UPDATE dogs SET picture = '$image' WHERE id ='$EDIT_ID'";
					mysql_query($picSql);
				}
				$result = mysql_query($sql);				
				if($result) {
					$dogMessage = 'The dog was successfully updated!';
				}						
			}
        }
?>
<?php
	if( $editFlag == true ) {
		print "<h3>Edit Dog</h3>";
	} else {
	 	print "<h3>Add Dog</h3>";
	}
?>
<p class="bold">* A picture and all fields are required.</p>
<?php if(isset($dogMessage)) { print "<p>" . $dogMessage . "</p>"; } ?>
<?php 
	if(isset($_SESSION['EDIT_ID'])) {
		$IDDog = $_SESSION['EDIT_ID'];
		$sql = "SELECT * FROM dogs WHERE id = '$IDDog' ";
		$result = mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	}
?>
<form action="<?php print $_server['php-self'];  ?>" method="post" enctype="multipart/form-data" id="dogsForm">
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="cmsTable">
  <tr>
    <td align="right" valign="top"><label for="label">Name</label></td>
    <td align="left" valign="top"><input name="name" type="text" id="label" size="50" value="<?php print stripslashes($row['name']); ?>"/></td>
  </tr>
  <tr>
    <td align="right" valign="top"><label for="description">Description</label></td>
    <td align="left" valign="top"><textarea name="description" id="description" cols="40" rows="5"><?php print stripslashes($row['description']); ?></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top">Sex    </td>
    <td align="left" valign="top"><table width="100">
      <tr>
        <td><label>
          <input type="radio" name="sex" value="Male" id="sex_0" <?php if($row['sex'] == 'Male') { print "checked=\"checked\""; } ?> />
          Male</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="sex" value="Female" id="sex_1" <?php if($row['sex'] == 'Female') { print "checked=\"checked\""; } ?>/>
          Female</label></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" valign="top">Spayed/Neutered</td>
    <td align="left" valign="top"><table width="100">
      <tr>
        <td><label>
          <input type="radio" name="fixed" value="Yes" id="fixed_0" <?php if($row['fixed'] == 'Yes') { print "checked=\"checked\""; } ?>/>
          Yes</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="fixed" value="No" id="fixed_1" <?php if($row['fixed'] == 'No') { print "checked=\"checked\""; } ?>/>
          No</label></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td align="right" valign="top">House Trained</td>
    <td align="left" valign="top"><table width="100">
      <tr>
        <td><label>
          <input type="radio" name="trained" value="Yes" id="trained_0" <?php if($row['trained'] == 'Yes') { print "checked=\"checked\""; }  ?>/>
          Yes</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="trained" value="No" id="trained_1" <?php if($row['trained'] == 'No') { print "checked=\"checked\""; }  ?>/>
          No</label></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td align="right" valign="top">Up to date on shots</td>
    <td align="left" valign="top"><table width="100">
      <tr>
        <td><label>
          <input type="radio" name="shots" value="Yes" id="shots_0" <?php if($row['shots'] == 'Yes') { print "checked=\"checked\""; } ?>/>
          Yes</label></td>
      </tr>
      <tr>
        <td><label>
          <input type="radio" name="shots" value="No" id="shots_1" <?php if($row['shots'] == 'No') { print "checked=\"checked\""; } ?>/>
          No</label></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
    <td align="right" valign="top"><label for="needs">Special Needs</label></td>
    <td align="left" valign="top"><textarea name="needs" id="needs" cols="40" rows="5"><?php print stripslashes($row['needs']); ?></textarea></td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input name="new_image" id="new_image" size="30" type="file" class="fileUpload" />
      (.jpg)</td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
    <td align="left" valign="top">
    <?php
		if( $_SESSION['EDIT_ID'] ) { ?>
        	<p>If you want to change the current picture, just upload a new image.</p>
    		<button name="submitEdit" type="submit" id="submitEdit" onclick="return confirm('Add dog, did you make sure everything is filled out correctly?');">Update Dog</button>
		<?php } else { ?>
			<button name="submitDog" type="submit" id="submitDog" onclick="return confirm('Add dog, did you make sure everything is filled out correctly?');">Add Dog</button>
		<?php }
	?>
	</td>
  </tr>
</table>

</form>
<br/>
<h3>Delete News Story</h3>
<table>
        <tr>
          <th width="75" id="edit">Edit</th>
          <th width="75" id="delete">Delete</th>
		 <th width="447" id="name">Name</th>
         <th width="447" id="name">Show/Hide Dog</th>
  </tr>
        <?php
		$query = "SELECT * FROM dogs";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="left"><a href="cms.php?id=dogs&edit=<?php echo $row['id']; ?>">edit</a></div></td>
                <td><div align="left"><a onclick="return confirm('Delete dog, are you sure?');" href="cms.php?id=dogs&d=<?php echo $row['id']; ?>">delete</a></div></td>
			  <td><?php echo $row['name']; ?></td>	              
              <td>
         <form action="<?php print $_server['php-self'] . "?id=dogs&dogid=" . $row['id']; ?>" method="post" enctype="multipart/form-data" id="editDogsForm">
              <?php
              if($row['adopted'] == 1) { ?>
              	<input type="submit" name="hideDog" id="hideDog" value="Hide" />
              <?php } 
			  if($row['adopted'] == 0) { ?>
              	<input type="submit" name="showDog" id="showDog" value="Show" />
              <?php }
			  ?>
         </form>
              </td>
  </tr>
        <?php
		}
	?>
</table>
