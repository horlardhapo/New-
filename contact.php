<!doctype html>
<html lang="en">
	<?php include_once("includes/header.php"); ?>


<body onload="DateTimeTick()" style="background:url(images/bg3.png)">

		<div class="container-fluid">
		<div class="row">
				<div class="col-md-12 col-lg-12">
					<?php include_once("includes/menubar.php"); ?>
				</div>
			</div>

			<div class="row" style="margin-top:6%">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<h3 style="background:#07cbc9;color:#fff">  CONTACT US HERE :</h3>
				</div>
			</div>
			</div>
				<div class="row" style="margin-top:1%">
				<div class="col-md-6 col-lg-6">
				<h3 style="color:#07cbc9">CONTACT</h3>
				<label class="line"></label>
				<h4>OUR ADDRESS:</h4>
				<h5>Flat No:42/16, <br>Amuloko Paapa Area, <br>Ibadan Oyo State.</h5>
				<h4> Phone:</h4>
				<h5>+23480 6383 1622</h5>
				<h4>E-mail:</h4>
				<h5><a href="mailto:dhapolink@gmai.com">dhapolink@gmail.com</a></h5>
				<h4>Our Website:</h4>
				<h5><a href="https://www.Al-bashir.edu.ng.com/">www.Al-Bashir.edu.ng.com</a></h5>
				</div>


				<div class="col-md-6 col-lg-6">

					<p id="feedback"><?php echo $feedback;?></p>
					<form  action="contactProcess.php" method="post" class="form-group">
                        <input type="text" name="client_name" placeholder="your Name" required="">
						<input type="text" name="client_phone" placeholder="your Phone" required="">
						<input type="text" name="client_email"placeholder="your Email" required="">
						<textarea rows="5" cols="50" name="comment" placeholder="Write Your Comment Here"></textarea><br>
						<input type="submit"  name="send" value="SEND MESSAGE">
				</form>
				</div>

			</div>

			<div class="row" style="margin-top:4%">
				<?php include_once("includes/footer.php"); ?>
			</div>

		</div>

</body>
</html>