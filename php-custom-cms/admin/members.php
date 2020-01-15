<?php
/*
* == Manage Memebers Page
* == this will have the functionality of deleting, adding, Inserting new data and so forth
*/
session_start();
$pageTitle ="Memebers";
if(isset($_SESSION['Username'])){
	include 'init.php';


$do = isset($_GET['do'])? $_GET['do']: 'Manage';
	if($do == 'Manage'){//Manage Section
	}


elseif($do == 'Edit') {//Edit Section

/* ====================
if (isset($_GET['userid']) && is_numeric($_GET['userid'])) { echo intval($_GET['userid']); }else{ echo 0; }
=====================*/

//Short if statement and also make sure the userid is an interger
$userid =(isset($_GET['userid']) && is_numeric($_GET['userid'])) ? intval($_GET['userid']) : 0;

	//$stmt = $con->prepare("SELECT * FROM users WHERE UserID = ? LIMIT 1");
//exucute the query first
    //$stmt->execute(array($userid));
    // then, fetch the database
    // $row = $stmt->fetch();
    // $count = $stmt->rowCount();
 //if the user exists in database, then show the form, else don't show the form




$stmt = $con->prepare("SELECT * FROM users WHERE UserID = ?  LIMIT 1");
	$row = $stmt->fetch();
    $stmt->execute(array($userid));
    $count = $stmt->rowCount();


// 11/ 2/2017.. I added || because the form is now showing for some reason
if ($stmt->rowCount() > 0 ) { ?>

	<h1 class="text-center text-danger">Edit Members</h1>
		<div class="container">
		<form class="form-horizontal" action="?do=Update" method="POST">
			<input type="hidden" name="userid" value="<?php echo $userid ?>">
		<div class="form-group form-group-lg">
			<label class="col-sm-2 control-label">User Name</label>
			<div class="col-sm-10 col-md-4 col-xs-12">
			<input type="text" name="username" class="form-control" value="<?php echo $row['Username']?>"  required="required" placeholder="username*">
			</div>
			</div>

			<div class="form-group form-group-lg">
			<label class="col-sm-2 control-label">Password:</label>
			<div class="col-sm-10 col-md-4 col-xs-12">
			<input type="hidden" name="oldpassword" value="<?php echo $row['Password']?>" placeholder="password*">
				<input type="password" name="newpassword" class="form-control" autocomplete="new-password" placeholder="password*">
			</div>
			</div>

		<div class="form-group form-group-lg">
			<label class="col-sm-2 control-label">Email Address:</label>
			<div class="col-sm-10 col-md-4 col-xs-12">
				<input type="text" name="email" class="form-control" required="required" value="<?php echo $row['Email']?>" placeholder="email*">
			</div>
			</div>

		<div class="form-group form-group-lg">
			<label class="col-sm-2 control-label">Full Name:</label>
			<div class="col-sm-10 col-md-4 col-xs-12">
				<input type="text" name="full" class="form-control" required="required" value="<?php echo $row['Fullname']?>" placeholder="full name*">
			</div>
			</div>

			<div class="form-group form-group-lg">
			<div class="col-sm-offset-2 sm-10">
				<input type="submit" value="Edit & Save Data" class="btn btn-primary btn-lg">
			</div>
			</div>
			</form>
		</div>

<?php

} else{
			echo "<h1 class='text-danger text-center'>There is no such an ID that you are looking for in this page!</h1>";
		}
}elseif($do == 'Update'){//This is the Update page

 	echo "<h1 class='text-center text-danger'>Update Members</h1>";

 	if($_SERVER['REQUEST_METHOD'] == 'POST'){

 		//Get the form variables
			$id     = $_POST['userid'];
			$user   = $_POST['username'];
			$email  = $_POST['email'];
			$name   = $_POST['full'];

$pass = '';
	if(empty($_POST['newpassword'])){
	$pass = $_POST['oldpassword'];
}else{
	$pass = sha1($_POST['newpassword']);
}

//Now, Update the DATABASE using the information above
$stmt = $con->prepare("UPDATE users SET Username = ?, Email = ?, Fullname = ? Password = ? WHERE UserID = ?");
$stmt->execute(array($user, $email, $name, $pass, $id));

//Now, show the user how many records are entered the database
	echo $stmt->rowCount() . ' Records Updated';
 }

 	else{
 		echo "You are not allowed to Update this page";
 	}

}//end of Edit if


}//username session if end


else{ 
	header('Location: index.php');
	exit(); 
}
include $tpl . 'footer.php';
?>