<?php


		$db_name = "bashir";
		$tb_name = "students_biodata";
		
		 $connect = mysql_connect("localhost","root","") or die ("Unable to create the connection");
		 $Select_db = mysql_select_db("$db_name") or die("unable to connect to database");

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
		 
		  
	 	  
	 if(isset($_POST['submit'])){
		  
		 
		$checkUserEmail = "SELECT * FROM $tb_name WHERE email='$email'";
		 $run = mysql_query($checkUserEmail);
		 
			if(mysql_num_rows($run)>0){
				include_once('index.php');
				 print "<script> document.getElementById('errormsg').innerHTML ='<span style=\"color:red;\" class=\"glyphicon glyphicon-warning-sign\"> Record Already Exist!</span>'</script>";
				
				exit();
			}
			else{
				
			 $insert = "INSERT INTO $tb_name (fname,midName,lname,age,email,address1,address2,school,city,state,country,level,phone,Pname,work,offAddr,Pnumber) VALUES ('$fname','$midname','$lname','$age','$email','$address1','$address2','$school','$city','$state','$country','$level','$phone','$Pname',
			 '$work','$offAddr','$Pnumber')";
			 $query = mysql_query($insert, $connect);
			 
			   if(!$query){
				   include_once('Personal_Info.php');
				    print "<script> document.getElementById('errormsg').innerHTML ='<span style=\"color:red;\" class=\"glyphicon glyphicon-warning-sign\"> Fail to Add Record!</span>'</script>";
				
			   }
			   else{
				   include_once('Personal_Info.php');
				    print "<script> document.getElementById('errormsg').innerHTML ='<span style=\"color:green;\" class=\"glyphicon glyphicon-floppy-saved\"> Record Added Successfully!</span>'</script>";
				
				   
			   }	 
		 }
	 }		 
		
	 
	 ?>
