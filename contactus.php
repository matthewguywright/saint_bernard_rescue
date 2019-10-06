<?php
	$title = 'NE/IA Saint Bernard Rescue - Contact Us';
	$nav = 'contactus';
	
	if (isset($_POST['submit'])) {
	if (empty($_POST['FirstName']) || empty($_POST['LastName']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state']) || empty($_POST['zip']) || empty($_POST['inquiry']) || empty($_POST['comment']) ) {
		$message = 'Please make sure that all fields are completely filled out. Message was not sent!';
	} else {
		$email = $_POST['email'];
		$date = date('l jS \of F Y h:i:s A');
		//Email String-----------------------------------------
		$msg = "You received the following message on " . $date . ":" . "\n\n";	
		$msg .=  "First Name: ".$_POST["FirstName"]."\n";
		$msg .= "Last Name: ".$_POST["LastName"]."\n";
		$msg .= "E-mail: ".$_POST["email"]."\n";
		$msg .= "Phone: ".$_POST["phone"]."\n";
		$msg .= "Address: ".$_POST["address"]."\n";
		$msg .= "City: ".$_POST["city"]."\n";
		$msg .= "State: ".$_POST["state"]."\n";
		$msg .= "Zip: ".$_POST["zip"]."\n";
		$msg .= "Type: ".$_POST["inquiry"]."\n";
		$msg .= "Comment: ".$_POST["comment"]."\n";
	
		//Mail Header Information
		$recipient = "asawright13@aol.com, actwright13@yahoo.com";
		$subject = "Rescue Foundation Website Submission!";
		$mailheaders = "From:  ".$_POST["email"]."\n";
		$mailheaders .= "Reply-To: ".$_POST["email"]."\n";
	
		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
		//ECHO THANK YOU
		$message = "<p class=\"red\">Thanks for your submission!  We will contact you as soon as possible!</p>";
		}
	}
?>
<?php require_once("includes/top.php"); ?> 
<?php require_once("includes/navbar.php"); ?>    
    <div id="content_main">
    	<h2>Contact Us</h2>
        <p><?php if(isset($message)) { print $message; } ?></p>
<div id="contactDiv">
<form id="contactForm" name="contactForm" method="post" action="<?php print $_SERVER['PHP_SELF']; ?>">
<fieldset>
	<legend>E-Mail Information</legend>
    <p><label for="FirstName">First Name</label><input name="FirstName" type="text" size="30" /></p>
    <p><label for="LastName">Last Name</label><input name="LastName" type="text" size="30" /></p>
    <p><label for="email">E-Mail</label><input name="email" type="text" size="30" /></p>
    <p><label for="phone">Phone</label><input name="phone" type="text" size="30" /></p>
    <p><label for="address">Address</label><input name="address" type="text" size="30" /></p>
    <p><label for="city">City</label><input name="city" type="text" size="30" /></p>
    <p><label for="state">State</label><input name="state" type="text" size="30" /></p>
    <p><label for="zip">Zip Code</label><input name="zip" type="text" size="30" /></p>
    <p><label for="inquiry">Inquiry Type</label>
    <select name="inquiry" id="inquiry">
    <option value="Adoption">Adoption</option>
    <option value="Foster Care">Foster Care</option>
    <option value="Application Question">Application Question</option>
    <option value="Comment">Comment</option>
    <option value="Question">Question</option>
    <option value="Misc">Misc</option>
    <option value="Donation">Donation</option>
    <option value="Sponsorship">Sponsorship</option>
    </select>
    </p>
    <p><label for="comment">Comment</label><textarea name="comment" cols="40" rows="5"></textarea></p>
    <p>Serious inquiries only please. Make sure all fields are filled out.</p>
    <p><input type="submit" name="submit" id="submit" value="Send Email" /></p>
</fieldset>
</form>
</div>
    </div> <!--ENDS CONTENT_MAIN DIV-->
    
<?php require_once("includes/site_info.php"); ?>