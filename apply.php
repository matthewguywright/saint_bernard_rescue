<?php
	session_start();
	if($_GET['app'] == 'a' || $_GET['app'] == 'f') {
		$app = $_GET['app'];
		$_SESSION['APPLICATION'] = true;
		$TRUE = $_SESSION['APPLICATION'];
		if ($app) {
			if ($app == 'a') {
				$_SESSION['APP_TYPE'] = 'adoption';
				$_SESSION['APP_STAGE'] = 1;
			} elseif ($app == 'f') {
				$_SESSION['APP_TYPE'] = 'foster';
				$_SESSION['APP_STAGE'] = 1;
			}
		}
	}
//*******************************************************************************************************************************
	if ($_SESSION['APP_TYPE'] == 'adoption') {
		if( isset($_POST['submitStage1']) ) {
			$_SESSION['APP_STAGE'] = 2;
		} elseif ( isset($_POST['submitStage2']) ) {
			$_SESSION['APP_STAGE'] = 3;
		} elseif ( isset($_POST['submitStage3']) ) {
			$_SESSION['APP_STAGE'] = 4;
		}
	}
	/*if ($_SESSION['APP_TYPE'] == 'foster') {
		if( isset($_POST['submitStage1']) ) {
			$_SESSION['APP_STAGE'] = 'complete';
		}
	}*/
