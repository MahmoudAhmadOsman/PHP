<?php 
session_start();
$noNavbar = '';
$pageTitle = 'Login';
//print_r($_SESSION); Check to see if this print the session or not
if(isset($_SESSION['Username'])){
    header('location: dashboard.php'); // after registering the session 
}

include "init.php";
include $tpl . "header.php";
include "connect.php";


//Check if the user is comming from HTTP Post Request or not
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $hashedPass = sha1($password);


//Check if the user already exists in the database or not
//later delete this below part
$stmt = $con->prepare("SELECT UserID, Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1 LIMIT 1");
$row = $stmt->fetch();
    $stmt->execute(array($username, $hashedPass));
    $count = $stmt->rowCount();
 
/* ======================================================
    1st check if counter is greater than 0, if it is grater than 0, this means the user exists in the DataBase
============================================================*/

    if($count > 0){
        $_SESSION['Username'] = $username; //1st register session name
        $_SESSION['ID'] = $row['UserID']; //UserID, I added later
        header('location: dashboard.php'); // after registering the session redirect the user to the dashboard page--> this gives an error I don't know why, but I commented for now
        exit();
    }
}
?>


<div class="container text-center">
    <form class="login" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">  <h3>Staff Login Form</h3>
            <input type="text" class="form-control input-lg" name="user" placeholder="Username*" required="required" autocomplete="off">
            <input type="password" class="form-control input-lg" name="pass" placeholder="Password*" required="required" autocomplete="off">
            <br>
            <input  type="submit" class="btn btn-success btn-lg btn-block" name="submit" value="Login">
            <a href="#" class="text-danger">Forget Password?</a>
            <a href="#">Create an Account</a>
        </form>
    </div>


<?php 
include $tpl . "footer.php"; // 10/27/2017 I commented on this
 ?>


