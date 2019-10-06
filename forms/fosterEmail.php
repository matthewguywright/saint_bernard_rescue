<?php
		$email = $_SESSION['email'];
		$date = date('l jS \of F Y h:i:s A');
		//Email String-----------------------------------------

		$msg = "NE/IA Saint Bernard Rescue Foster Application" . "\n";
		$msg .= "Applicant's Name: " . stripslashes($_SESSION['Name']) . "\n\n";
		$msg .= "Date: " . $date . "\n\n";
		$msg .= "Address: " . stripslashes($_SESSION['addressBox']) . "\n";
		$msg .= "Phone: " . stripslashes($_SESSION['phone']) . "\n";
		$msg .= "Cell Phone: " . stripslashes($_SESSION['cellPhone']) . "\n";
		$msg .= "E-mail: " . stripslashes($_SESSION['email']) . "\n\n";	
		$msg .= "# Adults: " . stripslashes($_SESSION['numAdults']) . "\n";
		$msg .= "# Children: " . stripslashes($_SESSION['numChildren']) . "\n";
		$msg .= "Ages of Children: " . stripslashes($_SESSION['ageChildren']) . "\n\n";
		$msg .= "Is everyone in your household agreeable to you working with rescue dogs?: " . stripslashes($_SESSION['houseAgree']) . "\n\n";
		$msg .= "If you have children, will you teach them to love and care for your Saints in a humane manner?: " . stripslashes($_SESSION['teachChildren']) . "\n\n";
		$msg .= "Does anyone in your household have allergies?: " . stripslashes($_SESSION['allergies']) . "\n\n";
		$msg .= "Which members of your family will feed/care for the Saints?: " . stripslashes($_SESSION['whoWillCare']) . "\n\n";
		$msg .= "Does anyone in your home dislike dogs or other animals?: " . stripslashes($_SESSION['dislikeDogs']) . "\n\n";
		$msg .= "Please list the names, ages, and relationship of all family members in the household (list each member on a new line): \n" . str_replace('<br />',',', $_SESSION['familMembers']) . "\n\n";
		$msg .= "Household Type: " . stripslashes($_SESSION['homeType']) . "\n";
		$msg .= "Rent or Own: " . stripslashes($_SESSION['rentOrOwn']) . "\n\n";
		$msg .= "Landlord's Information:" . "\n\n";
		$msg .= "Name: " . stripslashes($_SESSION['landlordName']) . "\n";
		$msg .= "Address: " . stripslashes($_SESSION['landlordAddress']) . "\n";
		$msg .= "Phone: " . stripslashes($_SESSION['landlordPhone']) . "\n\n";
		$msg .= "If renting, be advised that you must provide written documentation to SBRF from your landlord confirming that you are authorized to house and maintain pets on the property(i.e., letter from landlord, pet addendum, or proof of pet deposits)." . "\n\n";
		$msg .= "If you have a fenced yard, please provide details:" . "\n\n";
		$msg .= "Fence height: " . stripslashes($_SESSION['fenceHeight']) . "\n";
		$msg .= "Fence type: " . stripslashes($_SESSION['fenceType']) . "\n";
		$msg .= "Size of fenced area: " . stripslashes($_SESSION['fenceAreaSize']) . "\n\n";
		$msg .= "Are you willing to install a fence or leash walk at all times?: " . stripslashes($_SESSION['leashWalk']) . "\n\n";
		$msg .= "Do you feel it is acceptable to let a dog roam freely?: " . stripslashes($_SESSION['roamFreely']) . "\n\n";
		$msg .= "Have you obedience trained a dog?: " . stripslashes($_SESSION['obedienceTrained']) . "\n\n";
		$msg .= "Are you willing to housebreak a dog?: " . stripslashes($_SESSION['houseBreak']) . "\n\n";
		$msg .= "During the night, the Saint would sleep where?: " . stripslashes($_SESSION['whereWouldSaintSleep']) . "\n\n";
		$msg .= "When you go away for a few days, who will care for the dog?: " . stripslashes($_SESSION['whoWillCare2']) . "\n\n";
		$msg .= "Explain what training method and collars you prefer: " . stripslashes($_SESSION['trainingMethod']) . "\n\n";
		$msg .= "Do you realize that Saints shed profusely (especially during the summer months), often drool or slobber, and rescue Saints often have behavioral problems?: " . stripslashes($_SESSION['awareOfSaintProblems']) . "\n\n";
		$msg .= "Are you willing to foster a dog that:" . "\n\n";
		$msg .= "Is 8 years of age or older?: " . stripslashes($_SESSION['eightOrOlder']) . "\n";
		$msg .= "Is not reliable with children?: " . stripslashes($_SESSION['notReliableWithChildren']) . "\n";
		$msg .= "Is physically handicapped?: " . stripslashes($_SESSION['handicapped']) . "\n";
		$msg .= "Has been abused?: " . stripslashes($_SESSION['abused']) . "\n";
		$msg .= "Requires ongoing meds?: " . stripslashes($_SESSION['needsMeds']) . "\n\n";
		$msg .= "On occasion, we recieve pairs of Saints that have bonded and need to remain together, would you consider fostering such a pair?: " . stripslashes($_SESSION['bondedSaints']) . "\n\n";
		$msg .= "FOSTER CARE ACKNOWLEDGEMENT\n\n";
		$msg .= "IN CONSIDERATION OF THE OPPORTUNITY TO FOSTER RESCUE DOGS, I AGREE TO THE FOLLOWING TERMS AND CONDITIONS, INCLUDING TO BE BOUND BY THEM:\n\n";
		$msg .= "I ASSUME THE RISKS OF BEING BITTEN, SCRATCHED, KNOCKED DOWN, INJURED OR FRIGHTENED, BY DOGS OR PUPPIES, IN CONNECTION WITH MY FOSTER CARE WORK FOR SAINT BERNARD RESCUE FOUNDATION, INC. (HEREAFTER \"FOUNDATION\"). I AGREE THAT THE FOUNDATION IS NOT LIABLE TO ME OR OTHERS FOR ANY INJURIES, DAMAGES, LIABILITIES, LOSSES, JUDGEMENTS, COSTS OR EXPENSES WHATSOEVER, WHICH I OR OTHERS MIGHT SUFFER, OR SUSTAIN IN CONNECTION WITH THE PERFORMANCE OF MY FOSTER CARE ACTIVITIES FOR THE FOUNDATION, UNLESS THEY ARE THE RESULT OF THE FOUNDATION'S GROSS NEGLIGENCE OR INTENTIONAL MISCONDUCT. I WILL INDEMNIFY, DEFEND, AND HOLD HARMLESS THE FOUNDATION, ITS VOLUNTEERS, OFFICERS, DIRECTORS AND REPRESENTATIVES, FROM AND AGAINST ANY CLAIMS, LEGAL ACTIONS, INJURIES, DAMAGES, LOSSES, COSTS OR EXPENSES (INCLUDING ATTORNEY FEES) WHATSOEVER SUSTAINED BY ANY PROPERTY, ANIMAL OR PERSON IN CONNECTION WITH MY INTENTIONAL MISCONDUCT OR GROSSLY NEGLIGENT PERFORMANCE OF FOSTER CARE ACTIVITIES FOR THE FOUNDATION, OR MY BREACH OF THE FOUNDATION RULES, REGULATIONS, PROCEDURES, POLICIES, OR PROGRAMS.\n\n";
		$msg .= "ALL OF THE INFORMATION I HAVE PROVIDED IN THIS APPLICATION IS, TO THE BEST OF MY KNOWLEDGE, TRUE AND COMPLETE. I UNDERSTAND THAT FALSIFYING ANSWERS IN THIS APPLICATION OR AT ANY OTHER TIME DURING THE FOSTER PROCESS DISQUALIFIES ME FROM FOSTER CARE.\n\n";
		$msg .= "BY TYPING BELOW, YOU ARE SIGNING THIS DOCUMENT AND AGREEING TO THE TERMS LISTED ABOVE.\n\n";
		$msg .= "Signature of foster person(s):\n\n";
		$msg .= "X " . stripslashes($_SESSION['signature1']) . "\n";
		$msg .= "X " . stripslashes($_SESSION['signature2']) . "\n\n";
		$msg .= "Add to Mailing List: " . $_SESSION['mailingList'] . "\n\n";
		$msg .= "Visit our website and read through our foster care section. We will be in contact with you as soon as possible. Thank you for your application, and we hope to share the joy of fostering a Saint with you in the near future!\n\n";
		$msg .= "Al and Sabrina Wright, NE/IA Saint Bernard Rescue";
		
		//Mail Header Information
		$recipient = "asawright13@aol.com, actwright13@yahoo.com";
		$subject = "NE/IA Rescue Foundation Foster Application - " . stripslashes($_SESSION['Name']);
		$mailheaders = "From:  " . $_SESSION["email"] . "\n";
		$mailheaders .= "Reply-To: " . $_SESSION["email"] . "\n";
	
		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
	if(mail($recipient, $subject, $msg, $mailheaders)) {
		$email = $_SESSION['email'];
		$date = date('l jS \of F Y h:i:s A');
		//Email String-----------------------------------------

		$msg = "NE/IA Saint Bernard Rescue Foster Application" . "\n";
		$msg .= "Applicant's Name: " . stripslashes($_SESSION['Name']) . "\n\n";
		$msg .= "Date: " . $date . "\n\n";
		$msg .= "Phone: " . stripslashes($_SESSION['phone']) . "\n";
		$msg .= "Cell Phone: " . stripslashes($_SESSION['cellPhone']) . "\n";
		$msg .= "E-mail: " . stripslashes($_SESSION['email']) . "\n\n";	
		$msg .= "# Adults: " . stripslashes($_SESSION['numAdults']) . "\n";
		$msg .= "# Children: " . stripslashes($_SESSION['numChildren']) . "\n";
		$msg .= "Ages of Children: " . stripslashes($_SESSION['ageChildren']) . "\n\n";
		$msg .= "Is everyone in your household agreeable to you working with rescue dogs?: " . stripslashes($_SESSION['houseAgree']) . "\n\n";
		$msg .= "If you have children, will you teach them to love and care for your Saints in a humane manner?: " . stripslashes($_SESSION['teachChildren']) . "\n\n";
		$msg .= "Does anyone in your household have allergies?: " . stripslashes($_SESSION['allergies']) . "\n\n";
		$msg .= "Which members of your family will feed/care for the Saints?: " . stripslashes($_SESSION['whoWillCare']) . "\n\n";
		$msg .= "Does anyone in your home dislike dogs or other animals?: " . stripslashes($_SESSION['dislikeDogs']) . "\n\n";
		$msg .= "Please list the names, ages, and relationship of all family members in the household (list each member on a new line): \n" . str_replace('<br />',',', $_SESSION['familMembers']) . "\n\n";
		$msg .= "Household Type: " . stripslashes($_SESSION['homeType']) . "\n";
		$msg .= "Rent or Own: " . stripslashes($_SESSION['rentOrOwn']) . "\n\n";
		$msg .= "Landlord's Information:" . "\n\n";
		$msg .= "Name: " . stripslashes($_SESSION['landlordName']) . "\n";
		$msg .= "Address: " . stripslashes($_SESSION['landlordAddress']) . "\n";
		$msg .= "Phone: " . stripslashes($_SESSION['landlordPhone']) . "\n\n";
		$msg .= "If renting, be advised that you must provide written documentation to SBRF from your landlord confirming that you are authorized to house and maintain pets on the property(i.e., letter from landlord, pet addendum, or proof of pet deposits)." . "\n\n";
		$msg .= "If you have a fenced yard, please provide details:" . "\n\n";
		$msg .= "Fence height: " . stripslashes($_SESSION['fenceHeight']) . "\n";
		$msg .= "Fence type: " . stripslashes($_SESSION['fenceType']) . "\n";
		$msg .= "Size of fenced area: " . stripslashes($_SESSION['fenceAreaSize']) . "\n\n";
		$msg .= "Are you willing to install a fence or leash walk at all times?: " . stripslashes($_SESSION['leashWalk']) . "\n\n";
		$msg .= "Do you feel it is acceptable to let a dog roam freely?: " . stripslashes($_SESSION['roamFreely']) . "\n\n";
		$msg .= "Have you obedience trained a dog?: " . stripslashes($_SESSION['obedienceTrained']) . "\n\n";
		$msg .= "Are you willing to housebreak a dog?: " . stripslashes($_SESSION['houseBreak']) . "\n\n";
		$msg .= "During the night, the Saint would sleep where?: " . stripslashes($_SESSION['whereWouldSaintSleep']) . "\n\n";
		$msg .= "When you go away for a few days, who will care for the dog?: " . stripslashes($_SESSION['whoWillCare2']) . "\n\n";
		$msg .= "Explain what training method and collars you prefer: " . stripslashes($_SESSION['trainingMethod']) . "\n\n";
		$msg .= "Do you realize that Saints shed profusely (especially during the summer months), often drool or slobber, and rescue Saints often have behavioral problems?: " . stripslashes($_SESSION['awareOfSaintProblems']) . "\n\n";
		$msg .= "Are you willing to foster a dog that:" . "\n\n";
		$msg .= "Is 8 years of age or older?: " . stripslashes($_SESSION['eightOrOlder']) . "\n";
		$msg .= "Is not reliable with children?: " . stripslashes($_SESSION['notReliableWithChildren']) . "\n";
		$msg .= "Is physically handicapped?: " . stripslashes($_SESSION['handicapped']) . "\n";
		$msg .= "Has been abused?: " . stripslashes($_SESSION['abused']) . "\n";
		$msg .= "Requires ongoing meds?: " . stripslashes($_SESSION['needsMeds']) . "\n\n";
		$msg .= "On occasion, we recieve pairs of Saints that have bonded and need to remain together, would you consider fostering such a pair?: " . stripslashes($_SESSION['bondedSaints']) . "\n\n";
		$msg .= "FOSTER CARE ACKNOWLEDGEMENT\n\n";
		$msg .= "IN CONSIDERATION OF THE OPPORTUNITY TO FOSTER RESCUE DOGS, I AGREE TO THE FOLLOWING TERMS AND CONDITIONS, INCLUDING TO BE BOUND BY THEM:\n\n";
		$msg .= "I ASSUME THE RISKS OF BEING BITTEN, SCRATCHED, KNOCKED DOWN, INJURED OR FRIGHTENED, BY DOGS OR PUPPIES, IN CONNECTION WITH MY FOSTER CARE WORK FOR SAINT BERNARD RESCUE FOUNDATION, INC. (HEREAFTER \"FOUNDATION\"). I AGREE THAT THE FOUNDATION IS NOT LIABLE TO ME OR OTHERS FOR ANY INJURIES, DAMAGES, LIABILITIES, LOSSES, JUDGEMENTS, COSTS OR EXPENSES WHATSOEVER, WHICH I OR OTHERS MIGHT SUFFER, OR SUSTAIN IN CONNECTION WITH THE PERFORMANCE OF MY FOSTER CARE ACTIVITIES FOR THE FOUNDATION, UNLESS THEY ARE THE RESULT OF THE FOUNDATION'S GROSS NEGLIGENCE OR INTENTIONAL MISCONDUCT. I WILL INDEMNIFY, DEFEND, AND HOLD HARMLESS THE FOUNDATION, ITS VOLUNTEERS, OFFICERS, DIRECTORS AND REPRESENTATIVES, FROM AND AGAINST ANY CLAIMS, LEGAL ACTIONS, INJURIES, DAMAGES, LOSSES, COSTS OR EXPENSES (INCLUDING ATTORNEY FEES) WHATSOEVER SUSTAINED BY ANY PROPERTY, ANIMAL OR PERSON IN CONNECTION WITH MY INTENTIONAL MISCONDUCT OR GROSSLY NEGLIGENT PERFORMANCE OF FOSTER CARE ACTIVITIES FOR THE FOUNDATION, OR MY BREACH OF THE FOUNDATION RULES, REGULATIONS, PROCEDURES, POLICIES, OR PROGRAMS.\n\n";
		$msg .= "ALL OF THE INFORMATION I HAVE PROVIDED IN THIS APPLICATION IS, TO THE BEST OF MY KNOWLEDGE, TRUE AND COMPLETE. I UNDERSTAND THAT FALSIFYING ANSWERS IN THIS APPLICATION OR AT ANY OTHER TIME DURING THE FOSTER PROCESS DISQUALIFIES ME FROM FOSTER CARE.\n\n";
		$msg .= "BY TYPING BELOW, YOU ARE SIGNING THIS DOCUMENT AND AGREEING TO THE TERMS LISTED ABOVE.\n\n";
		$msg .= "Signature of foster person(s):\n\n";
		$msg .= "X " . stripslashes($_SESSION['signature1']) . "\n";
		$msg .= "X " . stripslashes($_SESSION['signature2']) . "\n\n";
		$msg .= "Add to Mailing List: " . $_SESSION['mailingList'] . "\n\n";
		$msg .= "Visit our website and read through our foster care section. We will be in contact with you as soon as possible. Thank you for your application, and we hope to share the joy of fostering a Saint with you in the near future!\n\n";
		$msg .= "Al and Sabrina Wright, NE/IA Saint Bernard Rescue";
		
		//Mail Header Information
		$recipient = "$email";
		$subject = "NE/IA Rescue Foundation Foster Application - " . stripslashes($_SESSION['Name']);
		$mailheaders = "From:  " . $_SESSION["email"] . "\n";
		$mailheaders .= "Reply-To: " . $_SESSION["email"] . "\n";
	
		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
	}
?>