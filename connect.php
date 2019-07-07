<?php
	
	$connect = mysql_connect("localhost","root","") or die(mysql_error());
		$database='bashir';
		if (!$connect) {
		  echo( '<p>Unable to connect to the ' .
		        'database server at this time.</p>' );
		  exit();
		}
		$database= mysql_select_db($database, $connect) or die(mysql_error());
		if( !$database){
		 die("Couldn't connect to the database at all");
		}

?>