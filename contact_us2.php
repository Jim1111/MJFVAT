<?php include("header.php"); ?>

<h3 align="center"><b>Thank you</b></h3>

<hr>

 <?php

  	 $ip = $_POST['ip'];
  	 $httpref = $_POST['httpref'];
  	 $httpagent = $_POST['httpagent'];
  	 $visitor = $_POST['visitor'];
  	 $visitormail = $_POST['visitormail'];
  	 $notes = $_POST['notes'];
  	 $D1 = $_POST['D1'];

  	 if (eregi('http:', $notes)) {
  	 die ("Do NOT try that! ! ");
  	 }
  	 if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
  	 {
  	 echo "<p>Use Back - Enter valid e-mail</p>\n";
  	 $badinput = "<p>Feedback was NOT submitted</p>\n";
  	 echo $badinput;
  	 die ("Go back! ! ");
  	 }

  	 if(empty($visitor) || empty($visitormail) || empty($notes )) {
  	 echo "<p>Use Back - fill in all fields</p>\n";
  	 die ("Use back! ! ");
  	 }

  	 $todayis = date("l, F j, Y, g:i a") ;

  	 $notes = stripcslashes($notes);

           // Start //

$message = "$todayis\n

Name: $visitor\n

Message: $notes\n

How did they find us?: $D1\n

  	 ";

           // Fin  //

  	 $from = "From: $visitormail\r\n";


  	 mail("mjfvat@btinternet.com", "A Question from the MJFVAT Website", $message, $from);

  	 ?>

  	 <p align="center">Thank You, <?php echo $visitor ?>, we will get back in touch shortly.</p>


<hr>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>

<?php include("footer.php"); ?>