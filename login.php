
<?php     
  include("loginProcessing.php");
?>
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

      <script type="text/javascript">
    $(function() {
      $('.lightbox').lightBox();
    });
    </script>
</head>

<body onload="DateTimeTick()" style="background:url(images/bg3.png)">

    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <?php include_once("includes/menubar.php"); ?>
        </div>
      </div></div>


      <div class="container">
      <div class="row" style="margin-top:10%">
        
        <div class="col-md-9 col-lg-9" style="margin-left:30%">
          <h1 style="margin-left:-40%"> Login Page</h1>

         <form role="form" method="POST" action="loginProcessing.php" >
          <div class="login" style="margin-bottom:auto; padding:25px;">
          <div class="form-group row">
          <label for="inputEmail3" class="col-md-2 col-form-label">Email</label>
          <div class="col-md-4">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
          </div>
        </div>
      <div class="form-group row">
          <label for="inputPassword3" class="col-md-2 col-form-label">Password</label>
          <div class="col-md-4">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
          </div>
        </div>
    <div class="form-group row">
          <div class="offset-md-2 col-md-10">
          <button type="submit" class="btn btn-primary" name="submit">Sign In</button> &nbsp;&nbsp;&nbsp;<a href="register.php" class="btn btn-primary">&nbsp;&nbsp;Register</a>
          </div></div>
       </div>
        </form>
    </div>
</div></div>


      <div class="row" style="margin-top:18%">
        <?php include ("includes/footer.php"); ?>
      </div>

</body>
</html>