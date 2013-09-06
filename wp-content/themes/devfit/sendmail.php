<?php
$noajax = (int)$_GET['noajax'];

if($noajax == 1){
	//Execute this block if Javascript/AJAX is disabled.
	$ret = send_email();

	if($ret == 'err101'){
		echo 'You are required to fill in all Fields to proceed. Hit the <strong>back button on top</strong> to go back.';	
		exit();
	}elseif ($ret == 'err102') {
		echo 'You have entered an Invalid Email Address. Hit the <strong>back button on top</strong> to go back.';	
		exit();
	}elseif($ret == 'err103'){
		echo 'Your Name exceeds the 100 character Limit. Hit the <strong>back button on top</strong> to go back.';
		exit();
	}elseif($ret == 'err104'){
		echo 'Your Email exceeds the 100 character Limit. Hit the <strong>back button on top</strong> to go back.';
		exit();
	}elseif($ret == 'success'){
		echo 'Your Email Has been Sent Successfully!';
		exit();
	}else{
		echo 'Unexpected Error Has Occured. Please Try Again Later.';
		exit();
	}		


}else{
	//Ajax is enabled proceed to the regular parsing process.
	
	$ret = send_email();

	if($ret == 'err101'){
		echo $ret;
		exit();
	}elseif ($ret == 'err102') {
		echo $ret;
		exit();
	}elseif($ret == 'err103'){
		echo $ret;
		exit();
	}elseif($ret == 'err104'){
		echo $ret;
		exit();
	}elseif($ret == 'success'){
		echo $ret;
		exit();
	}else{
		echo 'unexpecter_err';
		exit();
	}		
}





//General Parser for Both AJAX and NON-AJAX Email Process
function send_email(){
		$name = htmlentities((mysql_real_escape_string($_POST['name'])));
		$email = htmlentities((mysql_real_escape_string($_POST['email']))); 
		$subject = htmlentities((mysql_real_escape_string($_POST['subject'])));
		$message= htmlentities((mysql_real_escape_string($_POST['message'])));

		//Check if there's an empty Variable
		if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){

			//check if the Email Address Given is Valid
			if(preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
				
				if(strlen($name) < 100){ // Check if name is less than 100 Characters
					

						if(strlen($email) < 100){ // Check if Email is less than 100 Characters
							
							/***************************************************************************
							Data passed sanitation, proceed to PHP Main Function
							**************************************************************************/
								//PHP MAIL FUNCTION
								if (mail('fagarmarkerick@gmail.com', $subject, 'From: '.$email.' '.$message)){
									return 'success';
								}else{
									//unexpected Erro Occured.
									return '';
								}	

						}else{
						//Greater than 100 Characters return an error.
						return 'err104';	
						}
				}else{
				//Greater than 100 Characters return an error.
				return 'err103';	
				}
			}else{
				//Return an error for an invalid Email
				return 'err102';	
			}
		}else{
		//Return an error Saying that Filling up all Fields are Required
			return 'err101';
		}

}//end send_mail() function



