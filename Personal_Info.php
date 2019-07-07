<?php
session_start();

include('connect.php');
?>
<!doctype html>
<html lang="en">

	<?php include_once("includes/header.php");
		$email = $_SESSION['email'];
		$checkUserEmail = "SELECT * FROM biodata WHERE email='$email'";   // this check whether the user is already exist or not
		 $run = mysql_query($checkUserEmail);
		 
			if(mysql_num_rows($run)>0){   
				 header('location:viewBiodataProcess.php');
				
				// exit();
			}

	 ?>


<body onload="DateTimeTick()" style="background:url(images/bg3.png)">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<?php include_once("includes/menubar.php"); ?>
				</div>
			</div>

				<div class="container">
				<div class="jumbotron">
				<div class="row" style="margin-left:5%">
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

				<h3 style="text-align:center;color:#07cbc9;margin-top: 20%">Student'S Biodata Page</h3>
				<h4><?php
						if(isset($_GET['error'])){
						echo '<span style="color:red;" class="glyphicon glyphicon-warning-sign"> Record Already Exist!</span>';
						}
				?></h4>
					
				<form class="form-horizontal" class="form-inline" method="POST" action="newProcessingfile.php" enctype="mutimedia/Date" >
				<fieldset>				
						 <div class="form-group row">
					      <label for="inputFname" class="control-label">First Name</label>
					      <div class="controls">
					        <input type="name" name="fname"  class="form-control input-lg" id="inputFname" placeholder="First Name">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputMname" class="control-label">Middle Name</label>
					      <div class="controls">
					        <input type="name" name="midName"  class="form-control input-lg" id="inputMname" placeholder="Middle Name">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputLname" class="control-label">Last Name</label>
					      <div class="controls">
					        <input type="name" name="lname"  class="form-control input-lg" id="inputLname" placeholder="Last Name">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputAge" class="control-label">Date Of Birth</label>
					      <div class="controls">
					        <input type="Date" name="age"  class="form-control input-lg" id="inputAge" placeholder="Date of Birth">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					      <div class="controls">
					        <input type="email" name="email"  class="form-control input-lg" id="inputEmail3" placeholder="Email">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputAddress" class="control-label">Address 1</label>
					      <div class="controls">
					        <input type="name" name="address1" class="form-control input-lg" id="inputadd1" placeholder="address 1">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputAddress2" class="control-label">Address 2</label>
					      <div class="controls">
					        <input type="name" name="address2" class="form-control input-lg" id="inputadd2" placeholder="Address 2">
					      </div>
					    </div>

					    <div class="form-group row">
					      <label for="inputSchool" class="control-label">School Attended Before</label>
					      <div class="controls">
					        <input type="name" name="school"  class="form-control input-lg" id="inputsch" placeholder="School Attended">
					      </div>
					    </div>
					    <div class="form-group row">
					      <label for="inputCity" class="control-label">City</label>
					      <div class="controls">
					        <input type="name" name="city"  class="form-control input-lg" id="inputCity" placeholder="City">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputState" class="control-label">State Of Origin</label>
					      <div class="controls">
					        <input type="name" name="state"  class="form-control input-lg" id="inputState" placeholder="State of Origin">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputState" class="control-label">Country of Birth</label>
					      <div class="controls">
					        <input type="name" name="country"  class="form-control input-lg" id="inputState" placeholder="Country of Birth">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputClass" class="control-label">Preferred Class</label>
					      <div class="controls">
					        <input type="name" name="level"  class="form-control input-lg" id="inputclass" placeholder="Preferred Class">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputNumber" class="control-label">Phone Number</label>
					      <div class="controls">
					        <input type="name" name="phone"  class="form-control input-lg" id="inputNumber" placeholder="Phone Number">
					      </div>
					    </div>
						    <div class="form-group row">
					      <label for="inputTextArea" class="control-label">Please Specify any health issue</label>
					      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
							<textarea class="form-control" name="health" id="exampleTextarea" rows="3"></textarea>
					  		</div>
					      </div>
					    
					    
					      	<div class="container">
					    	<h3 style="color:#07cbc9"> Parent/Guardian/Sponsor Details</h3>

					    <div class="form-group row">
					      <label for="inputParent" class="control-label">Name of Parent</label>
					      <div class="controls">
					        <input type="name" name="Pname"  class="form-control input-lg" id="inputPname" placeholder="Names of Parent ">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputOccupation" class="control-label">Occupation</label>
					      <div class="controls">
					        <input type="name" name="work"  class="form-control input-lg" id="inputwork" placeholder="Occupation ">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputOffadd" class="control-label">Office Address</label>
					      <div class="controls">
					        <input type="name" name="offAddr"  class="form-control input-lg" id="inputOffadd" placeholder="Office Address ">
					      </div>
					    </div>

					     <div class="form-group row">
					      <label for="inputPnumber" class="control-label">Phone Number</label>
					      <div class="controls">
					        <input type="name" name="Pnumber"  class="form-control input-lg" id="inputNum" placeholder="Function Number ">
					      </div>
					    </div>
					  <br>
					<div class="form-check">
			    <label class="form-check-label">
			      <input type="checkbox"  class="form-check-input" required>
			      Check me out
			    </label>
			  </div>
			  <br>
				<div class="form-group">
				  <label class="control-label" for="submit"></label>
				  <div class="controls">
				    <button  type="submit" id="submit" name="go" class="btn btn-primary">Submit</button>
				  </div>
				</div>
				</div>
			

				</fieldset>
				</form>


				</div><!-- copy code ends here please -->	
			</div>
			</div>
			</div>

			<div class="row" style="margin-top:20%">
				<?php include_once("includes/footer.php"); ?>
			</div>

		</div>

</body>
</html>