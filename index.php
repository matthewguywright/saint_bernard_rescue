<?php
	$title = 'NE/IA Saint Bernard Rescue - Welcome';
	$nav = 'home';
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>
    
    <div id="content_main">
    	<h2>Welcome to the NE/IA Saint Bernard Rescue website!</h2>
        <p><img src="images/NavDog1.jpg" alt="Saint Bernard" class="leftImg" />We are a 501c3 non-profit, all-volunteer organization dedicated to the rehoming of unwanted, neglected, abandoned and abused Saint Bernards. We are constantly getting in new Saint Bernards, and our intake and evaluation process means that a new Saint may not appear on our website for three to six weeks, depending on their condition upon arrival. Please check back often to see our <a href="dogs.php">new arrivals</a>. If you are considering bringing a Saint Bernard into your home and family, please spend some time touring our website, so that you can make an informed and well-considered decision about <a href="foster.php">foster care</a> or <a href="adopt.php">adoption</a>.</p>
	<div id="featured">
<?php
	$sql = 'SELECT * FROM news ORDER BY date DESC LIMIT 1';
	$result = mysql_query($sql);
	$row = mysql_fetch_assoc($result);
?>
   	  <div id="news" style="border-right: 1px dashed #666666">
        <h2>Do Your Part</h2>
        <?php
			$URLENCODE = "http://yp.yahoo.com/ypResults.py?stp=y&stx=8120307&city=Omaha&state=NE&uzip=68102&msa=5920&slt=41.257568&sln=-95.93718&cs=4&qtx=Animal+Clinics";
		?>
        <a href="<?php print htmlentities($URLENCODE); ?>" target="_blank"><img src="images/SpayPetBtn.jpg" alt="Spay/Neuter your pets." /></a>
        <br /><br />
       	<h2>News</h2>
<?php
	print "<h3>" . stripslashes($row['title']) . "</h3>";
	print "<p class=\"date\">Date: " . stripslashes($row['date']) . "</p>";
	print "<p>" . stripslashes($row['content']) . "</p>";
?>
   	    <p class="clearAll"><a href="news.php">More News...</a></p>
        </div>
        
        <div id="quick">
        	<h2>Popular Links</h2>
        	<ul>
            	<li><a href="adopt.php">I'm interested in adoption.</a></li>
                <li><a href="foster.php">I want to know more about foster care.</a></li>
                <li><a href="help.php">What can I do to help the rescue?</a></li>
                <li><a href="surrender.php">I want to surrender a Saint.</a></li>
                <li><a href="strays.php">What do I do with a stray?</a></li>
                <li><a href="events.php">What events do you have?</a></li>
                <li><a href="apply.php">Fill out an application.</a></li>
            </ul>
            <br />
            <h3>Our Saints</h3>
            <a href="dogs.php"><img src="images/MeetDogsBtn.jpg" alt="Meet the Dogs" /></a>        
        </div>
    </div>
  </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>