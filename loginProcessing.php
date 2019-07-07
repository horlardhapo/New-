<?php
session_start();
	//establishment of connection to the server by passing username and password by inclusion
	include('connect.php');

	$error = ''; // variable to store errors

	if(isset($_POST['submit'])){

		if(empty($_POST['email']) || empty($_POST['password'])){

			$error = "Email or Password is Invalid";
		}
		else{

			// collect variable to store the email and password

			$email = $_POST['email'];
			$password = $_POST['password'];

			// sql query to fetch information on the user
			$query =mysql_query("SELECT * FROM reg WHERE email='$email' AND password='$password' ");
			$rows =mysql_num_rows($query);
			while ($row = mysql_fetch_assoc($fetchInfo)) {
						# code...
						$user = $row['username'];
						$email = $row['email'];
						$_SESSION['username'] = $user;
						$_SESSION['email'] = $email;

						}
					if($rows ==1){
							 header("Location: BiodataRecord.php"); // redirecting to another page
				}
					else{
						header("Location:login.php");
					}
					mysql_close($connect);		
			}
		}

?>