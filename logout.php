<?php
/*
	|*  LOG OUT PAGE
	|*  Start the session
	|*  Unset the date
	|*  Destroy the session
*/
 
	session_start();  
	session_unset(); 
	session_destroy();  


/*
	|* After the user logs out, redirect to the login page again
*/

header("Location: index.php"); 
exit();



?>

