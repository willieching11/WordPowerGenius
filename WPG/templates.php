<!DOCTYPE html>
<?php
require_once('functions.php');
?>
<html>
	<head>
		<title>Word Power Genius</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="mystyle.css">
	</head>
	<body>
		<div id="wrapper">
			<ul class="nav">
				<div class="scroll-left">
					<span><p>COMPOUND WORDS CONSIST OF <span style='color:red;'>PREFIXES</span>, <span style='color:green;'>ROOT FORMS</span> AND <span style='color:blue;'>SUFFIXES</span> COMBINED TOGETHER TO FORM THE WORD: &emsp;&emsp;&emsp;&emsp;<span style='color:red;'> IN</span>-<span style='color:green;'>GEN</span>-I-<span style='color:blue;'>OUS</span> &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:green;'>ARCHI</span>-<span style='color:green;'>TECT</span>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>CON</span>-<span style='color:green;'>FLU</span>-<span style='color:blue;'>ENCE</span>  &emsp;&emsp;&emsp;&emsp;&emsp;PREFIXES CHANGE THE MEANING OF THE WORD, e.g., &emsp;&emsp;&emsp;<span style='color:green;'>USE</span> AND <span style='color:red;'>RE</span>-<span style='color:green;'>USE</span>&emsp;&emsp;&emsp;
					<span style='color:red;'>RE</span>-<span style='color:green;'>FEREND</span>-<span style='color:blue;'>UM</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:green;'>DICT</span>-A-<span style='color:blue;'>TION</span>  &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
					<span><span style='color:green;'>CARDI</span>-<span style='color:green;'>OLOG</span>-<span style='color:blue;'>IST</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					SUFFIXES CHANGE THE GRAMATICAL NATURE OF THE WORD, i.e., NOUN TO ADJECTIVE, NOUN TO ANOTHER NOUN, ETC., e.g. <span style='color:green;'>RECEIVE</span> AND <span style='color:green;'>RECIP</span>-<span style='color:blue;'>IENT</span>&emsp;&emsp;&emsp;
					<span style='color:red;'>CON</span>-<span style='color:green;'>FEDER</span>-A-<span style='color:blue;'>TION</span>-<span style='color:blue;'>AL</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>METHOD</span>-<span style='color:green;'>OLOG</span>-<span style='color:blue;'>IC</span>-<span style='color:blue;'>AL</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>RE</span>-<span style='color:green;'>FORMUL</span>-<span style='color:blue;'>ATE</span>-<span style='color:blue;'>ING</span>  &emsp;&emsp;&emsp;&emsp;&emsp;</span>
					<span><span style='color:red;'>CON</span>-<span style='color:green;'>TEXT</span>-U-<span style='color:blue;'>AL</span>-<span style='color:blue;'>IZE</span>-<span style='color:blue;'>D</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>IN</span>-<span style='color:red;'>CON</span>-<span style='color:green;'>SIST</span>-<span style='color:blue;'>ENT</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>CON</span>-<span style='color:green;'>DUCT</span>-<span style='color:blue;'>ANCE</span>  &emsp;&emsp;&emsp;&emsp;&emsp;
					<span style='color:red;'>TRANS</span>-<span style='color:green;'>MIS</span>-<span style='color:blue;'>ION</span>  &emsp;&emsp;&emsp;&emsp;&emsp;</span></p>
				</div>
				<div class="logo">
					<img class="logo-image" src="img/logo.png">
				</div>
				<?php if (is_loggedin()) { 
					print "Welcome ".$_SESSION['fname']."!";
				} ?>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="videos.php">Videos</a></li>
				<?php if (is_loggedin()) { ?>
				<li><a href="logout.php">LogOut</a></li>
				<?php } else { ?>
				<li><a href="login.php">LogIn/Register</a></li> <?php } ?>
			</ul>
				<div id="content_area">
					<?php if (isset($maincontent)){
						echo $maincontent;
					}?>
				</div>
				<div id="sidebar">
					<?php if (isset($sidecontent)) {
						echo $sidecontent; 
					}?>
				</div>
				<br><br><br><br><br><br><br><br>
		</div>