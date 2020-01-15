<?php
session_start();
// $noNavbar = ''; if you include this in the page the navbar will not show in this page
$pageTitle = 'Login';

include "init.php";
include $tpl . "header.php";

//Start of th team page 

?>
<div class="container">
	<div class="jumbotron">
		<h2 class="text-left">This is Team Management page</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, neque, dignissimos. Quisquam dicta, voluptates vel molestiae corrupti fugiat dolores vero? </p>
		
	</div>
	
</div>
<?php


//End of th team page 

?>

<?php 
include $tpl . "footer.php"; 
 ?>