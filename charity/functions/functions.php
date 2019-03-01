<?php 

/**** Helper functions *****/

function clean($string) {


	return htmlentities($string);
}

function redirect($location){

	return header("Location: {$location}");


}

function set_message($message) {


	if(!empty($message)){

		$_SESSION['message'] = $message;
	}else {
		$message = "";
	}
}

function display_message(){

	if(isset($_SESSION['message'])){

		echo $_SESSION['message'];

		unset($_SESSION['message']);
	}

}

function token_generator(){

	$token = $_SESSION['token'] = md5(uniqid(mt_rand(), true));

	return $token;
}

function validation_errors($error_message) {

	$error_message = <<<DELIMITER

				<div class="alert alert-danger alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<strong>Warning!</strong> $error_message
				</div>
DELIMITER;

return $error_message;
}

function email_exists($email) {

	$sql = "SELECT id FROM charity_db WHERE email = '$email'";

	$result = query($sql);

	if(row_count($result) == 1 ) {

		return true;
	} else {

		return false;
	}
}

function charity_name_exists($charity_name) {

	$sql = "SELECT id FROM charity_db WHERE charity_name = '$charity_name'";

	$result = query($sql);

	if(row_count($result) == 1 ) {

		return true;
	} else {

		return false;
	}
}

function send_email($email, $subject, $msg, $headers){

	return mail($email, $subject, $msg, $headers);


}

/**** Validation functions *****/


function validate_user_registration(){

	$errors = [];

	$min = 3;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {


		$charity_name                 = clean($_POST['charity_name']);
		$charity_registered_id        = clean($_POST['charity_registered_id']);
		$address                      = clean($_POST['address']);
		$phone_no                     = clean($_POST['phone_no']);
        $landline_no                  = clean($_POST['landline_no']);
		$email                        = clean($_POST['email']);
		$password                     = clean($_POST['password']);
		$confirm_password             = clean($_POST['confirm_password']);

		if(strlen($charity_name) < $min) {

			$errors[] = "Your charity name cannot be less than {$min} characters";
		}
		if(strlen($charity_name) > $max) {

			$errors[] = "Your charity name cannot be more than {$max} characters";
		}
		
		if(strlen($charity_registered_id) < $min) {

			$errors[] = "Your registered id cannot be less than {$min} characters";
		}
		if(strlen($charity_registered_id) > $max) {

			$errors[] = "Your registered id cannot be more than {$max} characters";
		}
		if(charity_name_exists($charity_name)){

			$errors[] = "Sorry that charity name is already taken";

		}
		if(strlen($charity_name) > $max) {

			$errors[] = "Your charity name cannot be more than {$max} characters";
		}
		if(email_exists($email)){

			$errors[] = "Sorry that email is already registered";

		}
		
		if($password !== $confirm_password) {
			$errors[] = "Your password fields do not match";
		} 

		if(!empty($errors)) {

			foreach ($errors as $error) {

				echo validation_errors($error);



		}

	} else {

		if(register_user($charity_name, $charity_registered_id, $address, $phone_no, $landline_no, $email, $password)) {

			set_message("<p class='bg-success text-center'>Please check your email or spam folder for activation link</p>");

			redirect("index.php");

		} else {

			set_message("<p class='bg-danger text-center'>Sorry we could not register the user</p>");
			redirect("index.php");
		}
	}
} // post request
} // function  

/**** Register user functions *****/


function register_user($charity_name, $charity_registered_id, $address, $phone_no, $landline_no, $email, $password) {

	$charity_name           = escape($charity_name);
	$charity_registered_id  = escape($charity_registered_id);
    $address                = escape($address);
    $phone_no               = escape($phone_no);
    $landline_no            = escape($landline_no);
	$email                  = escape($email);
	$password               = escape($password); 


	if(email_exists($email)) {

		return false;
	} else if (charity_name_exists($charity_name)) {

	return false;

} else {

		$password   = md5($password); 

		$validation_code = md5($charity_name . microtime());

        $sql = "INSERT INTO charity_db(charity_name, charity_registered_id, address, phone_no, landline_no, email, password, validation_code, active)";
        $sql.= " VALUES('$charity_name', '$charity_registered_id', '$address', '$phone_no', '$landline_no', '$email', '$password', '$validation_code', 0)";
        $result = query($sql);
        confirm($result);
        

        $subject = "Activate Account";
        $msg = " Please click the link below to activate your Account

        http://tibetune.com/login/activate.php?email=$email&code=$validation_code
            ";

            $headers = "From: noreply@charityPlus.com/";

        send_email($email, $subject, $msg, $headers);

        return true;

}
}



/**** Activate user functions *****/


function activate_user() {

	if($_SERVER['REQUEST_METHOD'] == "GET") {

		if(isset($_GET['email'])) {

		$email = clean($_GET['email']);

		$validation_code = clean($_GET['code']);

		$sql = "SELECT id FROM charity_db WHERE email = '".escape($_GET['email'])."' AND validation_code = '".escape($_GET['code'])."' ";
		$result = query($sql);
		confirm($result);
		

		if(row_count($result) == 1) {

			$sql2 = "UPDATE charity_db SET active = 1, validation_code = 0 WHERE email = '".escape($email)."' AND validation_code = '".escape($validation_code)."' ";
			$result2 = query($sql2);
		    confirm($result2);

		set_message("<p class='bg-success'>Your account has been activated please login</p>");

			redirect("login.php");

	} else {

		set_message("<p class='bg-danger'>Sorry your account could not be activated</p>");

			redirect("login.php");
	}

		}
	}
} // functions
  
 /********************validate user login functions *******************/

