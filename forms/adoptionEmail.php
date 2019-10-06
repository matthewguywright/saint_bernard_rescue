<?php
		$email = $_SESSION['email'];
		$date = date('l jS \of F Y h:i:s A');
		//Email String-----------------------------------------

		$msg = "NE/IA Saint Bernard Rescue Adoption Application" . "\n";
		$msg .= "Applicant's Name: " . stripslashes($_SESSION['Name']) . "\n";
		$msg .= "Spouse: " . stripslashes($_SESSION['Spouse']) . "\n\n";
		$msg .= "Date: " . $date . "\n\n";
		$msg .= "Address: " . stripslashes($_SESSION['address']) . "\n";
		$msg .= "City: " . stripslashes($_SESSION['city']) . "\n";
		$msg .= "State: " . stripslashes($_SESSION['state']) . "\n";
		$msg .= "Zip: " . stripslashes($_SESSION['zip']) . "\n";	
		$msg .= "E-mail: " . stripslashes($_SESSION['email']) . "\n";	
		$msg .= "Home Phone: " . stripslashes($_SESSION['homePhone']) . "\n";	
		$msg .= "Work Phone: " . stripslashes($_SESSION['workPhone']) . "\n";	
		$msg .= "Occupation: " . stripslashes($_SESSION['occupation']) . "\n";	
		$msg .= "# Adults: " . stripslashes($_SESSION['numAdults']) . "\n";	
		$msg .= "# Children: " . stripslashes($_SESSION['numChildren']) . "\n";	
		$msg .= "Children's Ages: " . stripslashes($_SESSION['ageChildren']) . "\n\n";
		$msg .= "If less than 5 years, give previous address below." . "\n";
		$msg .= "Previous Address: " . stripslashes($_SESSION['previousAddress']) . "\n\n";	
		$msg .= "Please list names and ages of all members of the household (list each member on a new line):" . "\n";
		$msg .= "House Members: " . stripslashes($_SESSION['houseMembers']) . "\n";	
		$msg .= "Which family members will feed/care for the Saint(s)?: " . stripslashes($_SESSION['whoWillCare']) . "\n\n";
		$msg .= "Previous Pets" . "\n";
		$msg .= "What other dogs have you owned in the last 3 years?:" . "\n\n";
		
		$msg .= "#1" . "\n";
		$msg .= "Breed: " . stripslashes($_SESSION['breed1']) . "\n";	
		$msg .= "Sex: " . stripslashes($_SESSION['sex1']) . "\n";	
		$msg .= "Age: " . stripslashes($_SESSION['age1']) . "\n";	
		$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter1']) . "\n";	
		$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn1']) . "\n";	
		$msg .= "\n";	
		
		$msg .= "#2" . "\n";
		$msg .= "Breed: " . stripslashes($_SESSION['breed2']) . "\n";	
		$msg .= "Sex: " . stripslashes($_SESSION['sex2']) . "\n";	
		$msg .= "Age: " . stripslashes($_SESSION['age2']) . "\n";	
		$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter2']) . "\n";	
		$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn2']) . "\n";	
		$msg .= "\n";		
		
		$msg .= "#3" . "\n";
		$msg .= "Breed: " . stripslashes($_SESSION['breed3']) . "\n";	
		$msg .= "Sex: " . stripslashes($_SESSION['sex3']) . "\n";	
		$msg .= "Age: " . stripslashes($_SESSION['age3']) . "\n";	
		$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter3']) . "\n";	
		$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn3']) . "\n";	
		$msg .= "\n";		
		
		$msg .= "#4" . "\n";
		$msg .= "Breed: " . stripslashes($_SESSION['breed4']) . "\n";	
		$msg .= "Sex: " . stripslashes($_SESSION['sex4']) . "\n";	
		$msg .= "Age: " . stripslashes($_SESSION['age4']) . "\n";	
		$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter4']) . "\n";	
		$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn4']) . "\n";	
		$msg .= "\n";
		
		$msg .= "If you answered \"No\" to still having a dog listed above, state what happened to the dog: " . stripslashes($_SESSION['whatHappened']) ."\n";	
		$msg .= "Are your pets up to date on all shots?: " . stripslashes($_SESSION['shots']) ."\n";	
		$msg .= "Are your pets on heartworm preventative?: " . stripslashes($_SESSION['heartWorm']) ."\n";	
		$msg .= "Have you owned Saints before?: " . stripslashes($_SESSION['ownedSaints']) ."\n";		
		$msg .= "Do you have other pets? (list each pet on a new line): " . stripslashes($_SESSION['otherPets']) ."\n\n";	
		$msg .= "How or where have you learned about this breed? " . stripslashes($_SESSION['whereLearned']) . "\n\n";
		
		$msg .= "Tell us what you're looking for." . "\n\n";
		
		$msg .= "Coat length: " . stripslashes($_SESSION['coatLength']) ."\n";
		$msg .= "Sex: " . stripslashes($_SESSION['desiredSex']) ."\n";
		$msg .= "Age(years): " . stripslashes($_SESSION['desiredAge']) ."\n\n";
		
		$msg .= "Are you willing to adopt a dog that:" . "\n\n";
		
		$msg .= "Is 8 years of age or older?: " . stripslashes($_SESSION['eightOrOlder']) ."\n";
		$msg .= "Is not reliable with children?: " . stripslashes($_SESSION['notReliableWithChildren']) ."\n";
		$msg .= "Is physically handicapped?: " . stripslashes($_SESSION['handicapped']) ."\n";
		$msg .= "Has been abused?: " . stripslashes($_SESSION['abused']) ."\n";
		$msg .= "Requires ongoing medications?: " . stripslashes($_SESSION['needsMeds']) ."\n";
		$msg .= "On occasion we receive pairs of Saints that have bonded and need to remain together. Would you consider adopting such a pair?: " . stripslashes($_SESSION['bondedSaints']) ."\n";
		$msg .= "If you have chosen a particular dog, would you be willing to take another if the dog you chose has a medical or other problem that would prohibit the adoption at this time?: " . stripslashes($_SESSION['takeAnotherDog']) ."\n";
		$msg .= "Are you aware that Saint Bernard Rescue Foundation, Inc. requests an adoption fee for each adoption to help cover expenses in readying dogs for adoption?: " . stripslashes($_SESSION['awareOfFee']) ."\n";
		$msg .= "Are you prepared to pay this fee?: " . stripslashes($_SESSION['payFee']) ."\n";
		$msg .= "What characteristics do you find undesirable in a pet? " . stripslashes($_SESSION['undesirableChar']) . "\n\n";
		$msg .= "Personal references - must include a neighbor and exclude relatives who are employed in a pet-related field. (all three are required):" . "\n\n";
		
		$msg .= "#1" ."\n";
		$msg .= "Name: " . stripslashes($_SESSION['refName1']) ."\n";
		$msg .= "Address: " . stripslashes($_SESSION['refAddress1']) ."\n";
		$msg .= "Phone: " . stripslashes($_SESSION['refPhone1']) ."\n";
		$msg .= "\n";
		
		$msg .= "#2" ."\n";
		$msg .= "Name: " . stripslashes($_SESSION['refName2']) ."\n";
		$msg .= "Address: " . stripslashes($_SESSION['refAddress2']) ."\n";
		$msg .= "Phone: " . stripslashes($_SESSION['refPhone2']) ."\n";
		$msg .= "\n";		
		
		$msg .= "#3" ."\n";
		$msg .= "Name: " . stripslashes($_SESSION['refName3']) ."\n";
		$msg .= "Address: " . stripslashes($_SESSION['refAddress3']) ."\n";
		$msg .= "Phone: " . stripslashes($_SESSION['refPhone3']) ."\n";
		$msg .= "\n";
		
		$msg .= "Caring for the Saint" . "\n\n";
		$msg .= "During the day, the Saint would mostly be in the: " . stripslashes($_SESSION['daytimePlace']) ."\n";
		$msg .= "Please specify other: " . stripslashes($_SESSION['specifyOtherPlace']) ."\n";
		$msg .= "During the night, the Saint would sleep where?: " . stripslashes($_SESSION['whereWouldSaintSleep']) ."\n";
		$msg .= "Are you willing to have a home check before adopting?: " . stripslashes($_SESSION['homeCheck']) ."\n";
		$msg .= "Are you willing to housebreak a dog?: " . stripslashes($_SESSION['houseBreak']) ."\n";
		$msg .= "Are you aware that the vet bills for routine care of a Saint may cost between $100 and $500 or more per year?: " . stripslashes($_SESSION['expensiveCare']) ."\n";
		$msg .= "Are you willing to welcome a Saint into your family as a family member with a vow to care for it for its lifetime?: " . stripslashes($_SESSION['vowForLifetime']) ."\n\n";
		$msg .= "The following is required if you have pets." . "\n\n";
		$msg .= "Name, address and phone number of current or last veterinarian:" . "\n\n";
		$msg .= "Name: " . stripslashes($_SESSION['vetName']) ."\n";
		$msg .= "Address: " . stripslashes($_SESSION['vetAddress']) ."\n";
		$msg .= "City: " . stripslashes($_SESSION['vetCity']) ."\n";
		$msg .= "\n" . "Training for a Lifetime" . "\n\n";
		
		$msg .= "When you go away for a few days, who will care for the dog?: " . stripslashes($_SESSION['careWhenGone']) ."\n";
		$msg .= "Do you realize that Saints shed profusely (especially during the summer months), often drool or slobber and are prone to hip problems?: " . stripslashes($_SESSION['awareOfSaintProblems']) . "\n";
		$msg .= "Have you obedience trained a dog?: " . stripslashes($_SESSION['obedienceTrained']) . "\n";
		$msg .= "Explain what training method and collars you prefer: " . stripslashes($_SESSION['trainingMethod']) . "\n";
		$msg .= "What specifics are you looking for in a Saint? If you are interested in adopting a particular dog (opens a new window), please specify it's name, and give your reason(s): " . stripslashes($_SESSION['whatLookingFor']) . "\n";
		
		$msg .= "I would like to adopt a Saint for: " . stripslashes($_SESSION['adoptASaintFor']) ."\n";
		$msg .= "Please specify other: " . stripslashes($_SESSION['adoptASaintForOther']) ."\n";
		$msg .= "Is everyone in your household agreeable to you adopting a rescue dog?: " . stripslashes($_SESSION['houseAgree']) ."\n";
		$msg .= "If you have children, will you teach them to love and care for your Saint in a human manner?: " . stripslashes($_SESSION['teachChildren']) ."\n";
		$msg .= "Does anyone in your household have animal allergies?: " . stripslashes($_SESSION['allergies']) ."\n";
		$msg .= "Does anyone in your household dislike dogs or other animals?: " . stripslashes($_SESSION['dislikeDogs']) ."\n";
		$msg .= "How many hours would the Saint be home alone for each day?: " . stripslashes($_SESSION['hoursHome']) ."\n";
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
		$msg .= "If your yard is not currently fenced, are you willing to install a fence or leash walk at all times?: " . stripslashes($_SESSION['leashWalk']) . "\n";
		$msg .= "Do you feel it is acceptable to let a dog roam freely?: " . stripslashes($_SESSION['roamFreely']) . "\n\n";
		$msg .= "ADOPTION ACKNOWLEDGEMENT\n\n";
		$msg .= "ALL OF THE INFORMATION I HAVE PROVIDED IN THIS APPLICATION IS, TO THE BEST OF MY KNOWLEDGE, TRUE AND COMPLETE. I UNDERSTAND THAT FALSIFYING ANSWERS IN THIS APPLICATION OR AT ANY OTHER TIME DURING THE ADOPTION PROCESS DISQUALIFIES ME FROM ADOPTION.\n\n";
		$msg .= "BY TYPING BELOW, YOU ARE SIGNING THIS DOCUMENT AND AGREEING TO THE TERMS LISTED ABOVE. YOU ALSO AGREE TO PAY THE CURRENT ADOPTION FEE WHICH IS $275.00. THIS FEE COVERS MEDICAL AND OTHER EXPENSES ASSOCIATED WITH RESCUING SAINTS.\n\n";
		$msg .= "Signature of adopting person(s):\n\n";
		$msg .= "X " . stripslashes($_SESSION['signature1']) . "\n";
		$msg .= "X " . stripslashes($_SESSION['signature2']) . "\n\n";
		$msg .= "Add to Mailing List: " . $_SESSION['mailingList'] . "\n\n";
		$msg .= "Visit our website and read through our adoption section. We will be in contact with you as soon as possible. Thank you for your application, and we hope to share the joy of owning a Saint with you in the near future!\n\n";
		$msg .= "Al and Sabrina Wright, NE/IA Saint Bernard Rescue";
		
		//Mail Header Information
		$recipient = "asawright13@aol.com, actwright13@yahoo.com";
		$subject = "NE/IA Rescue Foundation Adoption Application - " . stripslashes($_SESSION['Name']);
		$mailheaders = "From:  " . $_SESSION["email"] . "\n";
		$mailheaders .= "Reply-To: " . $_SESSION["email"] . "\n";
	
		//Send Mail
		mail($recipient, $subject, $msg, $mailheaders);
		if(mail($recipient, $subject, $msg, $mailheaders)) {
			$email = $_SESSION['email'];
			$date = date('l jS \of F Y h:i:s A');
			//Email String-----------------------------------------
	
			$msg = "NE/IA Saint Bernard Rescue Adoption Application" . "\n";
			$msg .= "Applicant's Name: " . stripslashes($_SESSION['Name']) . "\n";
			$msg .= "Spouse: " . stripslashes($_SESSION['Spouse']) . "\n\n";
			$msg .= "Date: " . $date . "\n\n";
			$msg .= "Address: " . stripslashes($_SESSION['address']) . "\n";
			$msg .= "City: " . stripslashes($_SESSION['city']) . "\n";
			$msg .= "State: " . stripslashes($_SESSION['state']) . "\n";
			$msg .= "Zip: " . stripslashes($_SESSION['zip']) . "\n";	
			$msg .= "E-mail: " . stripslashes($_SESSION['email']) . "\n";	
			$msg .= "Home Phone: " . stripslashes($_SESSION['homePhone']) . "\n";	
			$msg .= "Work Phone: " . stripslashes($_SESSION['workPhone']) . "\n";	
			$msg .= "Occupation: " . stripslashes($_SESSION['occupation']) . "\n";	
			$msg .= "# Adults: " . stripslashes($_SESSION['numAdults']) . "\n";	
			$msg .= "# Children: " . stripslashes($_SESSION['numChildren']) . "\n";	
			$msg .= "Children's Ages: " . stripslashes($_SESSION['ageChildren']) . "\n\n";
			$msg .= "If less than 5 years, give previous address below." . "\n";
			$msg .= "Previous Address: " . stripslashes($_SESSION['previousAddress']) . "\n\n";	
			$msg .= "Please list names and ages of all members of the household (list each member on a new line):" . "\n";
			$msg .= "House Members: " . stripslashes($_SESSION['houseMembers']) . "\n";	
			$msg .= "Which family members will feed/care for the Saint(s)?: " . stripslashes($_SESSION['whoWillCare']) . "\n\n";
			$msg .= "Previous Pets" . "\n";
			$msg .= "What other dogs have you owned in the last 3 years?:" . "\n\n";
			
			$msg .= "#1" . "\n";
			$msg .= "Breed: " . stripslashes($_SESSION['breed1']) . "\n";	
			$msg .= "Sex: " . stripslashes($_SESSION['sex1']) . "\n";	
			$msg .= "Age: " . stripslashes($_SESSION['age1']) . "\n";	
			$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter1']) . "\n";	
			$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn1']) . "\n";	
			$msg .= "\n";	
			
			$msg .= "#2" . "\n";
			$msg .= "Breed: " . stripslashes($_SESSION['breed2']) . "\n";	
			$msg .= "Sex: " . stripslashes($_SESSION['sex2']) . "\n";	
			$msg .= "Age: " . stripslashes($_SESSION['age2']) . "\n";	
			$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter2']) . "\n";	
			$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn2']) . "\n";	
			$msg .= "\n";		
			
			$msg .= "#3" . "\n";
			$msg .= "Breed: " . stripslashes($_SESSION['breed3']) . "\n";	
			$msg .= "Sex: " . stripslashes($_SESSION['sex3']) . "\n";	
			$msg .= "Age: " . stripslashes($_SESSION['age3']) . "\n";	
			$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter3']) . "\n";	
			$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn3']) . "\n";	
			$msg .= "\n";		
			
			$msg .= "#4" . "\n";
			$msg .= "Breed: " . stripslashes($_SESSION['breed4']) . "\n";	
			$msg .= "Sex: " . stripslashes($_SESSION['sex4']) . "\n";	
			$msg .= "Age: " . stripslashes($_SESSION['age4']) . "\n";	
			$msg .= "Fixed?: " . stripslashes($_SESSION['spayNeuter4']) . "\n";	
			$msg .= "Still Own?: " . stripslashes($_SESSION['stillOwn4']) . "\n";	
			$msg .= "\n";
			
			$msg .= "If you answered \"No\" to still having a dog listed above, state what happened to the dog: " . stripslashes($_SESSION['whatHappened']) ."\n";	
			$msg .= "Are your pets up to date on all shots?: " . stripslashes($_SESSION['shots']) ."\n";	
			$msg .= "Are your pets on heartworm preventative?: " . stripslashes($_SESSION['heartWorm']) ."\n";	
			$msg .= "Have you owned Saints before?: " . stripslashes($_SESSION['ownedSaints']) ."\n";	
			$msg .= "What happened to the dog(s)?: " . stripslashes($_SESSION['whatHappenedToOwnedSaint']) ."\n";	
			$msg .= "Do you have other pets? (list each pet on a new line): " . stripslashes($_SESSION['otherPets']) ."\n\n";	
			$msg .= "How or where have you learned about this breed? " . stripslashes($_SESSION['whereLearned']) . "\n\n";
			
			$msg .= "Tell us what you're looking for." . "\n\n";
			
			$msg .= "Coat length: " . stripslashes($_SESSION['coatLength']) ."\n";
			$msg .= "Sex: " . stripslashes($_SESSION['desiredSex']) ."\n";
			$msg .= "Age(years): " . stripslashes($_SESSION['desiredAge']) ."\n\n";
			
			$msg .= "Are you willing to adopt a dog that:" . "\n\n";
			
			$msg .= "Is 8 years of age or older?: " . stripslashes($_SESSION['eightOrOlder']) ."\n";
			$msg .= "Is not reliable with children?: " . stripslashes($_SESSION['notReliableWithChildren']) ."\n";
			$msg .= "Is physically handicapped?: " . stripslashes($_SESSION['handicapped']) ."\n";
			$msg .= "Has been abused?: " . stripslashes($_SESSION['abused']) ."\n";
			$msg .= "Requires ongoing medications?: " . stripslashes($_SESSION['needsMeds']) ."\n";
			$msg .= "On occasion we receive pairs of Saints that have bonded and need to remain together. Would you consider adopting such a pair?: " . stripslashes($_SESSION['bondedSaints']) ."\n";
			$msg .= "If you have chosen a particular dog, would you be willing to take another if the dog you chose has a medical or other problem that would prohibit the adoption at this time?: " . stripslashes($_SESSION['takeAnotherDog']) ."\n";
			$msg .= "Are you aware that Saint Bernard Rescue Foundation, Inc. requests an adoption fee for each adoption to help cover expenses in readying dogs for adoption?: " . stripslashes($_SESSION['awareOfFee']) ."\n";
			$msg .= "Are you prepared to pay this fee?: " . stripslashes($_SESSION['payFee']) ."\n";
			$msg .= "What characteristics do you find undesirable in a pet? " . stripslashes($_SESSION['undesirableChar']) . "\n\n";
			$msg .= "Personal references - must include a neighbor and exclude relatives who are employed in a pet-related field. (all three are required):" . "\n\n";
			
			$msg .= "#1" ."\n";
			$msg .= "Name: " . stripslashes($_SESSION['refName1']) ."\n";
			$msg .= "Address: " . stripslashes($_SESSION['refAddress1']) ."\n";
			$msg .= "Phone: " . stripslashes($_SESSION['refPhone1']) ."\n";
			$msg .= "\n";
			
			$msg .= "#2" ."\n";
			$msg .= "Name: " . stripslashes($_SESSION['refName2']) ."\n";
			$msg .= "Address: " . stripslashes($_SESSION['refAddress2']) ."\n";
			$msg .= "Phone: " . stripslashes($_SESSION['refPhone2']) ."\n";
			$msg .= "\n";		
			
			$msg .= "#3" ."\n";
			$msg .= "Name: " . stripslashes($_SESSION['refName3']) ."\n";
			$msg .= "Address: " . stripslashes($_SESSION['refAddress3']) ."\n";
			$msg .= "Phone: " . stripslashes($_SESSION['refPhone3']) ."\n";
			$msg .= "\n";
			
			$msg .= "Caring for the Saint" . "\n\n";
			$msg .= "During the day, the Saint would mostly be in the: " . stripslashes($_SESSION['daytimePlace']) ."\n";
			$msg .= "Please specify other: " . stripslashes($_SESSION['specifyOtherPlace']) ."\n";
			$msg .= "During the night, the Saint would sleep where?: " . stripslashes($_SESSION['whereWouldSaintSleep']) ."\n";
			$msg .= "Are you willing to have a home check before adopting?: " . stripslashes($_SESSION['homeCheck']) ."\n";
			$msg .= "Are you willing to housebreak a dog?: " . stripslashes($_SESSION['houseBreak']) ."\n";
			$msg .= "Are you aware that the vet bills for routine care of a Saint may cost between $100 and $500 or more per year?: " . stripslashes($_SESSION['expensiveCare']) ."\n";
			$msg .= "Are you willing to welcome a Saint into your family as a family member with a vow to care for it for its lifetime?: " . stripslashes($_SESSION['vowForLifetime']) ."\n\n";
			$msg .= "The following is required if you have pets." . "\n\n";
			$msg .= "Name, address and phone number of current or last veterinarian:" . "\n\n";
			$msg .= "Name: " . stripslashes($_SESSION['vetName']) ."\n";
			$msg .= "Address: " . stripslashes($_SESSION['vetAddress']) ."\n";
			$msg .= "City: " . stripslashes($_SESSION['vetCity']) ."\n";
			$msg .= "\n" . "Training for a Lifetime" . "\n\n";
			
			$msg .= "When you go away for a few days, who will care for the dog?: " . stripslashes($_SESSION['careWhenGone']) ."\n";
			$msg .= "Do you realize that Saints shed profusely (especially during the summer months), often drool or slobber and are prone to hip problems?: " . stripslashes($_SESSION['awareOfSaintProblems']) . "\n";
			$msg .= "Have you obedience trained a dog?: " . stripslashes($_SESSION['obedienceTrained']) . "\n";
			$msg .= "Explain what training method and collars you prefer: " . stripslashes($_SESSION['trainingMethod']) . "\n";
			$msg .= "What specifics are you looking for in a Saint? If you are interested in adopting a particular dog (opens a new window), please specify it's name, and give your reason(s): " . stripslashes($_SESSION['whatLookingFor']) . "\n";
			
			$msg .= "I would like to adopt a Saint for: " . stripslashes($_SESSION['adoptASaintFor']) ."\n";
			$msg .= "Please specify other: " . stripslashes($_SESSION['adoptASaintForOther']) ."\n";
			$msg .= "Is everyone in your household agreeable to you adopting a rescue dog?: " . stripslashes($_SESSION['houseAgree']) ."\n";
			$msg .= "If you have children, will you teach them to love and care for your Saint in a human manner?: " . stripslashes($_SESSION['teachChildren']) ."\n";
			$msg .= "Does anyone in your household have animal allergies?: " . stripslashes($_SESSION['allergies']) ."\n";
			$msg .= "Does anyone in your household dislike dogs or other animals?: " . stripslashes($_SESSION['dislikeDogs']) ."\n";
			$msg .= "How many hours would the Saint be home alone for each day?: " . stripslashes($_SESSION['hoursHome']) ."\n";
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
			$msg .= "If your yard is not currently fenced, are you willing to install a fence or leash walk at all times?: " . stripslashes($_SESSION['leashWalk']) . "\n";
			$msg .= "Do you feel it is acceptable to let a dog roam freely?: " . stripslashes($_SESSION['roamFreely']) . "\n\n";
			$msg .= "ADOPTION ACKNOWLEDGEMENT\n\n";
			$msg .= "ALL OF THE INFORMATION I HAVE PROVIDED IN THIS APPLICATION IS, TO THE BEST OF MY KNOWLEDGE, TRUE AND COMPLETE. I UNDERSTAND THAT FALSIFYING ANSWERS IN THIS APPLICATION OR AT ANY OTHER TIME DURING THE ADOPTION PROCESS DISQUALIFIES ME FROM ADOPTION.\n\n";
			$msg .= "BY TYPING BELOW, YOU ARE SIGNING THIS DOCUMENT AND AGREEING TO THE TERMS LISTED ABOVE. YOU ALSO AGREE TO PAY THE CURRENT ADOPTION FEE WHICH IS $275.00. THIS FEE COVERS MEDICAL AND OTHER EXPENSES ASSOCIATED WITH RESCUING SAINTS.\n\n";
			$msg .= "Signature of adopting person(s):\n\n";
			$msg .= "X " . stripslashes($_SESSION['signature1']) . "\n";
			$msg .= "X " . stripslashes($_SESSION['signature2']) . "\n\n";
			$msg .= "Add to Mailing List: " . $_SESSION['mailingList'] . "\n\n";
			$msg .= "Visit our website and read through our adoption section. We will be in contact with you as soon as possible. Thank you for your application, and we hope to share the joy of owning a Saint with you in the near future!\n\n";
			$msg .= "Al and Sabrina Wright, NE/IA Saint Bernard Rescue";
			
			//Mail Header Information
			$recipient = "$email";
			$subject = "NE/IA Rescue Foundation Adoption Application - " . stripslashes($_SESSION['Name']);
			$mailheaders = "From:  " . $_SESSION["email"] . "\n";
			$mailheaders .= "Reply-To: " . $_SESSION["email"] . "\n";
		
			//Send Mail
			mail($recipient, $subject, $msg, $mailheaders);
		}
?>