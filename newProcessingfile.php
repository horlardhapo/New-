<?php

	$db_name = "bashir";
		$tb_name = "biodata";
		
		 $connect = mysql_connect("localhost","root","") or die ("Unable to create the connection");
		 $Select_db = mysql_select_db("$db_name") or die("unable to connect to database");

	


	if(isset($_POST['go'])){

	$fname =$_POST['fname'];
	$midName = $_POST['midName'];
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
	$health = $_POST['health'];
	$Parent_Name = $_POST['Pname'];
	$work = $_POST['work'];
	$office_addr = $_POST['offAddr'];
	$Parent_Number = $_POST['Pnumber'];

		$checkUserEmail = "SELECT * FROM biodata WHERE email='$email'";   // this check whether the user is already exist or not
		 $run = mysql_query($checkUserEmail);
		 
			if(mysql_num_rows($run)>0){   
				 header('location:Personal_Info.php?error=yes');
				
				// exit();
			} // it end its checking here

			else{

		$insertData = "INSERT INTO biodata(fname,midName,lname,age,email,address1,address2,school,city,state,country,level,phone,health,Pname,work,offAddr,Pnumber) 
				VALUES ('$fname','$midName','$lname','$age','$email','$address1','$address2','$school','$city','$state','$country','$level','$phone','$health',
				'$Parent_Name','$work','$office_addr','$Parent_Number')";

				$query = mysql_query($insertData,$connect);

				   if(!$query){

				    header('location:Personal_Info.php');
				   	 print "<script> document.getElementById('errormsg').innerHTML ='<span style=\"color:red;\" class=\"glyphicon glyphicon-warning-sign\"> Fail to update your biodata please try again later!</span>'</script>";
				
			   }
			   else{

			   		header('location:viewBiodataProcess.php');
				    print "<script> document.getElementById('errormsg').innerHTML ='<span style=\"color:green;\" class=\"glyphicon glyphicon-floppy-saved\"> Your biodata has been Successfully updated!</span>'</script>";

			   }
			}
	}

?>