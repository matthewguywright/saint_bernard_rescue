<!--CODE FOR DELETE LINK-->
<?php
	if(isset($_GET['linkid'])) {
		$linkid = $_GET['linkid'];
		$sql = "DELETE FROM links WHERE id = '$linkid' ";
		$result = mysql_query($sql);
		if($result) {
			$linkMessage = 'Link successfully deleted!';
		}
	}
?>
<!--END CODE FOR DELETE LINK-->

<!--START CODE FOR ADD LINK-->
<?php
	if (isset($_POST['submitlinks'])) {
		if( empty($_POST['name']) || empty($_POST['description']) || empty($_POST['url'])) {
			$linkMessage = 'Make sure all fields are filled out! Link not added!';
		} else {
			$title = addslashes($_POST['name']);
			$desc = addslashes($_POST['description']);
			$url = addslashes($_POST['url']);
			$sql = "INSERT INTO links (name, url, description) VALUES ('$title','$url','$desc') ";
			$result = mysql_query($sql);
			if($result) {
				$linkMessage = 'Link successfully added!';
			}
		}
	}
?>
<h3>Add Links</h3>
<?php
	if(isset($linkMessage)) {
		print "<p>" . $linkMessage . "</p>";
	}
?>
<form id="linksForm" name="linksForm" method="post" action="cms.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cmsTable">
    <tr>
      <td width="9%" align="right" valign="top"><label for="label">Name</label></td>
      <td width="91%" align="left" valign="top"><input name="name" type="text" id="label" size="50" /></td>
    </tr>
    <tr>
      <td align="right" valign="top"><label for="url">URL</label></td>
      <td align="left" valign="top"><input name="url" type="text" id="url" value="http://" size="50" /></td>
    </tr>
    <tr>
      <td align="right" valign="top"><label for="description">Description</label></td>
      <td align="left" valign="top"><input name="description" type="text" id="description" size="50" /></td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td align="left" valign="top">
      <input type="submit" name="submitlinks" id="submitlinks" value="Submit Link" /></td>
    </tr>
  </table>
</form>
<br />
<h3>Delete a Link</h3>
<table>
        <tr>
          <th width="75" id="delete">Delete</th>
		 <th width="447" id="name">Link Name</th>
  </tr>
        <?php
		$query = "SELECT * FROM links";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="left"><a href="cms.php?id=links&linkid=<?php echo $row['id']; ?>" onclick="return confirm('Delete link, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['name']; ?></td>
  </tr>
        <?php
		}
	?>
</table>
