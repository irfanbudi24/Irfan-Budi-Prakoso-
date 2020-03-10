<?php
	session_start();
	echo $_SESSION['username'];
	echo $_SESSION['status'];
	echo $_SESSION['name'];
	echo $_SESSION['website'];
	echo $_SESSION['bio'];
	echo $_SESSION['email']; 
?>