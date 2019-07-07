<!doctype html>
<html lang="en">
	<head>
		<title>.::Al-Bashir||International::.</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="images/logo.png">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/datetime.js"></script>
		<script src="bootstrap/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css"/> 
		<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen"/>

			<script type="text/javascript">
		$(function() {
			$('.lightbox').lightBox();
		});
		</script>
	</head>
<body onload="DateTimeTick()" style="background:url(images/bg3.png)">

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<?php include_once("includes/menubar.php"); ?>
				</div>
			</div>

				<!-- Form Name -->
				<div class="jumbotron">
				<h3 style="text-align:center;font-size:40px;color:#07cbc9;margin-top: 10%">STUDENT'S PERSONAL PROFILE</h3>


						<div class="container">
						  <div class="row">
						  	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
						    
						          <form class="form-horizontal" action="" method="POST">
						          <fieldset>
						         
						            <div class="control-group">
						              <label class="control-label" for="username">FirstName</label>
						            <div class="controls">
						            <input type="email" id="fname" name="fname" placeholder="FirstName" class="form-control input-lg">
						          
						              </div>
						            </div>
						         
						            <div class="control-group">
						              <label class="control-label" for="email">MiddleName</label>
						              <div class="controls">
						                <input type="name" id="midName" name="midName" placeholder="MiddleName" class="form-control input-lg">
						             
						              </div>
						            </div>
						         
						            <div class="control-group">
						              <label class="control-label" for="password">LastName</label>
						              <div class="controls">
						                <input type="name" id="lname" name="lname" placeholder="LastName" class="form-control input-lg">
						          
						              </div>
						            </div>
						         
						            <div class="control-group">
						              <label class="control-label" for="email">Email</label>
						              <div class="controls">
						                <input type="email" id="email" name="email" placeholder="example@yahoo.com" class="form-control input-lg">
						                
						              </div>
						            </div>

						            <div class="control-group">
						              <label class="control-label" for="address1">Address One</label>
						              <div class="controls">
						                <input type="address" id="addr1" name="address1" placeholder="home_address1" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group">
						              <label class="control-label" for="address2">Address Two</label>
						              <div class="controls">
						                <input type="address" id="addr2" name="address2" placeholder="home_address2" class="form-control input-lg">
						                </div>
						            </div>
						         	
						         	 <div class="control-group">
						              <label class="control-label" for="school">School Attended Before</label>
						              <div class="controls">
						                <input type="name" id="sch" name="school" placeholder="Previous School" class="form-control input-lg">
						                </div>
						            </div>

						            <div class="control-group">
						              <label class="control-label" for="school">City</label>
						              <div class="controls">
						                <input type="name" id="city" name="city" placeholder="City of Residence" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group">
						              <label class="control-label" for="school">State of Origin</label>
						              <div class="controls">
						                <input type="name" id="SofR" name="state" placeholder="State of Origin" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group">
						              <label class="control-label" for="school">Preferred Class</label>
						              <div class="controls">
						                <input type="name" id="klass" name="class" placeholder="Preferred Class" class="form-control input-lg">
						                </div>
						            </div>

						            <div class="control-group">
						              <label class="control-label" for="school">Phone Number</label>
						              <div class="controls">
						                <input type="Number" id="phone" name="phone" placeholder="Preferred Phone" class="form-control input-lg">
						                </div>
						            </div>

						            <div class="control-group">
						              <label class="control-label" for="school">Specify Your Health Issue</label>
						              <div class="controls">
						                <textarea type="name" id="health" name="health" placeholder="Specify your ailment" class="form-control input-lg">
						                </div>
						            </div>

						            <hr/>
									<div class="container">
									<h3 style="color:#07cbc9"> Parent/Guardian/Sponsor Details</h3>

									<div class="control-group">
						              <label class="control-label" for="school">Name of Parent</label>
						              <div class="controls">
						                <input type="name" id="Pname" name="Pname" placeholder="Parent Names" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group">
						              <label class="control-label" for="school">Occupation</label>
						              <div class="controls">
						                <input type="name" id="job" name="work" placeholder="Place of work" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group">
						              <label class="control-label" for="school">Office Address</label>
						              <div class="controls">
						                <input type="name" id="offAddr" name="offAddr" placeholder="Office Address" class="form-control input-lg">
						                </div>
						            </div>

						             <div class="control-group"
						              <div class="controls">
						                <input type="name" id="Pnumber" name="Pnumber" placeholder="Parent Number" class="form-control input-lg">
						                </div>
						            </div>

						            	<div class="form-check">
										    <label class="form-check-label">
										      <input type="checkbox"  class="form-check-input" required>
										      Check me out
										    </label>
										</div>
								  <br>
									<div class="form-group">
									  <label class="col-md-4 control-label" for="submit"></label>
									  <div class="col-md-4">
									    <button  type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
									  </div>
									</div>
								</fieldset></div>
							</form>

						</div>
					</div>

			</div></div>

			<div class="row" style="margin-top:20%">
				<?php include_once("includes/footer.php"); ?>
			</div>

		</div>

</body>
</html>