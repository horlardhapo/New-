<?php
//session_start();

	$connect = @mysqli_connect('localhost','root','');
		if(!$connect){
			die("databse connection failed". mysql_error($connect));
		}

		$select_db = mysqli_select_db($connect, 'bashir_db');
			if(!select_db){
			die("databse selection failed". mysql_error($select_db));
		}

			if(isset($_POST) & !empty($_POST)){
		$username = mysqli_real_escape_string($connect,$_POST['username']);
		$email = mysqli_real_escape_string($connect,$_POST['email']);
		$password =md5($_POST['password']);

		 $insert = "INSERT INTO register_tb(username,email,password) VALUES('$username','$email','$password')";
		 $result = mysqli_query($connect, $insert);
		 if($result){
		 	echo "User Registration Successfully";
		 }else{
		 	echo "User Registration Failed";
		 }
	}


?>