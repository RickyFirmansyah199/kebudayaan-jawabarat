<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="database_pbw";
	//buat koneksi dan cek disini

	//crete koneksi
	$conn = mysqli_connect($server, $username, $pass, $dbname);
	
	//check connection
	if (!$conn) {

		die("connection failed  :" . mysqli_connect_error());	

	}
	
	

?>