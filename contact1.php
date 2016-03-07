<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
    
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
</head>

<body>
<center>
    <div id="wrapper">

	<img src="/img/sfnclogo.jpg"><br/>
    <?=$thankYou ?>

    <form method="post" action="contact.php">
        <label>Name:</label>
        <input name="sender">

        <label>Email address:</label>
        <input name="senderEmail">

        <label>Message:</label>
        <textarea rows="5" cols="20" name="message"></textarea>

        <input type="submit" name="submit">
    </form>

</body>

</html>
