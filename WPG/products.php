<?php 
$maincontent = 'Stay tuned for additional apps for an area you are interested in. If you have a specific area of interest, send us a text or email so we can look into it.
';
$sidecontent = '<h5>Why get Word Power Genius?</h5>
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
<div id="product_content">
	<p2>
	<h4><a href="https://play.google.com/store/apps/details?id=com.au.development.gold.wpg">Prefix/Suffixes (Available Now)</a></h4>
	<div class="images">
		<img src="img/full_logo.png" alt="UH" Width = 250px Height = 150px>
	</div>
	<?php $text = "The orginal Word Power Genius app. Learn the roots, suffixes and prefixes of words to expand you vocabulary. Instead of memorizing words, learn how to build more words using roots form Greek, Latin, and Old English. This will help you understand what words mean by breaking down the words into their components and analyzing what each of those means.";
	$newtext = wordwrap($text, 100, "<br />\n");
		    echo $newtext;
		    ?>
	<h4>Foreign Words (Coming Soon)</h4>
	<div class="images">
		<img src="" alt="LOGO" Width = 250px Height = 150px>
	</div>
	<?php $text = "Foreign Words Description";
	$newtext = wordwrap($text, 100, "<br />\n");
		    echo $newtext;
		    ?>
	<br>
	<h4>Specialized Academic Vocabulary (Coming Soon)</h4>
	<div class="images">
		<img src="" alt="LOGO" Width = 150px Height = 150px>
	</div>
	<?php $text = "Specialized Academic Vocabulary Description";;
	$newtext = wordwrap($text, 100, "<br />\n");
		    echo $newtext;
		    ?>
	<h4>Latin/Greek Roots (Coming Soon)</h4>
	<div class="images">
		<img src="" alt="LOGO" Width = 150px Height = 150px>
	</div>
	<?php $text = "Latin/Greek Roots Description";
	$newtext = wordwrap($text, 100, "<br />\n");
		    echo $newtext;
		    ?>
	</p2>
	<br><br>
</div>
<?php
include('footer.php');
?>

