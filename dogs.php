<?php
	$title = 'NE/IA Saint Bernard Rescue - Meet the Dogs';
	$nav = 'dogs';
?>
<?php require_once("includes/top.php"); ?>
<?php require_once("includes/navbar.php"); ?>
<script type="text/javascript">
	$(function() {
		$("ul#loadDogs").load('includes/all_dogs.php');
		$('#sortType').change(function() {			
			 switch ($(this).val()) {
				case 'f':
					$("ul#loadDogs").load('includes/female.php');
				break;
				case 'm':
					$("ul#loadDogs").load('includes/male.php');
				break;
				case 'all':
					$("ul#loadDogs").load('includes/all_dogs.php');
				break;
			}
			return false;
		});
	});
</script>    
    <div id="content_main">
    	<h2>Meet the Dogs</h2>
        <p>The number and condition of our dogs can change at any time. We do our best to keep all of our adoptable dogs posted as well as removing adopted dogs. Let us know if any interest you. You can send us an <a href="contactus.php">email</a> with the dogs name or fill out an <a href="apply.php">application</a>.</p>
        <h3>Sort by:</h3>
        <p><select id="sortType" name="sortType">
          <option value="all">All Dogs</option>
          <option value="f">Female</option>
          <option value="m">Male</option>
        </select></p>
        <ul id="loadDogs" class="ulNoBullets"></ul>
  </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>