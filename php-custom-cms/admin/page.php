<?php

/*=================
=-> Gategories =>[Manage | Edit | Update | Add | Insert | Delete  | and so forth]
======================*/

//$do ="";
//if(isset($_GET['do'])){ $do = $_GET['do'];}else{$do = "Manage";}

// Short if Condidtion
$do = isset($_GET['do'])? $_GET['do']: 'Manage';

//if the page is the Main page, then do this

if($do == "Manage"){
	echo "Welcome, Manage Catagory";
	echo '<a href="page.php?do=Add"> Add New Catagory';

}elseif ($do =="Add") {
	echo "Welcome, You are in the Add Catagory page";
}
else{
	echo "Error: There is not page with this name!";
}









?>
