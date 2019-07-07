<?php
	include"connect.php";
	//$error = ''; // to store error message
	// php code to insert into database

	if(isset($_POST['submit'])){

		$username=$_POST['username'];
		$email=$_POST['email'];
		$pass=$_POST['password'];


		// mysql query to insert data

		$checkmail = "SELECT * FROM reg WHERE username ='$username' AND email='$email'";
				$run = mysql_query($checkmail);
					if(mysql_num_rows($run) > 0){
						echo ('<p> The Email Address is already exist, Please used another email!</p>');
						exit();
					}
				else{

			$query = "INSERT into reg (username,email,password) VALUES('$username','$email','$pass')";

			$result = mysql_query( $query) or die(mysql_error()) ;

			if($result ==1){
				header("Location:login.php");
			}
			else{
				echo 'Registration not Successfully';
			}
			//mysql_close($connect);
	}
}