<?php
//Routing Directories
include 'connect.php';
	$tpl = "includes/templates/";//All Template Directories
	$lang = "includes/languages/"; //language Directory
	$fun = 'includes/functions/';
	$css = "layout/css/"; //CSS Directory
	$js = "layout/js/"; //js Directory




//Include all files here
include $fun . 'functions.php';
include $lang . 'english.php';
include $tpl . 'header.php';
// include $tpl . 'navbar.php'; This will take down the navboar header on the index page, which i was having trouble before

//include navbar on all page -- execpt the one with $noNarbar variable
if(!isset($noNavbar)){

	include $tpl . 'navbar.php';
}

?> 



