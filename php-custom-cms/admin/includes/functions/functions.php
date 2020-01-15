<?php
//Display: Titles for all pages, and display default for other pages that that doesn't have a title function in it.


function getTitle() {
	 global $pageTitle;

	if(isset($pageTitle)){
	echo $pageTitle;
}
else{
	echo 'Default';

}

}



?>