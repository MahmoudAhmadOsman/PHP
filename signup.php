<!-- HTML signup form and PHP  -->

<?php
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'shop';

	$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
	die ("Connection Failled: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	if(isset($_POST['submit'])){

			$firstname  = $_POST['firstname'];
			$lastname   = $_POST['lastname'];
			$email      = $_POST['email'];
			$username   = $_POST['username'];
			$password   = $_POST['password'];
			$password2  = $_POST['password2'];
			$hashPass   = sha1($_POST['password']);
			 

//Check for Erros
echo "<div class='container' style='width:45%;'>";		
if(empty($password && $password2)){

	echo "<div class='alert-danger text-center'>Passwords is required</div>" .'<br/>';
}

if($_POST['password'] !== $_POST['password2']){ 
		
echo "<div class='alert-danger text-center'>Passwords must be the same and match!</div>". '<br/>';

	}

if(strlen($username) < 5){
	
			echo "<div class='alert-danger text-center'>Username must be longer than 5 characters!</div>". '<br/>';

}
	 
if(empty($firstname)){
	
		echo "<div class='alert-danger text-center'>First name is required!</div>". '<br/>';
	}

	if(empty($lastname)){
	
		echo "<div class='alert-danger text-center'>Last name is required!</div>". '<br/>';
	}

	if(empty($email)){
		
		echo "<div class='alert-danger text-center'>Email name is required!</div>". '<br/>';
	}

	if(empty($username)){
		
		echo "<div class='alert-danger text-center'>Username is required!</div>". '<br/>'; 
		header("refresh:5; url=signup.php");
echo "</div>";
}




else{

$sql = "INSERT INTO signupform (firstname, lastname, email, username, password, password2) VALUES ('$firstname', '$lastname', '$email', '$username', '$password', '$password2')";

mysqli_query($conn, $sql);
	echo "<h2 class='text-center text-success'>Congratulations!<br/> Your are successfully registered!</h2>";
			header("refresh:5; url=index.php"); 

	}

}


}




?>

<div class="container">
	<h2 class="text-center text-danger">Registration Form</h2>
	<p class="lead text-center text-info">Please, fill out the form and provide all the neccessary information.</p>
<table class="table-reponsive sign-up">

<form class="form-group" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<tr>
	<td>First Name:</td>
	<td>
		<input type="text" class="form-control" name="firstname" placeholder="First name is required*">
	</td>
</tr>
	<tr>
	<td>Last Name:</td>
	<td>
		<input type="text" class="form-control" name="lastname" placeholder="Last name is required*">
	</td>
</tr>

	<tr>
	<td>Email Address:</td>
	<td>
		<input type="email" class="form-control" name="email" placeholder="Email*">
	</td>
</tr>

	<tr>
	<td>User Name:</td>
	<td>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</td>
</tr>


	<tr>
	<td>Password:</td>
	<td>
		<input type="password" class="form-control" name="password" placeholder="Password*">
	</td>
</tr>
<tr>
	<td>Confirm Password:</td>
	<td>
		<input type="password" class="form-control" name="password2" placeholder="Password must be same*">
	</td>
</tr>


<tr>
	
	<td>
		<input type="submit" name="submit" class="btn btn-info" value="Submit">
	</td>
</tr>



</form>
</table>
	 
</div>






<style type="text/css">
.sign-up {
	margin: 5px auto;
}
	.sign-up input{
		margin-bottom:  10px;
	}
</style>



