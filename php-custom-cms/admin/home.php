<?php
include "init.php";
session_start();

if(isset($_SESSION['Username'])){	 
	include 'init.php';
	 include $tpl . 'navbar.php';
	include $tpl . 'footer.php';

	
}
// else{
// 		//header('location: index.php');
// 		exit();
// 	}

?>