function validate_user_login(){

	$errors = [];

	$min = 3;
	$max = 20;

	if($_SERVER['REQUEST_METHOD'] == "POST") {

		$email            = clean($_POST['email']);
		$password         = clean($_POST['password']);
		$remember         = isset($_POST['remember']);


		if(empty($email)) {

			$errors[] = "Email field cannot be empty";
		}


		if(empty($password)) {

			$errors[] = "password field cannot be empty";
		}


		if(!empty($errors)) {

			foreach ($errors as $error) {

				echo validation_errors($error);
				}

	} else {

		if(login_user($email, $password, $remember)) {

			redirect("admin.php");
		} else {

			echo validation_errors("Your credentials are not correct");


		}
	}

}
} // function


 /********************user login functions *******************/


 function login_user($email, $password, $remember) {

 	$sql = "SELECT password, id FROM charity_db WHERE email = '".escape($email)."' AND active = 1";
 	$result = query($sql);

 	if(row_count($result) == 1 ) {

 		$row = fetch_array($result);
 		$db_password = $row['password'];

 		if(md5($password) === $db_password) {

 			if($remember == "on") {

 				setcookie('email', $email, time() + 86400);
 			}

 			$_SESSION['email'] = $email;


            return true;
 		} else {

 			return false;
 		}





 		return true;
 	} else {

 		return false;
 	}

 }
  // end of functions



 /********************logged in functions *******************/

 function logged_in() {

 	if(isset($_SESSION['email']) || isset($_COOKIE['email'])) {

 		return true;
 	} else {

 		return false;
 	}
 } // functions


 /********************Recover password functions *******************/

 	function recover_password() {

 		if($_SERVER['REQUEST_METHOD'] == "POST") {

 			if(isset($_SESSION['token']) && $_POST['token'] === $_SESSION['token']) {

 				$email = clean($_POST['email']);


 			if(email_exists($email)) {

 				$validation_code = md5($email . microtime());

 				setcookie('temp_access_code', $validation_code, time()+ 900);

 				$sql = "UPDATE charity_db SET validation_code = '".escape($validation_code)."' WHERE email = '".escape($email)."'";
 				$result = query($sql);
 				




 				$subject = "Please reset your password";
 				$message = "Here is your password reset code {$validation_code} 
 				Click here to reset your password http://localhost/code.php?email=$email&code=$validation_code";

 				$headers = "From: noreply@tibetune.com/";

 				send_email($email, $subject, $message, $headers);

	            set_message("<p class='bg-success text-center'>Please check your email or span folder for a password reset code</p>");

 				redirect("index.php");


				} else {

 				echo validation_errors("This email does not exist");
 			}

 			} else {

 				redirect("index.php");
 			}

 			// token checks

 			if(isset($_POST['cancel_submit'])) {

 				redirect("login.php");




 			}

 			
 		} // post request
 	} // functions



 /********************Code validation *******************/

 function validate_code() {

 	if(isset($_COOKIE['temp_access_code'])) {


 			if(!isset($_GET['email']) && !isset($_GET['code'])) {

 				redirect("index.php");

 		} else if (empty($_GET['email']) || empty($_GET['code'])) {

 			    redirect("index.php");

			} else {

				if(isset($_POST['code'])) {

					$email = clean($_GET['email']);

					$validation_code = clean($_POST['code']);
					$sql = "SELECT id FROM charity_db WHERE  validation_code = '".escape($validation_code)."' AND email = '".escape($email)."'";
					$result = query($sql);
					if(row_count($result) == 1) {

			setcookie('temp_access_code', $validation_code, time()+ 300);


						redirect("reset.php?email=$email&code=$validation_code");
					} else {

						echo validation_errors("Sorry wrong validation code");
					}

				}

			}


 	} else {

 	set_message("<p class='bg-danger text-center'>Sorry your validation cookie was expired</p>");

 	redirect("recover.php");

 	}
 }


 /********************Password reset functions*******************/

 	function password_reset() {

 		if(isset($_COOKIE['temp_access_code'])) {

 			if(isset($_GET['email']) && isset($_GET['code'])) {


 		if(isset($_SESSION['token']) && isset($_POST['token'])) {

 		if($_POST['token'] === $_SESSION['token']){

 		if($_POST['password'] === $_POST['confirm_password']) {

 			$updated_password = md5($_POST['password']);

 		$sql = "UPDATE charity_db SET password = '".escape($updated_password)."', validation_code = 0 WHERE email = '".escape($_GET['$email'])."'";

 			query($sql);
 	set_message("<p class='bg-danger text-center'>Your password has been updated please login</p>");
 	redirect("login.php");

 		} else {

 			echo validation_errors("Password fields don't match");
 		}
 		}

 		}
 			
 		}
 	} else {

 		 set_message("<p class='bg-danger text-center'>Sorry your time has expired");

 		 redirect("recover.php");
 	}
 }


