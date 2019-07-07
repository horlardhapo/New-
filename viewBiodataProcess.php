<?php
   
  $email = $_REQUEST['Email']; //the text box where the user will input name and it will fetch record based on the name.  
  
  $db_name = "bashir";
  $tb_name = "biodata";
  
  if(isset($_REQUEST['printForm'])){
    $connect = mysql_connect("localhost","root") or die ("Unable to connect to database server");
	$db = mysql_select_db("$db_name");
	
	$fetchInfo =  mysql_query("SELECT * FROM $tb_name WHERE email='$email' ") or die("Unable to fetch Record");
	if(mysql_num_rows($fetchInfo)==0){
		echo "<script> alert('Record Not Found'); window.open('BiodataRecord.php','_self')</script>";
	}else{
		echo '<form role="form-control" class="form-horizontal" style="padding:1%">';
	while($row = mysql_fetch_assoc($fetchInfo)){
		
			$fname =$row['fname'];
			$midName = $row['midName'];
			$lname = $row['lname'];
			$age = $row['age'];
			$email = $row['email'];
			$address1 = $row['address1'];
			$address2 = $row['address2'];
			$school = $row['school'];
			$city = $row['city'];
			$state = $row['state'];
			$country = $row['country'];
			$level = $row['level'];
			$phone = $row['phone'];
			$health = $row['health'];
			$Parent_Name = $row['Pname'];
			$work = $row['work'];
			$office_addr = $row['offAddr'];
			$Parent_Number = $row['Pnumber'];
		 		 
		echo '<div class="form-group" style="margin-top:3%">
                    <div class="row">
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<label>SURNAME:</label>
					<input type="name" class="form-control" value="'.$fname.'" disabled>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<label>FIRSTNAME:</label>
						<input type="email" class="form-control" value="'.$midName.'" disabled>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<label>LASTNAME :</label>
					<input type="name" class="form-control" value="'.$lname.'" disabled>
					</div>
			    	</div>
                </div>
			  </div>  

			  <div class="form-group">

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>DATE OF BIRTH:</label>
					<input type="name" class="form-control" value="'.$age.'" disabled>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>EMAIL ADDRESS:</label>
						<input type="email" class="form-control" value="'.$email.'" disabled>
					</div>
			  </div> 

			  <div class="form-group">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>ADDRESS ONE:</label>
					<input type="name" class="form-control" value="'.$address1.'" disabled>
					</div>
					
			  </div> 

			  <div class="form-group">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>ADDRESS TWO:</label>
					<input type="name" class="form-control" value="'.$address2.'" disabled>
					</div>
			  </div> 

			  <div class="form-group">

					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<label>SCHOOL ATTENDED BEFORE:</label>
					<input type="name" class="form-control" value="'.$school.'" disabled>
					</div>
					
			  </div>

			  <div class="form-group">

					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<label>CITY:</label>
					<input type="name" class="form-control" value="'.$city.'" disabled>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
						<label>STATE OF RESIDENCE:</label>
						<input type="name" class="form-control" value="'.$state.'" disabled>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<label> COUNTRY OF BIRTH</label>
					<input type="email" class ="form-control" value="'.$country.'" disabled>
					</div>
			    	</div>
			  </div> 

			  <div class="form-group">

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>PREFFERRED CLASS:</label>
					<input type="name" class="form-control" value="'.$level.'" disabled>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>PHONE NUMBER:</label>
						<input type="name" class="form-control" value="'.$phone.'" disabled>
					</div>
				
			  </div> 

			  <div class="form-group">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>HEALTH ISSUE:</label>
					<input type="name" class="form-control" value="'.$health.'" disabled>
					</div>
					
			  </div> 

			  <div class="form-group">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>PARENT / GUARDIAN\'S NAME:</label>
					<input type="email" class="form-control" value="'.$Parent_Name.'" disabled>
					</div>
					
			  </div> 

			  <div class="form-group">

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<label>OCCUPATION :</label>
					<input type="email" class="form-control" value="'.$work.'" disabled>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<label>PHONE NUMBER:</label>
						<input type="email" class="form-control" value="'.$Parent_Number.'" disabled>
					</div>
				
			  </div> 

			  <div class="form-group">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<label>OFFICE ADDRESS:</label>
					<input type="name" class="form-control" value="'.$office_addr.'" disabled>
					</div>
					
			  </div>

			 <br><br>
			  <div class="form-group">
				<div class="col-md-4 col-lg-4" style="margin-top:3%;margin-bottom:5%">
					<a href="BiodataRecord.php" class="btn btn-md btn-success">Go Back</a>
					<a href="javascript:window.print()" class="btn btn-md btn-primary">Print</a>
				</div>
		</div>  

			  ';
	}
	echo "</form>";
	}
}else{
      header("location: BiodataRecord.php");	 
	 }
	
	
?>	