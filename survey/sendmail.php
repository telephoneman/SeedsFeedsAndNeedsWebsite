<?php

$EmailFrom = "oesafespaces@gmail.com";
$EmailTo = "prgunited@yahoo.com";
$Name = Trim(stripslashes($_POST['Name']));
$Subject = "Evaluation from $Name";
$Work = Trim(stripslashes($_POST['Workrating']));
$Comfort = Trim(stripslashes($_POST['Comfortrating']));  
$Message = Trim(stripslashes($_POST['Message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Work Satisfaction Rating: ";
$Body .= $Work;
$Body .= "\n";
$Body .= "Comfort Level Rating: ";
$Body .= $Comfort;
$Body .= "\n";
$Body .= "Additional comments: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo,$Subject,$Body,"From: SFNC\n");

// redirect to success page 
if ($success){

mail($EmailTo,$Subject,$Body,"From: SFNC\n");
  print "<meta http-equiv=\"refresh\" content=\"0;URL=thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>
