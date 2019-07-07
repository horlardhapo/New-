<!doctype html>
<html lang="en">
<head>
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
</head>

<body  style="background:url(images/bg3.png)">

			<div class="container-fluid">
				
				<div class="row" > 
						<div class="col-md-12 col-lg-12">	
							<p style="text-align:center;font-size:11pt;color:#710;font-weight:bold;padding:1%">BIODATA REGISTRATION CONFIRMATION</p>
						</div>
				</div>
				
				<div class="row" style="margin:2% 0 2% 0;background:url(images/ui.png);margin-top:-5%"> 
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2" style="padding:1%;margin-top:-2%">	
							<div class="jumbotron">
						<h4 style="text-align:center">Enter your Email to Print your Registration Form</h4>
							<form role="form" method="POST" action="BiodataDetails.php" >
			                    <div class="form-group">
			                       <input class="form-control" placeholder="Email Address" name="Email" maxlength="50" type="email" required>
								</div>
							<button type="submit" name="printForm" class="btn btn-sm btn-success" >
							<span class="glyphicon glyphicon-print"></span>&nbsp;Proceed</button>
								
							<a href="index.php" class="btn btn-warning btn-sm" role="button" style="">
							Back &nbsp;<span class="glyphicon glyphicon-chevron-left"></span></a>	
							</form>
						</div>
						</div>
				</div>





		<div class="row" style="margin-top: 12%">
				<?php include_once("includes/footer.php"); ?>
			</div>
		</div>
	
</body>
</html>