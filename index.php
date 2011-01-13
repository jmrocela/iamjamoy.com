<?php
error_reporting(0);
session_start();
$_SESSION['nonces'] = array();
	
if (@$_POST["moginurwnidubsklifb"] AND @$_POST["oijpowighsadojngrlkj"] AND @$_POST["zxciowentpodsdpg"] AND @$_POST['_nonce']) {
	if (verify_nonce($_POST['_nonce'])) {
		$to = 'me@iamjamoy.com';
		$subject = 'You have been contact by ' . strip_tags($_POST["moginurwnidubsklifb"]) . ' of ' . strip_tags($_POST["oijpowighsadojngrlkj"]) . ' on iamjamoy.com';
		$message = strip_tags($_POST["zxciowentpodsdpg"]);
		$headers = 'From: ' . strip_tags($_POST["oijpowighsadojngrlkj"]) . "\r\n" .
						 'Reply-To: ' . strip_tags($_POST["oijpowighsadojngrlkj"]) . "\r\n" .
						 'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>iamjamoy. a web developer, designer &amp; enthusiast</title>
		<link rel="stylesheet" type="text/css" href="styles.css" media="all" />
		<meta name="description" content="I help people make beautiful websites, functional applications	and seamless user experiences.">
		<meta name="keywords" content="jamoy, iamjamoy, web design, web development, github, forrst, php, resume, cv">
	</head>
<body>
	<div id="container">
		<div id="bar">
			<div class="wrapper">
				<div id="codepassive"><a href="http://codepassive.com/?ref=iamjamoy" title="CodePassive"><img src="images/codepassive.logo.png" alt="" border="0" /></a></div>
			</div>
		</div>
		<div id="me">
			<div class="wrapper">
				<div class="padding">
					<h1>IAMJAMOY</h1>
					<h2>
						I am John, a Web Designer and Developer. <a href="http://github.com/jmrocela/">A PHP Ninja</a>.<br/>
						I help people make <a href="javascript:;" class="scrolltoportfolio">beautiful websites</a>, functional applications<br/>
						and <a href="http://themeconcert.com/">seamless user experiences</a>.
					</h2>
					<h5>I also <a href="http://blog.iamjamoy.com/">write random stuff</a> about what I’m interested in.</h5>
				</div>
			</div>
		</div>
		<div id="social">
			<div class="wrapper">
				<div id="icons">
					<a href="http://twitter.com/jmrocela" title="@jmrocela"></a>
					<a href="http://forrst.com/people/jmrocela" title="I'm on forrst"></a>
					<a href="http://github.com/jmrocela/" title="my open source projects"></a>
					<a href="http://blog.iamjamoy.com/" title="subscribe to my blog"></a>
				</div>
			</div>
		</div>
		<div id="products">
			<div class="wrapper">
				<div id="concerto" class="product">
					<a href="http://themeconcert.com/concerto" class="logo"></a>
					<div class="desc"><a href="http://themeconcert.com/concerto">Concerto is a Fresh &amp; New Premium Wordpress Theme Framework for everyone.</a></div>
					<div class="wordpress outofthebox"><a href="http://wordpress.com/"><img src="images/wordpress.png" alt="Wordpress" border="0" /></a></div>
				</div>
			</div>
		</div>
		<div id="about">
			<div class="wrapper">
				<div class="padding">
					<div id="aboutme">
						<h3>About me...</h3>
						<p>Hi there, I am John, a Web designer and developer, 21 years of age. I have been working as a freelance for almost 5 years now and I will be glad in helping you create your next awesome project.</p>
						<p>I  have been working after I graduated in high school. I have created lots of public and private websites(some shown below) and always looking for more work to learn from. I am using PHP as my primary language server side language. You can see my skillset beside this text.</p>
						<p>I am person who is willing to learn and adapts quickly. I am keen to design and security. I believe in the core principles of Open Source and support it. I have a minimalistic approach to design and usability. Simplicity is beauty they say.</p>
						<div id="personal">
							<a href="public/cv-january2011.pdf">View my CV</a>
							<a href="javascript:;" class="scrolltocontactme">Contact me</a>
						</div>
					</div>
					<div id="skillsandbelief">
						<h3>Skills</h3>
						<ul>
							<li>PHP</li>
							<li>SQL Databases &amp; noSQL engines</li>
							<li>Javascript &amp; AJAX (JSON)</li>
							<li>xHTML &amp; HTML5</li>
							<li>CSS2.1 &amp; CSS3</li>
							<li>Web Application development</li>
							<li>Android Development</li>
							<li>Development &amp; Deployment</li>
							<li>Multimedia Production</li>
							<li><a href="http://blog.iamjamoy.com/tags/web"><em>...and anything Web Related...</em></a></li>
						</ul>
						<h3>Belief</h3>
						<ul class="left">
							<li>Open Source</li>
							<li>Modular</li>
							<li>Test Driven</li>
							<li>Minimal</li>
							<li>Simple</li>
						</ul>
						<ul class="right">
							<li>Productive</li>
							<li>Valid</li>
							<li>Secure</li>
							<li>Extensible</li>
							<li>Innovative</li>
						</ul>
					</div>
					<div id="ps">"I develop web apps on CodePassive."</div>
				</div>
			</div>
		</div>
		<div id="portfolio">
			<div class="wrapper">
				<div class="padding">
					<h3>Portfolio</h3>
					<h4>Web</h4>
					<div class="projects">
						<div class="project"><div class="desc"><div>Soshified Philippines - a Philippine Fansite for Girls' Generation</div></div><a href="http://soshified.ph/" target="_blank"><img src="images/projects/soshifiedph.jpg" border="0" alt=""/></a></div>
						<div class="project"><div class="desc"><div>Skullcandy - Perfect company for your music</div></div><a href="http://skullcandy.com/" target="_blank"><img src="images/projects/skullcandy.jpg" border="0" alt=""/></a></div>
						<div class="project"><div class="desc"><div>iamjamoy - old version for iamjamoy.com</div></div><a href="http://iamjamoy.com/" target="_blank"><img src="images/projects/iamjamoy.jpg" border="0" alt=""/></a></a></div>

						<div class="project"><div class="desc"><div>Sgamingx - Forum for a Gaming Guild</div></div><a href="http://sgamingx.com/" target="_blank"><img src="images/projects/sgamingx.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>Sgamingx beta - proposed design for Sgamingx</div></div><a href="http://beta.sgamingx.com/" target="_blank"><img src="images/projects/sgxbeta.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>Activeo - Magento hosting and development</div></div><a href="http://activo.com/" target="_blank"><img src="images/projects/activo.jpg" border="0" alt=""/></a></a></div>

						<div class="project"><div class="desc"><div>Black and White - Thesis Wordpress theme</div></div><a href="http://thesisdoctor.com/skins/blackandwhite/" target="_blank"><img src="images/projects/blackandwhite.jpg" border="0" alt=""/></a></div>
						<div class="project"><div class="desc"><div>Site design for Brendan Wenzel - made with Thesis on Wordpress</div></div><a href="http://brendanwenzel.net/" target="_blank"><img src="images/projects/brendanwenzel.jpg" border="0" alt=""/></a></div>
						<div class="project"><div class="desc"><div>Costaricaunplugged site design - made with Thesis on Wordpress</div></div><a href="http://costaricaunplugged.com/" target="_blank"><img src="images/projects/costaricaunplugged.jpg" border="0" alt=""/></a></a></div>

						<div class="project"><div class="desc"><div>Magento development</div></div><a href="http://britainwest.com/" target="_blank"><img src="images/projects/britainwest.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>UCstrategies - Page design &amp; interaction</div></div><a href="http://ucstrategies.com/" target="_blank"><img src="images/projects/ucstrategies.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>ICollegeWeb system development</div></div><a href="http://icollegeweb.com/" target="_blank"><img src="images/projects/icollegeweb.jpg" border="0" alt=""/></a></a></div>

						<div class="project"><div class="desc"><div>Zobody design - made on Wordpress</div></div><a href="http://zobodywellness.com/" target="_blank"><img src="images/projects/zobody.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>Cafe Flore design - Static pages</div></div><a href="http://cafeflore.com/" target="_blank"><img src="images/projects/cafeflore.jpg" border="0" alt=""/></a></a></div>
						<div class="project"><div class="desc"><div>Maaden Design - made on Wordpress</div></div><a href="http://maaden.com.sa/" target="_blank"><img src="images/projects/maaden.jpg" border="0" alt=""/></a></a></div>
						
						<div class="clear"></div>
					</div>
					<h4 id="postprojects">for my open source programming projects, visit my <a href="http://github.com/jmrocela">github</a> repository.</h4>
				</div>
			</div>
		</div>
		<div id="contact">
			<div class="wrapper">
				<div class="padding">
					<h3>Contact Me</h3>
					<p>you can contact me by my public email <em><a href="mailto:me@iamjamoy.com">me@iamjamoy.com</a></em> or CodePassive’s contact email <em><a href="mailto:hello@codepassive.com">hello@codepassive.com</a></em>, alternatively, you can reach me via the awesome contact form below.</p>
					<div id="form">
						<form method="POST">
						<input type="hidden" value="<?php echo nonce(); ?>" name="_nonce" />
						<div style="display:none;"><input type="text" name="name" /><input type="text" name="email" /><textarea name="message"></textarea></div>
						<div id="labels">
							<p><label for="moinaushdtlawjkdsf">Name</label></p>
							<p><label for="porijosdnakjrblksajiu">Email</label></p>
							<p><label for="cvoihryoncoxirypweo">Message</label></p>
						</div>
						<div id="input">
							<p><input type="text" name="moginurwnidubsklifb" id="moinaushdtlawjkdsf"/></p>
							<p><input type="text" name="oijpowighsadojngrlkj" id="porijosdnakjrblksajiu"/></p>
							<p><textarea name="zxciowentpodsdpg" id="cvoihryoncoxirypweo"></textarea></p>
							<p class="right">Your Email will not be stored and will be kept safe. don’t worry.</p>
							<input type="submit" value="send" id="neiowubsndiufbyaw" />
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="wrapper">
				<div class="padding">
					<div id="copyright">
						<a href="http://iamjamoy.com/" id="iamjamoyfooter"></a>
						<a href="http://codepassive.com/" id="codepassivefooter"></a>
						<p>copyright &#0169; 2011 &#0183; <a href="http://iamjamoy.com/v1/">old version</a> &#0183; hosted at <strong><a href="http://www.mediatemple.net/">(mt)</a></strong></p>
						<p id="love">made with html5 &amp; css3 love</p>
						<p><br/>This page is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.<br />Based on a work at <a xmlns:dct="http://purl.org/dc/terms/" href="http://github.com/jmrocela/iamjamoy.com" rel="dct:source">github.com</a>.</p>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.scrollTo-1.4.2-min.js"></script>
	<script type="text/javascript" src="iamjamoy.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-18694986-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>
<?php
// Simple nonce implementation
function nonce($salt = 'thisisarandomsalt') {
	$_SESSION['nonce'] = (isset($_SESSION['nonce'])) ? $_SESSION['nonce']: sha1(time() . $salt);
	return $_SESSION['nonce'];
}

function verify_nonce($nonce) {
	if ($nonce == @$_SESSION['nonce']) {
		unset($_SESSION['nonce']);
		return true;
	}
	return false;
}
?>