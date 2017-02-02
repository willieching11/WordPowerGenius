<?php 
$maincontent = 'LogIn';
$sidecontent = 'Register today!';
include('templates.php');
session_start();
require_once('functions.php');
connectDB();
$errorstring = "";
$valid_post = true;
$error_string = "";
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    $hashed_password = sha1($_POST['password']);
    $sql = "SELECT * FROM users WHERE ";
    $sql .= "email='" .$_POST['email']. "' AND ";
    $sql .= "hashed_password='$hashed_password'";
    echo $sql."<br/>";
    $result = mysql_query($sql);
    
    if (mysql_num_rows($result) != 1) {
        $error_string = true;
        $valid_post = false;
    } else  {
        $user = mysql_fetch_assoc($result);
        login($user['id'], $user['email'], $user['fname']);
    }
} else {
    $valid_post = false;
}
if ($valid_post) { 
	$_SESSION['id'] = $_GET['id']; 
	header('location: index.php');  
	exit();
} else {
?>
<div class = "forms">
	<?php 
	if ($error_string) { ?>
		<span class="error">Invalid Email/password</span>
	<?php } ?>
	<form action="login.php" method="post">
		Email: <input type="text" name="email"><br/>
		Password: <input type="password" name="password"><br/>
		<input type = "submit" value="Login" class="button">
	</form>
	<br>
	Not a member? Register <a href="register.php">here</a>
</div>
<?php 
}
include('footer.php');
?>