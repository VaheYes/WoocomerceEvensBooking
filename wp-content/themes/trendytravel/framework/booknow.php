<?php
/* -------------------------------------------------------------
 * Use WordPress methods...
 * ------------------------------------------------------------- */
header( 'Content-type: text/css;' );

$url 	= dirname( __FILE__ );
$strpos = strpos( $url, 'wp-content' );
$base 	= substr( $url, 0, $strpos );

require_once( $base .'wp-load.php' );

if(!$_POST) exit;

    $to 	  = $_POST['hidbookadminemail'];
	$name	  = $_POST['txtfname'];
	$email    = $_POST['txtemail'];
	$adate 	  = $_POST['txtdate'];
	$hname	  = $_POST['hidhotelname'];
	$phone    = $_POST['txtphone'];
    $comment  = $_POST['txtmessage'];
        
	if(get_magic_quotes_gpc()) { $comment = stripslashes($comment); }

	 $e_subject = 'You\'ve been contacted by ' . $name . '.';

	 $msg  = "You have been contacted by $name with regards to booking request.\r\n\n";
	 $msg .= "Hotel Name: $hname\r\n\n";
	 $msg .= "Date of arrival: $adate\r\n\n";
	 $msg .= "Phone no: $phone\r\n\n";
	 $msg .= "$comment\r\n\n";
	 $msg .= "You can contact $name via email, $email.\r\n\n";
	 $msg .= "-------------------------------------------------------------------------------------------\r\n";
 	 $headers = array( 'Content-Type: text/html; charset=UTF-8' );
	 $headers[] = "From: $name <$email>";

	 if( wp_mail( $to, $e_subject, $msg, $headers ) ) {
		 echo "<div class='dt-sc-success-box'>".$_POST['hidbooksuccess']."</div>";
	 }
	 else {
		 echo "<div class='dt-sc-error-box'>".$_POST['hidbookerror']."</div>";
	 }
?>