<?php
session_start();
	if( isset($_SESSION['submit'])!="" ){
		header("Location: Personal_Info.php");
	}
	include_once 'connect.php';

	$error = false;

	if ( isset($_POST['submit']) ) {
		
		// clean user inputs to prevent sql injections
		$fname = trim($_POST['fname']);
		$fname = strip_tags($fname);
		$fname = htmlspecialchars($fname);

		$lname = trim($_POST['lname']);
		$lname = strip_tags($lname);
		$lname = htmlspecialchars($lname);
		
		$email = trim($_POST['email']);
		$email = strip_tags($email);
		$email = htmlspecialchars($email);
		
		// address validation
		$add1 = trim($_POST['add1']);
		$add1 = strip_tags($add1);
		$add1 = htmlspecialchars($add1);

		// address validation
		$add2 = trim($_POST['add2']);
		$add2 = strip_tags($add2);
		$add2 = htmlspecialchars($add2);

		// city validation
		$city = trim($_POST['city']);
		$city = strip_tags($city);
		$city = htmlspecialchars($city);

		// zipcode validation
		$zip = trim($_POST['zip']);
		$zip = strip_tags($zip);
		$zip = htmlspecialchars($zip);

		//country validation
		$country = trim($_POST['country']);
		$country = strip_tags($country);
		$country = htmlspecialchars($country);

		//phone validation
		$phone = trim($_POST['phone']);
		$phone = strip_tags($phone);
		$phone = htmlspecialchars($phone);
		

		//select school validation
		$selectSchool = trim($_POST['selectSchool']);
		$selectSchool = strip_tags($selectSchool);
		$selectSchool = htmlspecialchars($selectSchool);

		//school type validation
		$schoolType = trim($_POST['schoolType']);
		$schoolType = strip_tags($schoolType);
		$schoolType = htmlspecialchars($schoolType);

		//health validation
		$health = trim($_POST['health']);
		$health = strip_tags($health);
		$health = htmlspecialchars($health);

		//health issue validation
		$healthIssue = trim($_POST['healthIssue']);
		$healthIssue = strip_tags($healthIssue);
		$healthIssue = htmlspecialchars($healthIssue);

		//image validation
		$upImage = trim($_POST['pictures']);
		$upImage = strip_tags($upImage);
		$upImage = htmlspecialchars($upImage);

		
		// basic name validation
		if (empty($name)) {
			$error = true;
			$nameError = "Please enter your full name.";
		} else if (strlen($name) < 3) {
			$error = true;
			$nameError = "Name must have atleat 3 characters.";
		} else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
			$error = true;
			$nameError = "Name must contain alphabets and space.";
		}
		
		//basic email validation
		if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$error = true;
			$emailError = "Please enter valid email address.";
		} else {
			// check email exist or not
			$query = "SELECT email FROM personal_info WHERE email='$email'";
			$result = mysql_query($query);
			$count = mysql_num_rows($result);
			if($count!=0){
				$error = true;
				$emailError = "Provided Email is already in use.";
			}
		}
		
		// if there's no error, continue to enter student biodata 
		if( !$error ) {
			
	$query = "INSERT INTO personal_info(fname,lname,email,add1,add2,city,zip,country,phone,selectSchool,schoolType,health,healthIssue,) VALUES('$fname',
	'$lname','$email','$add1','$add2','$city','$zip','$country','$phone','$selectSchool','$schoolType','$health','$healthIssue')";
			$result = mysql_query($query);
				
			if ($result) {
				$errTyp = "success";
				$errMSG = "Successfully registered, you should print out your biodata";
				unset($fname);
				unset($lname);
				unset($email);
				unset($add1);
				unset($add2);
				unset($city);
				unset($zip);
				unset($country);
				unset($phone);
				unset($selectSchool);
				unset($schoolType);
				unset($health);
				unset($healthIssue);
			} else {
				$errTyp = "danger";
				$errMSG = "Something went wrong, try again later...";	
			}	
				
		}
		
		
	}
?>