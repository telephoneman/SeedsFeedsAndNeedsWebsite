<?php

if($_POST["submit"]) {
    $recipient="jesse.macdonald.sfo@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	
		
	<style>
	
		body	{ width:960px; padding:100px 0; margin:0 auto; font-family:Calibri, sans-serif; }
		#nav{
			border:1px solid #000;
			border-width:1px 0;
			list-style:none;
			margin:0;
			padding:0;
			text-align:center;
		}
		#nav li{
			display:inline;
		}
		#nav a{
			display:inline-block;
			padding:10px;
		}
		a{
			color:#c00;
			text-decoration:none;
			font-weight:bold;
		}
		a:hover{
			text-decoration:underline;
		}
		
	</style>
	
</head>

<body>

	
	<ul id="nav">
	
		<li><a href="http://seedsfeedsandneeds.com/index1.html">Home</a></li>
		<li><a href="http://seedsfeedsandneeds.com/events.html">Events</a></li>
		<li><a href="http://seedsfeedsandneeds.com/where.html">Where We Meet</a></li>
		<li><a href="http://www.seedsfeedsandneeds.com/contact1.html">Contact</a></li>
		<li><a href="http://www.seedsfeedsandneeds.com/volunteer.html">Volunteer</a></li>
	</ul>
	
	
	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-1856861-4");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>


<style>


a:link {
	color: #bf262b;
	font-weight:bold;
	text-decoration: none;
}


a:visited {
	color: #bf262b;
	font-weight:bold;
	text-decoration: none;
}


a:hover {
	color: #bf262b;
	font-weight:bold;
	text-decoration: none;
}


a:active {
	color: #bf262b;
	font-weight:bold;
	text-decoration: none;
}


#wrapper {
	font-family: Verdana;
	font-size: 17px;
	line-height:160%;
	border-style:solid;
	border-width:1px;
	width: 780px;
	position:relative;
	top:50px;
	padding: 0 50px 25px 50px;
	background-color: #fff;
}

body {
	background-color: #f5f5f5;
	}
</style>


<center>

	<div id="wrapper" align="left">
	<a href="https://www.facebook.com/groups/107127302808643/"><img src="http://seedsfeedsandneeds.org/img/sfnclogo.jpg" title="alt text goes here" align="left"/></a>

	<p align="center"><i>Say something about yourself!/i>
	 <?=$thankYou ?>

    <form method="post" action="volunteer.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>
<center>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
	<input type="hidden" name="cmd" value="_s-xclick">
	<input type="hidden" name="hosted_button_id" value="B4NG9VUR75VWA">
	<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

	<i>2016 SFNC</i>
</center>
	<br>
	<br>
	<br>
	<br>
	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fseedsfeedsandneedscoop&amp;width=700&amp;height=590&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=1398236513798488" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:700px; height:590px; margin: 0 auto; display: block" allowTransparency="true"></iframe>
	<br>


    </div>
</center>

</body>
</html>


