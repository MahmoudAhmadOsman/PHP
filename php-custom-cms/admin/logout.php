<?php

//Start the session first before you do anything
	session_start(); // Start the session
	session_unset();// Unset the date
	session_destroy(); //Destroy the session

header("Location: index.php"); //Now, redirect the user to the index page
exit();



?>

