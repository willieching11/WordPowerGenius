<?php 
$maincontent = 'Here are some short clips of how <b3>Word Power Genius</b3> works and how <u>you</u> can benefit from it!';
$sidecontent = '<h5>History of Word Power Genius?</h5>
<p>Academic language is more complex than every-day English. It is a second language for native English speakers and a third language for English learners.</p>
<p>This app would help:</p>
<div id="navcontainer">
	<ul>
		<li>Students preparing for the <b2>SAT</b2>, <b2>ACT</b2>, or <b2>GRE</b2></li>
		<li>College Students increase academic vocabulary</li>
		<li>Students interested in careers in
			<ul>
				<b2><li>Science</li>
				<li>Medicine</li>
				<li>Biology</li>
				<li>Law</li></b2>
			</ul>
		</li>
	</ul>
</div>
<img src="img/study.png" class="imgBottom2" />';
include('templates.php');
?>
<br>
<div id="video_content">
	<center><h3>Why Should I get Word Power Genius?</a></h3>
	<p3><?php $text = "Learn how Word Power Genius can help you and the benefits that come with improving your vocabulary";
		    echo $text;
		    ?><br>
	<br>
	</p3>
	<iframe width="640" height="360"
src="https://www.youtube.com/embed/IbmJcyno-zQ">
</iframe> <br>
	<h3>How it works!</h3>
	<p3><?php $text = "Here is an example of the basic concept that Word Power Genius teaches you";
		    echo $text;
		    ?><br>
	<br>
	</p3>
	<iframe width="640" height="360"
src="https://www.youtube.com/embed/aBB8Jj_2bDk">
</iframe> <br>
	<h3>Power of Word Power Genius</h3>
	<iframe width="640" height="360"
src="https://www.youtube.com/embed/W-6nCSAvpXc">
</iframe></center>
	<br><br>
</div>
<?php
include('footer.php');
?>

