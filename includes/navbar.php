<div id="navigation">
<?php
	if( isset($_SESSION['RESCUE_USERNAME']) ) { ?>
		<script type="text/javascript">
			$(function() {
				$('ul#nav1 li#dogs a').css('background','red');
				$('ul#nav1 li#success a').css('background','red');
				$('ul#nav1 li#links a').css('background','red');
				$('ul#nav1 li#home a').css('background','red');
				$('ul#nav1 li#memory a').css('background','red');
			});
		</script>
	<?php }
?>
	<img src="images/NavDog2.jpg" alt="Saint Bernard" />
    <ul id="nav1">
        <?php
			if(isset($_SESSION['RESCUE_USERNAME'])) { ?>
				<li id="home"><a href="cms.php?id=news">Home</a></li>
			<?php } else { ?>
            	<li id="home"><a href="index.php">Home</a></li>
            <?php }
		?>
        <li id="saints"><a href="saints.php">About Saints</a></li>
      	<li id="about"><a href="about.php">About Us</a></li>
        <?php
			if(isset($_SESSION['RESCUE_USERNAME'])) { ?>
				<li id="dogs"><a href="cms.php?id=dogs">Meet the Dogs</a></li>
			<?php } else { ?>
            	<li id="dogs"><a href="dogs.php">Meet the Dogs</a></li>
            <?php }
		?>
        <li id="foster"><a href="foster.php">Foster Care</a></li>
        <li id="adopt"><a href="adopt.php">Adoption</a></li>
        <li id="events"><a href="events.php">Events</a></li>
        <?php
			if(isset($_SESSION['RESCUE_USERNAME'])) { ?>
				<li id="success"><a href="cms.php?id=stories">Stories</a></li>
			<?php } else { ?>
            	<li id="success"><a href="success.php">Stories</a></li>
            <?php }
		?>
        <!--<li id="remember"><a href="#">Remembering</a></li>-->
        <?php
			if(isset($_SESSION['RESCUE_USERNAME'])) { ?>
				<li id="links"><a href="cms.php?id=links">Links</a></li>
			<?php } else { ?>
            	<li id="links"><a href="links.php">Links</a></li>
            <?php }
		?>
        <?php
			if(isset($_SESSION['RESCUE_USERNAME'])) { ?>
				<li id="memory"><a href="cms.php?id=memory">Memory Lane</a></li>
			<?php } else { ?>
            	<li id="memory"><a href="memory.php">Memory Lane</a></li>
            <?php }
		?>
        <li id="contactus"><a href="contactus.php">Contact Us</a></li>
  </ul>
    <img src="images/NavDog3.jpg" alt="Saint Bernard" />
</div> <!--ENDS NAVIGATION DIV-->