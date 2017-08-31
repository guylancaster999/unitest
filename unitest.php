<?php
// DATA AQUISITION---------------------------------------------------------------------------------------------
$bkground	=$_GET["bkground"];   // url of background jog in /img directory, from thanks.php or initial link
$course		=$_GET["course"];	   // from thanks.php or initial link
$version	=$_GET["version"];	  //reposition if version==form,  from thanks.php or initial link
$error		=$_GET["error"];      // error from thanks.php
$qual		=$_GET["qual"];       // from thanks.php
$fullname	=$_GET["fullname"];  // from thanks.php
$country	=$_GET["country"];    // from thanks.php
$email		=$_GET["email"];        // from thanks.php
$campus		=$_GET["campus"];        // from thanks.php
$telephone	=$_GET["telephone"];   // from thanks.php
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>MMU University Course Application Form</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="University, Application,MMU, Manchester, Msc, Marketing">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/main.css"/>
<?php
// background image-----------------------------------------------------------------------------------------
if (strlen($bkground)>0)
{
	print '<style>		
		body 
		{
			background: url(img/'.$bkground.');
		}
</style>';
}
?>

<script>
$(document).ready(function(){
    $("#country").mouseleave(function(){
		var sel,telephone;
		sel			=$("#country  option:selected").text();

		switch (sel)
		{
			case "UK": 			$("#telephone").val("+44"); break;
			case "Afghanistan": $("#telephone").val("+91");break;
			default:
		}
  
	switch (sel)
		{
			case "UK":  	 
 			case "Austria":
			case "Belgium":
			case "Italy":
			case "Belgium":
			case "Latvia":
			case "Bulgaria":
			case "Lithuania":
			case "Croatia":
			case "Luxembourg":
			case "Cyprus":
			case "Malta":
			case "Czech Republic":
			case "Netherlands":
			case "Denmark":
			case "Poland":
			case "Estonia":
			case "Portugal":
			case "Finland":
			case "Romania":
			case "France":
			case "Slovakia":
			case "Germany":
			case "Slovenia":
			case "Greece":
			case "Spain":
			case "Hungary":
			case "Sweden": 
			case "Ireland":
			 	$("#campusblock").show();
				break;

 			default:    
				$("#campus").val("Online");
				$("#campusblock").hide();
		}   
    });
});
</script>
</head>
<body>
<?php 
if (strlen($course)==0)$course="Msc in Marketing";
  require "nav.php";?> 
 <div class="container">	
  <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
		<img src="img/mmu.png" alt="logo"/>
	</div>
    <div class="col-sm-8 col-md-8 col-lg-8">
		<h1>Manchester Metropolitan University</h1>
		<h2>Application Form - <?php print $course;?></h2>
	</div>
   </div>
  <?php 
  function sel($q,$thisone)
  {
	  $ret= ' value="'.$q.'" ';
	  $ret.=($q==$thisone?" selected ":"");
	  print $ret;
  };
	if (strlen($country)==0)$country="UK";
	if (strlen($qual)==0)	$qual="none";
	if (strlen($error)>0)
	{
		print '<div class="row formline">
			<div class="col-sm-1 col-md-1 col-lg-1">
				&nbsp;
			</div>
			<div class="col-sm-10 col-md-10 col-lg-10  " style="color:red;font-weight:bold;">'.$error.'</div>
		</div>';
	}
	if ($version=="form")
	{
		print '<div style="  position: relative;   left: 100px;  top: 150px;">';		
	}
