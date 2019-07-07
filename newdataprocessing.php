<?php

	$connect = mysqli_connect('localhost','root','');

	if(!$connect){
		echo 'Cannot able to connect to database';
	}

	if(!mysqli_select_db($connect,'bashir')){

		echo 'Database cannot be selected!';
	}

		 

		  	if(isset($_POST['submit'])){

		   $fname = $_POST['fname']; 
		  $midname = $_POST['midName'];
		  $lname = $_POST['lname'];
		  $age = $_POST['age']; 
		  $email = $_POST['email'];
		  $address1 = $_POST['address1'];
		  $address2 = $_POST['address2'];
		  $school = $_POST['school'];
		  $city = $_POST['city'];
		  $state = $_POST['state'];
		  $country = $_POST['country'];
		  $level = $_POST['level'];
		  $phone = $_POST['phone'];
		  $Pname = $_POST['Pname'];
		  $work = $_POST['work'];
		  $offAddr = $_POST['offAddr'];
		  $Pnumber = $_POST['Pnumber'];

	$sql = "SELECT * FROM biodata WHERE  email = $email";

		$run = mysql_query($sql);

			if(mysql_num_rows($run)>0){ 
			  
				include_once('Personal_Info.php');
				 
				 echo "The record is already exist in our database";
				
				exit();
			} // it end its checking here

			else{
				$query = "INSERT INTO biodata(fname,midName,lname,age,email,address1,address2,school,city,state,country,level,phone,Pname,work,offAddr,Pnumber)
					VALUES ('$fname','$midname','$lname','$age','$email','$address1','$address2','$school','$city','$state','$country','$level','$phone',
					'$Pname','$work','$offAddr','$Pnumber')";

					if(mysql_query($connect,'$query')){

						include_once('Personal_Info.php');
						echo"Not Registered!";
					}

					else{

						include_once('Personal_Info.php');
						echo "You have successful Registered";
					}
			}

		}

?>