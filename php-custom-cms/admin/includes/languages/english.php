<?php
function lang($phrase){
	static $lang = array(
		//Navbar Links
		
		'Home'      => 'Home'
	);
	return $lang[$phrase];
}
