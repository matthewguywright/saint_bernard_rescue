<!--CODE FOR DELETE LINK-->
<?php
	if(isset($_GET['newsid'])) {
		$newsid = $_GET['newsid'];
		$sql = "DELETE FROM news WHERE id = '$newsid' ";
		$result = mysql_query($sql);
		if($result) {
			$newsMessage = 'News story successfully deleted!';
		}
	}
?>
<!--END CODE FOR DELETE LINK-->

<!--START CODE FOR ADD LINK-->
<?php
	if (isset($_POST['submitnews'])) {
		if( empty($_POST['title']) || empty($_POST['content']) ) {
			$newsMessage = 'Make sure all fields are filled out! Story not added!';
		} else {
			$title = addslashes($_POST['title']);
			$date = date("m.d.y H:i:s");
			$content = addslashes(nl2br($_POST['content']));
			$sql = "INSERT INTO news (title, date, content) VALUES ('$title','$date','$content') ";
			$result = mysql_query($sql);
			if($result) {
				$newsMessage = 'News story successfully added!';
			}
		}
	}
?>
<h3>Add News Story</h3>
<?php
	if(isset($newsMessage)) {
		print "<p>". $newsMessage . "</p>";
	}
?>
<form id="newsForm" name="newsForm" method="post" action="cms.php">
  <table width="100%" border="0" cellspacing="0" cellpadding="0" class="cmsTable">
    <tr>
      <td align="right" valign="top"><label for="title">Title</label></td>
      <td align="left" valign="top"><input name="title" type="text" id="title" size="50" /></td>
    </tr>
    <tr>
      <td align="right" valign="top"><label for="content">Content</label></td>
      <td align="left" valign="top"><textarea name="content" id="content" cols="50" rows="5"></textarea></td>
    </tr>
    <tr>
      <td align="right" valign="top">&nbsp;</td>
      <td align="left" valign="top"><input type="submit" name="submitnews" id="submitnews" value="Submit News" onclick="return confirm('Submit news, did you check for spelling and grammar?');" /></td>
    </tr>
  </table>
</form>
<br />
<h3>Delete News Story</h3>
<table>
        <tr>
          <th width="75" id="delete">Delete</th>
		 <th width="447" id="name">Link Name</th>
  </tr>
        <?php
		$query = "SELECT * FROM news ORDER BY date DESC";
		$result = mysql_query($query);
		while ($row = mysql_fetch_assoc($result) ) {
			?>
        <tr>
          <td>
            <div align="left"><a href="cms.php?id=news&newsid=<?php echo $row['id']; ?>" onclick="return confirm('Delete story, are you sure?')">delete</a></div></td>
			  <td><?php echo $row['title']; ?></td>
  </tr>
        <?php
		}
	?>
</table>