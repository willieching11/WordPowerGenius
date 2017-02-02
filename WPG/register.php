<?php 
require_once('functions.php');
connectDB();
$maincontent = 'Register today!';
$sidecontent = 'Register today!';
include('templates.php');
$valid_post = true;
$error_string = "";
$password_error = false;
$email_error = false;
$fname_error = false;
$lname_error = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$sql = "SELECT * FROM users WHERE ";
    $sql .= "email='" .$_POST['email']. "'";
    $result = mysql_query($sql);
	if (mysql_num_rows($result) == 1) {
        $error_string .= "Email already taken<br/>";
        $valid_post = false;
		$email_error = true;
    }
	if ($_POST["password"] != $_POST["confirm_password"]) {
		$valid_post = false;
		$error_string .= "Passwords did not match<br/>";
		$password_error = true;
	}
	if (strlen($_POST["fname"]) < 1) {
		$valid_post = false;
		$error_string .= "Please enter your First Name<br/>";
		$fname_error = true;
	}
	if (strlen($_POST["lname"]) < 1) {
		$valid_post = false;
		$error_string .= "Please enter your Last Name<br/>";
		$lname_error = true;
	}
	$email = $_POST["email"];
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$valid_post = false;
		$email_error = true;
  		$error_string .= "Enter a valid email.<br/>";
	}
	if (strlen($_POST["password"]) < 3) {
		$valid_post = false;
		$error_string .= "Password too short!<br/>";
		$password_error = true;
	}
	if ($valid_post) {
        	$hashed_password = sha1($_POST['password']);
        	$sql_query = "INSERT INTO users(email,fname,lname,hashed_password) VALUES (";
        	$sql_query .= "'".$_POST['email']."',";
	        $sql_query .= "'".$_POST['fname']."',";
			$sql_query .= "'".$_POST['lname']."',";
	        $sql_query .= "'$hashed_password');";
	        $result = mysql_query($sql_query);
	        if (!result) {
        		print "<br/>MYSQL Error: ".mysql_error();
        	}
	}
	if (!$valid_post) {
		$fname = $_POST["fname"];
		$fname = $_POST["lname"];
		$email = $_POST["email"];
	}
} else {
	$valid_post = false;
}

?>
<?php 
if ($valid_post) { 
    $sql = "SELECT * FROM users WHERE ";
    $sql .= "email='" .$_POST['email']. "'";
    $result = mysql_query($sql);
    $user = mysql_fetch_assoc($result);
	login($user['id'], $user['email'], $user['fname']);
	$_SESSION['id'] = $_GET['id']; 
	header('location: index.php');  
	exit();
} else {
?>
<div class = "forms">
	<?php 
	if ($error_string) { 
		echo $error_string; 
	} ?>
	
	<form action="register.php" method="post">
		<?php
		if ($fname_error) { ?>
			<span class="error">First Name:</span><input type="text" name="fname"><br/>
		<?php } 
		else { ?>
		 	First Name: <input type="text" name="fname"><br/>
		<?php } 
		if ($lname_error) { ?>
			<span class="error">Last Name:</span><input type="text" name="lname"><br/>
		<?php } 
		else { ?>
		 	Last Name: <input type="text" name="lname"><br/>
		<?php } 
		if ($email_error) { ?>
			<span class="error">Email:</span> <input type="text" name="email"><br/>
		<?php } 
		else { ?>
		 	Email: <input type="text" name="email"><br/>
		<?php
		} 
		if ($password_error) { ?>
			<span class="error">Password:</span> <input type="password" name="password"><br/>
			<span class="error">Confirm Password:</span> <input type="password" name="confirm_password"><br/>
		<?php } 
		else { ?>
		 	Password: <input type="password" name="password"><br/>
			Confirm Password: <input type="password" name="confirm_password"><br/>
		<?php
		} ?>
		<br>
		<input type="submit" value="Register" class="button">
	</form>
</div>
<?php 
}
include('footer.php');
?>


