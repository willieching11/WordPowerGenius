<?php
	session_start();
	function login($id,$email,$fname) {
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['fname'] = $fname;
	}
	function logout() {
	        unset($_SESSION['id']);
	        unset($_SESSION['email']);
			unset($_SESSION['fname']);
	}
    function is_loggedin() {
        if (isset($_SESSION['email'])) {
        	return true;
        } else {
        	return false;
        }
	}
	function authenticate() {
		if (!is_loggedin()) {
			$_SESSION['flash'] = "Invalid Request";
			header('location: index.php');  
			exit();
		}
	}
	function connectDB() {
		mysql_connect("localhost", "root","");
		mysql_select_db("wpg_test");
	}
	
	function getUser($id) {
    		$sql_query = "SELECT * FROM users WHERE id = '". $id . "'";
		print $sql_query . "<br/>";    
		$result = mysql_query($sql_query);
		    
		if (!result) {
			print "Error ".mysql_error();
		        exit();
		}  
		if (mysql_num_rows($result) != 1) {
		        print "User is not in the table " . mysql_num_rows($result);
		        exit();
		}
		$player = mysql_fetch_assoc($result);
		return $player;
    	}
?>