?>
<?php
	//***************************** PROCESS FOSTER FORM *****************************************************************************
	//foreach($_POST as $key => $value){
		//print "\$_SESSION['$key'] = \$_POST['$key'];" . "<br />";
	//}
	if( isset($_POST['submitStage1']) && $_SESSION['APP_TYPE'] == 'foster' ) {
		if(empty($_POST['Name']) || empty($_POST['email']) || empty($_POST['signature1']) ) {
			$formMessage = "Make sure that all fields are completely filled out. Application was not sent!";
			$_SESSION['APP_STAGE'] = 1;
		} else {
			$_SESSION['Name'] = $_POST['Name'];
			$_SESSION['numAdults'] = $_POST['numAdults'];
			$_SESSION['numChildren'] = $_POST['numChildren'];
			$_SESSION['ageChildren'] = $_POST['ageChildren'];
			$_SESSION['whoWillCare'] = $_POST['whoWillCare'];
			$_SESSION['familMembers'] = nl2br($_POST['familMembers']);
			$_SESSION['phone'] = $_POST['phone'];
			$_SESSION['cellPhone'] = $_POST['cellPhone'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['landlordName'] = $_POST['landlordName'];
			$_SESSION['landlordAddress'] = $_POST['landlordAddress'];
			$_SESSION['landlordPhone'] = $_POST['landlordPhone'];
			$_SESSION['fenceHeight'] = $_POST['fenceHeight'];
			$_SESSION['fenceType'] = $_POST['fenceType'];
			$_SESSION['fenceAreaSize'] = $_POST['fenceAreaSize'];
			$_SESSION['whereWouldSaintSleep'] = $_POST['whereWouldSaintSleep'];
			$_SESSION['whoWillCare2'] = $_POST['whoWillCare2'];
			$_SESSION['trainingMethod'] = $_POST['trainingMethod'];
			$_SESSION['signature1'] = $_POST['signature1'];
			$_SESSION['signature1Date'] = $_POST['signature1Date'];
			$_SESSION['signature2'] = $_POST['signature2'];
			$_SESSION['signature2Date'] = $_POST['signature2Date'];
			$_SESSION['addressBox'] = $_POST['addressBox'];
			$_SESSION['houseAgree'] = $_POST['houseAgree'];
			$_SESSION['teachChildren'] = $_POST['teachChildren'];
			$_SESSION['allergies'] = $_POST['allergies'];
			$_SESSION['dislikeDogs'] = $_POST['dislikeDogs'];
			$_SESSION['homeType'] = $_POST['homeType'];
			$_SESSION['rentOrOwn'] = nl2br($_POST['rentOrOwn']);
			$_SESSION['leashWalk'] = $_POST['leashWalk'];
			$_SESSION['roamFreely'] = $_POST['roamFreely'];
			$_SESSION['obedienceTrained'] = $_POST['obedienceTrained'];
			$_SESSION['houseBreak'] = $_POST['houseBreak'];
			$_SESSION['awareOfSaintProblems'] = $_POST['awareOfSaintProblems'];
			$_SESSION['eightOrOlder'] = $_POST['eightOrOlder'];
			$_SESSION['notReliableWithChildren'] = $_POST['notReliableWithChildren'];
			$_SESSION['handicapped'] = $_POST['handicapped'];
			$_SESSION['abused'] = $_POST['abused'];
			$_SESSION['needsMeds'] = $_POST['needsMeds'];
			$_SESSION['bondedSaints'] = $_POST['bondedSaints'];
			$_SESSION['mailingList'] = $_POST['mailingList'];
					
			require_once('forms/fosterEmail.php');
			$_SESSION['APP_STAGE'] = 'complete';
		}
	}
?>	
<?php
	//***************************** PROCESS ADOPTION FORM ***********************************************************
	//foreach($_POST as $key => $value){
		//print "\$_SESSION['$key'] = \$_POST['$key'];" . "<br />";
	//}
	if( isset($_POST['submitStage1']) && $_SESSION['APP_TYPE'] == 'adoption' ) {	
		$_SESSION['Name'] = $_POST['Name'];
		$_SESSION['Spouse'] = $_POST['Spouse'];
		$_SESSION['address'] = $_POST['address'];
		$_SESSION['city'] = $_POST['city'];
		$_SESSION['state'] = $_POST['state'];
		$_SESSION['zip'] = $_POST['zip'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['homePhone'] = $_POST['homePhone'];
		$_SESSION['workPhone'] = $_POST['workPhone'];
		$_SESSION['occupation'] = $_POST['occupation'];
		$_SESSION['numAdults'] = $_POST['numAdults'];
		$_SESSION['numChildren'] = $_POST['numChildren'];
		$_SESSION['ageChildren'] = $_POST['ageChildren'];
		$_SESSION['previousAddress'] = $_POST['previousAddress'];
		$_SESSION['houseMembers'] = $_POST['houseMembers'];
		$_SESSION['whoWillCare'] = $_POST['whoWillCare'];
		$_SESSION['breed1'] = $_POST['breed1'];
		$_SESSION['sex1'] = $_POST['sex1'];
		$_SESSION['age1'] = $_POST['age1'];
		$_SESSION['spayNeuter1'] = $_POST['spayNeuter1'];
		$_SESSION['stillOwn1'] = $_POST['stillOwn1'];
		$_SESSION['breed2'] = $_POST['breed2'];
		$_SESSION['sex2'] = $_POST['sex2'];
		$_SESSION['age2'] = $_POST['age2'];
		$_SESSION['spayNeuter2'] = $_POST['spayNeuter2'];
		$_SESSION['stillOwn2'] = $_POST['stillOwn2'];
		$_SESSION['breed3'] = $_POST['breed3'];
		$_SESSION['sex3'] = $_POST['sex3'];
		$_SESSION['age3'] = $_POST['age3'];
		$_SESSION['spayNeuter3'] = $_POST['spayNeuter3'];
		$_SESSION['stillOwn3'] = $_POST['stillOwn3'];
		$_SESSION['breed4'] = $_POST['breed4'];
		$_SESSION['sex4'] = $_POST['sex4'];
		$_SESSION['age4'] = $_POST['age4'];
		$_SESSION['spayNeuter4'] = $_POST['spayNeuter4'];
		$_SESSION['stillOwn4'] = $_POST['stillOwn4'];
		$_SESSION['whatHappened'] = $_POST['whatHappened'];
		$_SESSION['shots'] = $_POST['shots'];
		$_SESSION['heartWorm'] = $_POST['heartWorm'];
		$_SESSION['ownedSaints'] = $_POST['ownedSaints'];
		$_SESSION['otherPets'] = $_POST['otherPets'];
	}
	if( isset($_POST['submitStage2']) && $_SESSION['APP_TYPE'] == 'adoption' ) {
		$_SESSION['whereLearned'] = $_POST['whereLearned'];
		$_SESSION['coatLength'] = $_POST['coatLength'];
		$_SESSION['desiredSex'] = $_POST['desiredSex'];
		$_SESSION['desiredAge'] = $_POST['desiredAge'];
		$_SESSION['eightOrOlder'] = $_POST['eightOrOlder'];
		$_SESSION['notReliableWithChildren'] = $_POST['notReliableWithChildren'];
		$_SESSION['handicapped'] = $_POST['handicapped'];
		$_SESSION['abused'] = $_POST['abused'];
		$_SESSION['needsMeds'] = $_POST['needsMeds'];
		$_SESSION['bondedSaints'] = $_POST['bondedSaints'];
		$_SESSION['takeAnotherDog'] = $_POST['takeAnotherDog'];
		$_SESSION['awareOfFee'] = $_POST['awareOfFee'];
		$_SESSION['payFee'] = $_POST['payFee'];		
		$_SESSION['undesirableChar'] = $_POST['undesirableChar'];
		$_SESSION['refName1'] = $_POST['refName1'];
		$_SESSION['refAddress1'] = $_POST['refAddress1'];
		$_SESSION['refPhone1'] = $_POST['refPhone1'];
		$_SESSION['refName2'] = $_POST['refName2'];
		$_SESSION['refAddress2'] = $_POST['refAddress2'];
		$_SESSION['refPhone2'] = $_POST['refPhone2'];
		$_SESSION['refName3'] = $_POST['refName3'];
		$_SESSION['refAddress3'] = $_POST['refAddress3'];
		$_SESSION['refPhone3'] = $_POST['refPhone3'];
	}
	if( isset($_POST['submitStage3']) && $_SESSION['APP_TYPE'] == 'adoption' ) {
		$_SESSION['daytimePlace'] = $_POST['daytimePlace'];
		$_SESSION['specifyOtherPlace'] = $_POST['specifyOtherPlace'];
		$_SESSION['whereWouldSaintSleep'] = $_POST['whereWouldSaintSleep'];
		$_SESSION['homeCheck'] = $_POST['homeCheck'];
		$_SESSION['houseBreak'] = $_POST['houseBreak'];
		$_SESSION['expensiveCare'] = $_POST['expensiveCare'];
		$_SESSION['vowForLifetime'] = $_POST['vowForLifetime'];		
		$_SESSION['vetName'] = $_POST['vetName'];
		$_SESSION['vetAddress'] = $_POST['vetAddress'];
		$_SESSION['vetCity'] = $_POST['vetCity'];
		$_SESSION['vetPhone'] = $_POST['vetPhone'];
		$_SESSION['careWhenGone'] = $_POST['careWhenGone'];
		$_SESSION['awareOfSaintProblems'] = $_POST['awareOfSaintProblems'];
		$_SESSION['obedienceTrained'] = $_POST['obedienceTrained'];		
		$_SESSION['trainingMethod'] = $_POST['trainingMethod'];
		$_SESSION['whatLookingFor'] = $_POST['whatLookingFor'];
	}
	if( isset($_POST['submitStage4']) && $_SESSION['APP_TYPE'] == 'adoption' ) {
		$_SESSION['adoptASaintFor'] = $_POST['adoptASaintFor'];
		$_SESSION['adoptASaintForOther'] = $_POST['adoptASaintForOther'];
		$_SESSION['houseAgree'] = $_POST['houseAgree'];
		$_SESSION['teachChildren'] = $_POST['teachChildren'];
		$_SESSION['allergies'] = $_POST['allergies'];
		$_SESSION['dislikeDogs'] = $_POST['dislikeDogs'];
		$_SESSION['hoursHome'] = $_POST['hoursHome'];
		$_SESSION['homeType'] = $_POST['homeType'];
		$_SESSION['rentOrOwn'] = $_POST['rentOrOwn'];		
		$_SESSION['landlordName'] = $_POST['landlordName'];
		$_SESSION['landlordAddress'] = $_POST['landlordAddress'];
		$_SESSION['landlordPhone'] = $_POST['landlordPhone'];
		$_SESSION['fenceHeight'] = $_POST['fenceHeight'];
		$_SESSION['fenceType'] = $_POST['fenceType'];
		$_SESSION['fenceAreaSize'] = $_POST['fenceAreaSize'];
		$_SESSION['leashWalk'] = $_POST['leashWalk'];
		$_SESSION['roamFreely'] = $_POST['roamFreely'];
		$_SESSION['signature1'] = $_POST['signature1'];
		$_SESSION['signature2'] = $_POST['signature2'];
		$_SESSION['mailingList'] = $_POST['mailingList'];
		
		require_once('forms/adoptionEmail.php');
		$_SESSION['APP_STAGE'] = 'complete';	
	}
?>
<?php
	$title = 'NE/IA Saint Bernard Rescue - Apply';
	$nav = '';
?>
<?php require_once("includes/top.php"); ?>
<?php require_once("includes/navbar.php"); ?>
<script type="text/javascript">
<?php
	if( isset($_SESSION['APP_TYPE']) ) {
		if($_SESSION['APP_TYPE'] == 'adoption') { ?> 
	$(function() {
		$('ul#application li a[name=adoption]').addClass('selectedApp');
		$('ul#application li a[name=foster]').addClass('dimmedApp');
	});
	<?php } else { ?>
	$(function() {
		$('ul#application li a[name=foster]').addClass('selectedApp');
		$('ul#application li a[name=adoption]').addClass('dimmedApp');
	});
	<?php } ?>
<?php } ?>
</script>
<script type="text/javascript">
$(function() {
	//PROGRESS INDICATORS
	<?php
		if($_SESSION['APP_STAGE'] == 1) { ?>
			$('div#stageIndicator img#one').attr('src','images/complete.jpg');
		<?php } elseif($_SESSION['APP_STAGE'] == 2 || ($_SESSION['APP_TYPE'] == 'foster' && $_SESSION['APP_STAGE']) == 'complete') { ?>
			$('div#stageIndicator ul li img#one').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#two').attr('src','images/complete.jpg');
		<?php } elseif($_SESSION['APP_STAGE'] == 3) { ?>
			$('div#stageIndicator ul li img#one').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#two').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#three').attr('src','images/complete.jpg');
		<?php } elseif($_SESSION['APP_STAGE'] == 4) { ?>
			$('div#stageIndicator ul li img#one').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#two').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#three').attr('src','images/complete.jpg');
			$('div#stageIndicator ul li img#four').attr('src','images/complete.jpg');
		<?php } elseif($_SESSION['APP_STAGE'] == 'complete') { ?>
			$('div#stageIndicator ul li img').attr('src','images/complete.jpg');
		<?php }
	?>
});
</script>
    
    <div id="content_main_app">
    	<?php if( $_SESSION['APP_STAGE'] != 'complete' || !isset($_SESSION['APP_STAGE']) ) { ?>
        <h2>Apply</h2>
        <p>All applications must be completely filled out. Incomplete applications may have to be redone or will be rejected until their completion. Read the application carefully and answer all questions honestly. It may take 10 minutes up to an hour to complete the application. All fields are required. </p>
        <p class="bold">If a field does not pertain to you,  put &quot;N/A&quot; or a zero.</p>
      <?php if(!isset($_SESSION['APP_TYPE'])) { ?>
      <p>Choose an application to get started.</p> 
	  <?php } ?>
	  <?php } ?>
  <ul id="application">
        	<li><a name="adoption" href="<?php print $_SERVER['PHP_SELF'] . "?app=a"; ?>">Adoption Application</a></li>
            <li><a name="foster" href="<?php print $_SERVER['PHP_SELF'] . "?app=f"; ?>">Foster Application</a></li>
        </ul>
        <?php 
			if($_SESSION['APP_STAGE'] != 'complete' && isset($_SESSION['APP_TYPE'])) { ?>
        <div id="stageIndicator">
        	<ul>
            	<li><img id="one" src="images/incomplete.jpg" alt="Incomplete" /></li>
                <li><img id="two" src="images/incomplete.jpg" alt="Incomplete" /></li>
<?php
                if($_SESSION['APP_TYPE'] == 'adoption') { ?>
                	<li><img id="three" src="images/incomplete.jpg" alt="Incomplete" /></li>
                	<li><img id="four" src="images/incomplete.jpg" alt="Incomplete" /></li>
                	<li><img id="five" src="images/incomplete.jpg" alt="Incomplete" /></li>
              <?php } ?>
            </ul>
        </div>
        <?php } ?>
        
        <br />
        <?php if(isset($formMessage)) { print "<p style=\"color: #FF0000;\">" . $formMessage . "</p><br />"; } ?>
        <div id="appDiv"> 
        	<?php
				if ($_SESSION['APPLICATION'] && isset($_SESSION['APP_TYPE'])) {
					if( $_SESSION['APP_TYPE'] == 'adoption' ) {
						switch($_SESSION['APP_STAGE']) {
							case 1:
								require_once('forms/adoption1.html');
							break;
							case 2:
								require_once('forms/adoption2.html');
							break;
							case 3:
								require_once('forms/adoption3.html');
							break;
							case 4:
								require_once('forms/adoption4.html');
							break;
							case 'complete':
								require_once('forms/adoption_complete.html');
							break;
							default:
								require_once('forms/adoption1.html');
						}
					}
					
					if ($_SESSION['APP_TYPE'] == 'foster') {
						switch($_SESSION['APP_STAGE']) {
							case 1:
								require_once('forms/foster1.html');
							break;
							case 'complete':
								require_once('forms/foster_completed.html');
							break;
							default:
								require_once('forms/foster1.html');
						}
					}
				}
			?>
        </div> <!--ENDS APP DIV-->
    </div> <!--ENDS CONTENT_MAIN_APP DIV-->
    
<?php require_once("includes/site_info_app.php"); ?>