<?php
/// dataaquisition--------------------------------------------------------------------------------------
$qual		=$_POST["qual"];     //from unitest.php
$fullname	=$_POST["fullname"];  //from unitest.php
$country	=$_POST["country"];  //from unitest.php
$email		=$_POST["email"];  //from unitest.php
$campus		=$_POST["campus"];  //from unitest.php
$telephone	=$_POST["telephone"];  //from unitest.php
$course		=$_POST["course"];  //from unitest.php
$bkground	=$_POST["bkground"];  //from unitest.php
$version	=$_POST["version"];  //from unitest.php
$error		="";
// validation--------------------------------------------------------------------------------------	
$fcount=0;
$f=strtoupper($fullname);
for ($i=0;$i<strlen($fullname);$i++)
{
	$c=substr($f,$i,1);
	if ($c>="A" && $c<="Z")$fcount++;
}
if ($fcount<2)
{
	$error.=" * Full Name must have at least 2 letters  * ";
}
$tcount=0;
for ($i=0;$i<strlen($telephone);$i++)
{
	$c=substr($telephone,$i,1);
	if ($c>="0" && $c<="9")$tcount++;
}
if ($tcount <11)
{
	$error.=" *Telephone number not valid - must have at least 11 digits * ";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
   $error.=" * This email address is   invalid. * ";
}

if (strlen($error)>0)
{
	$link="location:unitest.php";
	$link.="?qual=".$qual;
	$link.="&fullname=".$fullname;
	$link.="&country=".$country;
	$link.="&email=".$email;
	$link.="&campus=".$campus;
	$link.="&telephone=".$telephone;
	$link.="&email=".$email;
	$link.="&course=".$course;
	$link.="&bkground=".$bkground;
	$link.="&version=".$version;
	$link.="&error=".$error;
	header($link);
	exit;
}
else
{	
/// EMAIL RESULTS -------------------------------------------------------------------------------------------
    $app		="Qualification:".$qual."<br/>";
	$app		.="Name:".$fullname	."<br/>";	
	$app		.="Country:".$country."<br/>";
	$app		.="Email:".$email."<br/>";
	$app		.="Campus:".$campus."<br/>";
	$app		.="Phone:".$telephone."<br/>";
	$app		.="Course:".$course."<br/>";
	$headers 	= "MIME-Version: 1.0" . "\r\n";
	$headers 	.= "Content-type:text/html;charset=UTF-8" . "\r\n";
    mail("guylancaster@hotmail.com","Course application",$app,$headers);
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>University Application Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" href="css/main.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
if (strlen($bkground)>0)print '<style>body {background: url(img/'.$bkground.');}</style>';
?>
</head>
<body>
<?php require "nav.php";?> 
<div class="container">	
  <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
		<img src="img/mmu.png" alt="MMU Logo"/>
	</div>
    <div class="col-sm-8 col-md-8 col-lg-8">
		<h1>Manchester Metropolitan University</h1>
		<h2>Application Form - <?php print $course;?></h2>
	</div>
  </div>		
  </div>	
  <div class="row formline">
    <div class="col-sm-1 col-md-1 col-lg-1">
    	&nbsp;
	</div>
    <div class="col-sm-11 col-md-11 col-lg-11">
		<?php print ($qual=="none"?"Your application can not be progressed":"Thankyou for your application.");?>
	</div>
  </div>	
</div>	
</body>
</html>