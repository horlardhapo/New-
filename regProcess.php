

	<!-- Registerprocess.php-->
	 <?php
	 
	 	$username = $_POST['username'];
	   	$email    = $_POST['email'];
	   	$password = $_POST['password'];
	  
	 
		 $db_name = "bashir";
	  	 $tb_name = "reg";
	 
	 if(isset($_POST['submit'])){
		 
		 $connect = mysql_connect("localhost","root","") or die ("Unable to create the connection");
		 $Select_db = mysql_select_db("$db_name") or die("unable to connect to database");
		 
		$checkUserPass = "SELECT * FROM $tb_name WHERE email='$email' AND $password='password' ";
		 $run = mysql_query($checkUserPass);
		 
			if(mysql_num_rows($run)>0){
				include_once('Register.php');
				 print "<script> document.getElementById('errormsg').innerHTML ='<small style=\"color:red;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\"></a> You have already Registered, Click below to Login</small>'</script>";
				
				exit();
			}
			else{
				
			 $insert = "INSERT INTO $tb_name (username, email, password) VALUES ('$username','$email','$password' )";
			 $query = mysql_query($insert, $connect);
			 
			   if(!$query){
				  include_once('Register.php');
				    print "<script> document.getElementById('errormsg').innerHTML ='<small style=\"color:red;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\"></a> Not Yet Registered</small>'</script>";
				 
			   }
			   else{
				   include_once('Register.php');
				    print "<script> document.getElementById('errormsg').innerHTML ='<small style=\"color:green;\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\"></a> You have been Registered. pls,login</small>'</script>";
				
				   
			   }	 
		 }	
		
	 }
	 
	 ?>
