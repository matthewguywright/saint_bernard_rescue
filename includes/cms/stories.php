<?php
	if(isset($_GET['storyid'])) {
		$storyid = $_GET['storyid'];
		$sql = "DELETE FROM stories WHERE id = '$storyid' ";
		$result = mysql_query($sql);
		if($result) {
			$storyMessage = 'Success story successfully deleted!';
		}		
	}
?>
<?php
        if(isset($_POST['submitStory'])){
			if( empty($_POST['storyContent']) || empty($_POST['family']) || empty($_POST['dogsName']) || empty($_FILES['new_image']) ) {
				$storyMessage = 'The story was not added! Make sure all required fields are filled out!';
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
 
              $modwidth = 150; 
 				
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
					$content = addslashes(nl2br($_POST['storyContent']));
					$familyName = addslashes($_POST['family']);
					$dog = addslashes($_POST['dogsName']);
					$picture = addslashes($imagepath);
					$date = date("m.d.y");
					$sql = "INSERT INTO stories (dog, date, content, picture, familyName) VALUES ('$dog','$date','$content','$picture','$familyName') ";
					$result = mysql_query($sql);				
					if($result) {
						$storyMessage = 'The story was successfully added!';
					}
				} else {
					$storyMessage = 'The story was not added! Make sure all required fields are filled out!';
				}						
			}
        }
?>
<h3>Success Stories</h3>
<?php if(isset($storyMessage)) { print "<p>" . $storyMessage . "</p>"; } ?>
<form id="storiesForm" name="storiesForm" method="post" action="cms.php" enctype="multipart/form-data">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cmsTable">
    <tr>
      <td width="17%" align="right" valign="top"><label for="storyContent">Content</label></td>
      <td width="83%" align="left" valign="top"><textarea name="storyContent" id="storyContent" cols="40" rows="5"></textarea></td>
    </tr>

    <tr>
      <td align="right" valign="top"><label for="dogsName">Dog's Name</label></td>
      <td align="left" valign="top"><input name="dogsName" type="text" id="dogsName" size="30" /></td>
    </tr>
    <tr>
      <td align="right" valign="top"><label for="family">New Owners</label></td>
      <td align="left" valign="top"><input name="family" type="text" id="family" size="30" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">Picture</td>
      <td align="left" valign="top"><input name="new_image" id="new_image" size="30" type="file" class="fileUpload" />
      (.jpg)</td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input type="submit" name="submitStory" id="submitStory" value="Add Success Story" onclick="return confirm('Submit story, did you check for spelling and grammar?');" /></td>
    </tr>
  </table>
</form>
<br />
<h3>Delete Success Story</h3>
<table>
        <tr>
          <th width="75" id="delete">Delete</th>
		 <th width="447" id="name">Dog Name</th>
  </tr>
        <?php
		$query = "SELECT * FROM stories ORDER BY date DESC";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="left"><a href="cms.php?id=stories&storyid=<?php echo $row['id']; ?>" onclick="return confirm('Delete story, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['dog']; ?></td>
  </tr>
        <?php
		}
	?>
</table>