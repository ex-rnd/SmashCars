<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="jamesmusyimi" />
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
	<title>SmashCars | Inc</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/base.css">
	
	<link rel="shortcut icon" href="../favicon.ico">
	<link rel="stylesheet" type="text/css" href="css/theme.css">	
	<link rel="stylesheet" type="text/css" href="css/checkout-sidebar.css" />	
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> 
        <![endif]-->

 
<!-- <link rel="stylesheet" href="css/style.css"> -->
<script language="JavaScript" type="text/JavaScript">
	function makeRequestObject(){
		var xmlhttp=false; 
		try {
			xmlhttp = new ActiveXObject('Msxml2.XMLHTTP');
		} catch (e) {
			try {
				xmlhttp = new
				ActiveXObject('Microsoft.XMLHTTP'); 
			} catch (E) {
				xmlhttp = false;
			}
		}
		if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
			xmlhttp = new XMLHttpRequest(); 
		}
		return xmlhttp;
	}
	function updateCart(){
		var xmlhttp=makeRequestObject();
		xmlhttp.open('GET',  'countcart.php', true); 
		xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			var ajaxCart = document.getElementById("cartcountinfo");
			ajaxCart.innerHTML = xmlhttp.responseText;
		}
	}
	xmlhttp.send(null);
}
</script>

<script language="JavaScript" type="text/JavaScript">
function updateUser(username){
	var ajaxUser = document.getElementById("userinfo");
	ajaxUser.innerHTML = "Welcome " + username + "&nbsp;&nbsp;&nbsp;<a href=\"logout.php\">Log Out</a>";
}
</script>

</head>
<body class="color-2" >
	<!--<table  width="100%" cellspacing="0" cellpadding="2">
        		<col style="width:30%">
        		<col style="width:40%">
        		<col style="width:20%">
		<tr><td style="background-color:cyan;color:Blue;"></td><td style="background-color:cyan;color:Blue;"></td><td style="background-color:cyan;color:Blue;">
	-->
	
	
<header>
<link rel="stylesheet" href="css/base.css">
	<div class="container">
	
	<!-- row 1 -->
<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header">

		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
        <a href="index.html" class="navbar-brand"><span>Smash</span>Cars</a>		
		</div>

		<div class="btn-group pull-right" id="navbar1">

			<button type="button" class="btn btn-primary dropdown-toggle"
			data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Customer Area
			<span class="caret"></span>
			</button>
			
			<ul class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
			
						<?php
						if (session_status() == PHP_SESSION_NONE) {
								session_start();
						}
						if (isset($_SESSION['emailaddress']))
						{
							echo "<li>";
							echo "<a class=\"page-scroll\" " .  $_SESSION['emailaddress'] ;
							echo "</li>";
							echo "<li>";							
							echo "<a class=\"page-scroll\" href=\"signin.php\">Settings</a>";
							echo "</li>";							
							echo "<li>";							
							echo "<a class=\"page-scroll\" href=\"signup.php\">Help</a>";
							echo "</li>";
							echo "<li>";
							echo "<a role=\"separator\" class=\"divider\" href=\"logout.php\"></a>";
							echo "</li>";					 					
							echo "<li>";
							echo "<a class=\"page-scroll\" href=\"logout.php\">Log Out</a>";
							echo "</li>";
							echo "</ul>";
						}
						else
						{
							echo "<li>";							
							echo "<a class=\"page-scroll\" href=\"signin.php\">Login</a>";
							echo "</li>";							
							echo "<li>";							
							echo "<a class=\"page-scroll\" href=\"signup.php\">Signup</a>";
							echo "</li>";

						}
						?>			

		</div>
		<div id="nav-menu" class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
				<li><a href="#about">About</a></li>        
				<li><a href="#features">Features</a></li>
				<li><a href="#pricing">Pricing</a></li>
				<li><a href="contact.html">Contact</a></li>
				</ul>
			    <form method="post" action="searchitems.php" class="navbar-form navbar-right" role="search">
				<div class="form-group">
				  <input type="text" size="50" name="tosearch" class="form-control" placeholder="Search">
			      <input type="submit" name="submit" value="Search" class="btn btn-success">				  
			    </div>
                </form>
		</div>
		
		
		
	</nav>

</header>	
	
		

<!--		<tr><td style="font-size: 35px;color:blue;background-color:cyan;">
    		<b>SmashCars Incorporated</b></font></td>
		<td bgcolor="cyan">
		<form  method="post" action="searchitems.php">  
			<input  size="50" type="text" name="tosearch">  
			<input  type="submit" name="submit" value="Search">  
		</form></td>
		<td bgcolor="cyan" ><a href="cart.php"><img style="max-width:40px;max-height:40px;width:auto;height:auto;" src="images/cart.png"></img><span id="cartcountinfo"></span></a>
		</td></tr>
	</table>
   	<div class="container">
    		<nav>
      		<ul class="nav">
        			<li><a href="index.php">SmashCars Incorporated</a></li>
        			<li class="dropdown">
          				<a href="index.php">Cars On Sale</a>
          				<ul>
            					<li><a href="itemlist.php?category=Ford">Ford</a></li>
            					<li><a href="itemlist.php?category=Mazda">Mazda</a></li>
            					<li><a href="itemlist.php?category=Scion">Scion</a></li>
            					<li><a href="itemlist.php?category=Subaru">Subaru</a></li>
            					<li><a href="itemlist.php?category=Volkswagen">Volkswagen</a></li>								
            					<li><a href="itemlist.php?category=BMW">BMW</a></li>								
            					<li><a href="itemlist.php?category=Nissan">Nissan</a></li>								
            					<li><a href="itemlist.php?category=Porsche">Porsche</a></li>								
            					<li><a href="itemlist.php?category=Mercedes-Benz">Mercedes-Benz</a></li>								
            					<li><a href="itemlist.php?category=Honda">Honda</a></li>								
            					<li><a href="itemlist.php?category=Audi">Audi</a></li>								
          				</ul>
        			</li>
       
      		</ul>
    		</nav>
     	</div>
<p> -->