?>
<form action="thanks.php"  method="POST">
  <input type="hidden" id="course" name="course" value="<?php print $course;?>"  >
  <input type="hidden" id="bkground" name="bkground" value="<?php print $bkground;?>"  >
  <input type="hidden" id="version" name="version" value="<?php print $version;?>"  >
  <div class="row formline">
    <div class="col-sm-1 col-md-1 col-lg-1">
    	&nbsp;
	</div>
    <div class="col-sm-2 col-md-2 col-lg-2">
		Full Name 
	</div>
    <div class="col-sm-6 col-md-6 col-lg-6">
		<input type="text" id="fullname" name="fullname" value="<?php print $fullname;?>" required/>
	</div>
  </div>	
  
  <div class="row formline">
		<div class="col-sm-1 col-md-1 col-lg-1">
    	&nbsp;
	</div><div class="col-sm-2 col-md-2 col-lg-2">
			Email Address 
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<input type="email" id="email" name="email"  value="<?php  print $email;?>" required/>
		</div>
	</div>
  <div class="row formline">
	<div class="col-sm-1 col-md-1 col-lg-1">
    	&nbsp;
	</div>	
	<div class="col-sm-2 col-md-2 col-lg-2">
			Country of residence 
	</div>
	<div class="col-sm-6 col-md-6 col-lg-6">
			<select id="country" name="country">
				<option <?php sel("UK",$country);?> >UK</option>
				<option <?php sel("AF",$country);?> >Afghanistan</option>
					<option <?php sel("AX",$country);?> >ÅLand Islands</option>
					<option <?php sel("AL",$country);?> >Albania</option>
					<option <?php sel("DZ",$country);?> >Algeria</option>
					<option <?php sel("AS",$country);?> >American Samoa</option>
					<option <?php sel("AD",$country);?> >Andorra</option>
					<option <?php sel("AO",$country);?> >Angola</option>
					<option <?php sel("AI",$country);?> >Anguilla</option>
					<option <?php sel("AQ",$country);?> >Antarctica</option>
					<option <?php sel("AG",$country);?> >Antigua &amp; Barbuda</option>
					<option <?php sel("AR",$country);?> >Argentina</option>
					<option <?php sel("AM",$country);?> >Armenia</option>
					<option <?php sel("AW",$country);?> >Aruba</option>
					<option <?php sel("AU",$country);?> >Australia</option>
					<option <?php sel("AT",$country);?> >Austria</option>
					<option <?php sel("AZ",$country);?> >Azerbaijan</option>
					<option <?php sel("BS",$country);?> >Bahamas</option>
					<option <?php sel("BH",$country);?> >Bahrain</option>
					<option <?php sel("BD",$country);?> >Bangladesh</option>
					<option <?php sel("BB",$country);?> >Barbados</option>
					<option <?php sel("BY",$country);?> >Belarus</option>
					<option <?php sel("BE",$country);?> >Belgium</option>
					<option <?php sel("BZ",$country);?> >Belize</option>
					<option <?php sel("BJ",$country);?> >Benin</option>
					<option <?php sel("BM",$country);?> >Bermuda</option>
					<option <?php sel("BT",$country);?> >Bhutan</option>
					<option <?php sel("BO",$country);?> >Bolivia</option>
					<option <?php sel("BA",$country);?> >Bosnia &amp; Herzegovina</option>
					<option <?php sel("BW",$country);?> >Botswana</option>
					<option <?php sel("BV",$country);?> >Bouvet Island</option>
					<option <?php sel("BR",$country);?> >Brazil</option>
					<option <?php sel("IO",$country);?> >British Indian Ocean Territory</option>
					<option <?php sel("BN",$country);?> >Brunei Darussalam</option>
					<option <?php sel("BG",$country);?> >Bulgaria</option>
					<option <?php sel("BF",$country);?> >Burkina Faso</option>
					<option <?php sel("BI",$country);?> >Burundi</option>
					<option <?php sel("KH",$country);?> >Cambodia</option>
					<option <?php sel("CM",$country);?> >Cameroon</option>
					<option <?php sel("CA",$country);?> >Canada</option>
					<option <?php sel("CV",$country);?> >Cape Verde</option>
					<option <?php sel("KY",$country);?> >Cayman Islands</option>
					<option <?php sel("CF",$country);?> >Central African Republic</option>
					<option <?php sel("TD",$country);?> >Chad</option>
					<option <?php sel("CL",$country);?> >Chile</option>
					<option <?php sel("CN",$country);?> >China</option>
					<option <?php sel("CX",$country);?> >Christmas Island</option>
					<option <?php sel("CC",$country);?> >Cocos (Keeling) Islands</option>
					<option <?php sel("CO",$country);?> >Colombia</option>
					<option <?php sel("KM",$country);?> >Comoros</option>
					<option <?php sel("CG",$country);?> >Congo</option>
					<option <?php sel("CD",$country);?> >Congo, Democratic Republic of the</option>
					<option <?php sel("CK",$country);?> >Cook Islands</option>
					<option <?php sel("CR",$country);?> >Costa Rica</option>
					<option <?php sel("CI",$country);?> >Cote DIvoire</option>
					<option <?php sel("HR",$country);?> >Croatia</option>
					<option <?php sel("CU",$country);?> >Cuba</option>
					<option <?php sel("CY",$country);?> >Cyprus</option>
					<option <?php sel("CZ",$country);?> >Czech Republic</option>
					<option <?php sel("DK",$country);?> >Denmark</option>
					<option <?php sel("DJ",$country);?> >Djibouti</option>
					<option <?php sel("DM",$country);?> >Dominica</option>
					<option <?php sel("DO",$country);?> >Dominican Republic</option>
					<option <?php sel("EC",$country);?> >Ecuador</option>
					<option <?php sel("EG",$country);?> >Egypt</option>
					<option <?php sel("SV",$country);?> >El Salvador</option>
					<option <?php sel("GQ",$country);?> >Equatorial Guinea</option>
					<option <?php sel("ER",$country); ?> >Eritrea</option>
					<option <?php sel("EE",$country); ?> >Estonia</option>
					<option <?php sel("ET",$country); ?> >Ethiopia</option>
					<option <?php sel("FK",$country); ?> >Falkland Islands</option>
					<option <?php sel("FO",$country); ?> >Faroe Islands</option>
					<option <?php sel("FJ",$country); ?> >Fiji</option>
					<option <?php sel("FI",$country); ?> >Finland</option>
					<option <?php sel("FR",$country); ?> >France</option>
					<option <?php sel("GF",$country); ?> >French Guiana</option>
					<option <?php sel("PF",$country); ?> >French Polynesia</option>
					<option <?php sel("TF",$country); ?> >French Southern Territories</option>
					<option <?php sel("GA",$country); ?> >Gabon</option>
					<option <?php sel("GM",$country); ?> >Gambia</option>
					<option <?php sel("GE",$country); ?> >Georgia</option>
					<option <?php sel("DE",$country); ?> >Germany</option>
					<option <?php sel("GH",$country); ?> >Ghana</option>
					<option <?php sel("GI",$country); ?> >Gibraltar</option>
					<option <?php sel("GR",$country); ?> >Greece</option>
					<option <?php sel("GL",$country); ?> >Greenland</option>
					<option <?php sel("GD",$country); ?> >Grenada</option>
					<option <?php sel("GP",$country); ?> >Guadeloupe</option>
					<option <?php sel("GU",$country); ?> >Guam</option>
					<option <?php sel("GT",$country); ?> >Guatemala</option>
					<option <?php sel("GG",$country); ?> >Guernsey</option>
					<option <?php sel("GN",$country); ?> >Guinea</option>
					<option <?php sel("GW",$country); ?> >Guinea-Bissau</option>
					<option <?php sel("GY",$country); ?> >Guyana</option>
					<option <?php sel("HT",$country); ?> >Haiti</option>
					<option <?php sel("HM",$country); ?> >Heard Island &amp; Mcdonald Islands</option>
					<option <?php sel("VA",$country); ?> >Vatican City  </option>
					<option <?php sel("HN",$country); ?> >Honduras</option>
					<option <?php sel("HK",$country); ?> >Hong Kong</option>
					<option <?php sel("HU",$country); ?> >Hungary</option>
					<option <?php sel("IS",$country); ?> >Iceland</option>
					<option <?php sel("IN",$country); ?> >India</option>
					<option <?php sel("ID",$country); ?> >Indonesia</option>
					<option <?php sel("IR",$country); ?> >Iran, Islamic Republic Of</option>
					<option <?php sel("IQ",$country); ?> >Iraq</option>
					<option <?php sel("IE",$country); ?> >Ireland</option>
					<option <?php sel("IM",$country); ?> >Isle Of Man</option>
					<option <?php sel("IL",$country); ?> >Israel</option>
					<option <?php sel("IT",$country); ?> >Italy</option>
					<option <?php sel("JM",$country); ?> >Jamaica</option>
					<option <?php sel("JP",$country); ?> >Japan</option>
					<option <?php sel("JE",$country); ?> >Jersey</option>
					<option <?php sel("JO",$country); ?> >Jordan</option>
					<option <?php sel("KZ",$country); ?> >Kazakhstan</optiono
					<option <?php sel("KE",$country); ?> >Kenya</option>
					<option <?php sel("KI",$country); ?> >Kiribati</option>
					<option <?php sel("KP",$country); ?> >Korea, Democratic Peoples Republic of</option>
					<option <?php sel("KR",$country); ?> >Korea, Republic Of</option>
					<option <?php sel("KW",$country); ?> >Kuwait</option>
					<option <?php sel("KG",$country); ?> >Kyrgyzstan</option>
					<option <?php sel("LA",$country); ?> >Laos</option>
					<option <?php sel("LV",$country); ?> >Latvia</option>
					<option <?php sel("LB",$country); ?> >Lebanon</option>
					<option <?php sel("LS",$country); ?> >Lesotho</option>
					<option <?php sel("LR",$country); ?> >Liberia</option>
					<option <?php sel("LY",$country); ?> >Libya</option>
					<option <?php sel("LI",$country); ?> >Liechtenstein</option>
					<option <?php sel("LT",$country); ?> >Lithuania</option>
					<option <?php sel("LU",$country); ?> >Luxembourg</option>
					<option <?php sel("MO",$country); ?> >Macao</option>
					<option <?php sel("MK",$country); ?> >Macedonia</option>
					<option <?php sel("MG",$country); ?> >Madagascar</option>
					<option <?php sel("MW",$country); ?> >Malawi</option>
					<option <?php sel("MY",$country); ?> >Malaysia</option>
					<option <?php sel("MV",$country); ?> >Maldives</option>
					<option <?php sel("ML",$country); ?> >Mali</option>
					<option <?php sel("MT",$country); ?> >Malta</option>
					<option <?php sel("MH",$country); ?> >Marshall Islands</option>
					<option <?php sel("MQ",$country); ?> >Martinique</option>
					<option <?php sel("MR",$country); ?> >Mauritania</option>
					<option <?php sel("MU",$country); ?> >Mauritius</option>
					<option <?php sel("YT",$country); ?> >Mayotte</option>
					<option <?php sel("MX",$country); ?> >Mexico</option>
					<option <?php sel("FM",$country); ?> >Micronesia</option>
					<option <?php sel("MD",$country); ?> >Moldova, Republic Of</option>
					<option <?php sel("MC",$country); ?> >Monaco</option>
					<option <?php sel("MN",$country); ?> >Mongolia</option>
					<option <?php sel("MS",$country); ?> >Montserrat</option>
					<option <?php sel("MA",$country); ?> >Morocco</option>
					<option <?php sel("MZ",$country); ?> >Mozambique</option>
					<option <?php sel("MM",$country); ?> >Myanmar</option>
					<option <?php sel("NA",$country); ?> >Namibia</option>
					<option <?php sel("NR",$country); ?> >Nauru</option>
					<option <?php sel("NP",$country); ?> >Nepal</option>
					<option <?php sel("NL",$country); ?> >Netherlands</option>
					<option <?php sel("AN",$country); ?> >Netherlands Antilles</option>
					<option <?php sel("NC",$country); ?> >New Caledonia</option>
					<option <?php sel("NZ",$country); ?> >New Zealand</option>
					<option <?php sel("NI",$country); ?> >Nicaragua</option>
					<option <?php sel("NE",$country); ?> >Niger</option>
					<option <?php sel("NG",$country); ?> >Nigeria</option>
					<option <?php sel("NU",$country); ?> >Niue</option>
					<option <?php sel("NF",$country); ?> >Norfolk Island</option>
					<option <?php sel("MP",$country); ?> >Northern Mariana Islands</option>
					<option <?php sel("NO",$country); ?> >Norway</option>
					<option <?php sel("OM",$country); ?> >Oman</option>
					<option <?php sel("PK",$country); ?> >Pakistan</option>
					<option <?php sel("PW",$country); ?> >Palau</option>
					<option <?php sel("PS",$country); ?> >Palestinian Territory, Occupied</option>
					<option <?php sel("PA",$country); ?> >Panama</option>
					<option <?php sel("PG",$country); ?> >Papua New Guinea</option>
					<option <?php sel("PY",$country); ?> >Paraguay</option>
					<option <?php sel("PE",$country); ?> >Peru</option>
					<option <?php sel("PH",$country); ?> >Philippines</option>
					<option <?php sel("PN",$country); ?> >Pitcairn</option>
					<option <?php sel("PL",$country); ?> >Poland</option>
					<option <?php sel("PT",$country); ?> >Portugal</option>
					<option <?php sel("PR",$country); ?> >Puerto Rico</option>
					<option <?php sel("QA",$country); ?> >Qatar</option>
					<option <?php sel("RE",$country); ?> >Reunion</option>
					<option <?php sel("RO",$country); ?> >Romania</option>
					<option <?php sel("RU",$country); ?> >Russian Federation</option>
					<option <?php sel("RW",$country); ?> >Rwanda</option>
					<option <?php sel("SH",$country); ?> >Saint Helena</option>
					<option <?php sel("KN",$country); ?> >Saint Kitts &amp; Nevis</option>
					<option <?php sel("LC",$country); ?> >Saint Lucia</option>
					<option <?php sel("PM",$country); ?> >Saint Pierre &amp; Miquelon</option>
					<option <?php sel("VC",$country); ?> >Saint Vincent &amp; the Grenadines</option>
					<option <?php sel("WS",$country); ?> >Samoa</option>
					<option <?php sel("SM",$country); ?> >San Marino</option>
					<option <?php sel("ST",$country); ?> >Sao Tome &amp; Principe</option>
					<option <?php sel("SA",$country); ?> >Saudi Arabia</option>
					<option <?php sel("SN",$country); ?> >Senegal</option>
					<option <?php sel("CS",$country); ?> >Serbia &amp; Montenegro</option>
					<option <?php sel("SC",$country); ?> >Seychelles</option>
					<option <?php sel("SL",$country); ?> >Sierra Leone</option>
					<option <?php sel("SG",$country); ?> >Singapore</option>
					<option <?php sel("SK",$country); ?> >Slovakia</option>
					<option <?php sel("SI",$country); ?> >Slovenia</option>
					<option <?php sel("SB",$country); ?> >Solomon Islands</option>
					<option <?php sel("SO",$country); ?> >Somalia</option>
					<option <?php sel("ZA",$country); ?> >South Africa</option>
					<option <?php sel("GS",$country); ?> >South Georgia &amp; the South Sandwich Islands</option>
					<option <?php sel("ES",$country); ?> >Spain</option>
					<option <?php sel("LK",$country); ?> >Sri Lanka</option>
					<option <?php sel("SD",$country); ?> >Sudan</option>
					<option <?php sel("SR",$country); ?> >Suriname</option>
					<option <?php sel("SJ",$country); ?> >Svalbard &amp; Jan Mayen</option>
					<option <?php sel("SZ",$country); ?> >Swaziland</option>
					<option <?php sel("SE",$country); ?> >Sweden</option>
					<option <?php sel("CH",$country); ?> >Switzerland</option>
					<option <?php sel("SY",$country); ?> >Syrian Arab Republic</option>
					<option <?php sel("TW",$country); ?> >Taiwan, Province Of China</option>
					<option <?php sel("TJ",$country); ?> >Tajikistan</option>
					<option <?php sel("TZ",$country); ?> >Tanzania, United Republic Of</option>
					<option <?php sel("TH",$country); ?> >Thailand</option>
					<option <?php sel("TL",$country); ?> >Timor-Leste</option>
					<option <?php sel("TG",$country); ?> >Togo</option>
					<option <?php sel("TK",$country); ?> >Tokelau</option>
					<option <?php sel("TO",$country); ?> >Tonga</option>
					<option <?php sel("TT",$country); ?> >Trinidad &amp; Tobago</option>
					<option <?php sel("TN",$country); ?> >Tunisia</option>
					<option <?php sel("TR",$country); ?> >Turkey</option>
					<option <?php sel("TM",$country); ?> >Turkmenistan</option>
					<option <?php sel("TC",$country); ?> >Turks &amp; Caicos Islands</option>
					<option <?php sel("TV",$country); ?> >Tuvalu</option>
					<option <?php sel("UG",$country); ?> >Uganda</option>
					<option <?php sel("UA",$country); ?> >Ukraine</option>
					<option <?php sel("AE",$country); ?> >United Arab Emirates</option>
					<option <?php sel("US",$country); ?> >United States</option>
					<option <?php sel("UM",$country); ?> >United States Minor Outlying Islands</option>
					<option <?php sel("UY",$country); ?> >Uruguay</option>
					<option <?php sel("UZ",$country); ?> >Uzbekistan</option>
					<option <?php sel("VU",$country); ?> >Vanuatu</option>
					<option <?php sel("VE",$country); ?> >Venezuela</option>
					<option <?php sel("VN",$country); ?> >Viet Nam</option>
					<option <?php sel("VG",$country); ?> >Virgin Islands, British</option>
					<option <?php sel("VI",$country); ?> >Virgin Islands, U.S.</option>
					<option <?php sel("WF",$country); ?> >Wallis And Futuna</option>
					<option <?php sel("EH",$country); ?> >Western Sahara</option>
					<option <?php sel("YE",$country); ?> >Yemen</option>
					<option <?php sel("ZM",$country); ?> >Zambia</option>
					<option <?php sel("ZW",$country); ?> >Zimbabwe</option>
			</select>
		</div>
	</div>
	<div class="row formline">
		<div class="col-sm-1 col-md-1 col-lg-1">
				&nbsp;
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			Telephone 
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<input type="text" id="telephone" name="telephone"  value="<?php print $telephone;?>" required/>
		</div>
    </div>
	
    <div class="row formline">
		<div class="col-sm-1 col-md-1 col-lg-1">
			&nbsp;
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
			Your highest qualification  
		</div>
		<div class="col-sm-6 col-md-6 col-lg-6">
			<select id="qual" name="qual" required>
			   <option <?php sel("bac"   ,$qual);  ?> >Bachelors Degree</option>
			   <option <?php sel("masters",$qual);?> >Masters Degree</option>
				<option <?php sel("none"  ,$qual);?> >None of the above</option>
			</select>
		</div>
	</div>
	
	<div class="row formline" id="campusblock" name="campusblock">

		<div class="col-sm-1 col-md-1 col-lg-1">
			&nbsp;
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2">
				Course location
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<select id="campus" name="campus">
						<option <?php sel("north",$campus);?> >North Campus</option>
						<option <?php sel("south",$campus);?> >South Campus</option>
						<option <?php sel("east",$campus);?> >East Campus</option>
						<option <?php sel("west",$campus);?> >West Campus</option>
						<option <?php sel("Online",$campus);?> >Online</option>
				</select>
			</div>
			<div class="row  formline">
				<div class="col-sm-1 col-md-1 col-lg-1">
						&nbsp;
					</div>
			</div>

	</div>
	<div class="row  formline">
			<div class="col-sm-1 col-md-1 col-lg-1">
					&nbsp;
				</div>
			<div class="col-sm-4 col-md-4 col-lg-4">
				&nbsp;
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<input type="submit"  value="Apply for course" />
			</div>
		</div>
	</div>	
</form>
<?php
	if ($version=="form")
	{
		print '</div>';		
	}
?>
 </body>
</html>