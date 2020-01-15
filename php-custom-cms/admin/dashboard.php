<?php
session_start();
// $noNavbar = ""; //this will add navbar on the dashboard
if(isset($_SESSION['Username'])){
	$pageTitle = 'Dashaboard';

	include 'init.php';
	 include $tpl . 'navbar.php'; 
	echo "<h1>Welcome to Dashaboard, " . " ". $_SESSION['Username'] ."</h1>";
//	print_r($_SESSION);


	include $tpl . 'footer.php';
}
else{
		header('Location: index.php');
		exit();
}





