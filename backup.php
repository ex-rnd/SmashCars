 <nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand"><span>Soc</span>Strap</a>
    </div>

    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="nav navbar-nav">
        <li><a href="activity-feed.html"><i class="fa fa-home"></i></a></li>
        <li><a href="notifications.html"><i class="fa fa-bell"></i></a></li>
        <li><a href="messages.html"><i class="fa fa-envelope"></i></a></li>
        <li><a href="friends.html"><i class="fa fa-user"></i></a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Username <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">View Profile</a></li>
			
						<?php
						if (session_status() != PHP_SESSION_NONE) {
								session_start();
						}
						if (isset($_SESSION['emailaddress']))
						{
							echo "<li>";
							echo "<a class=\"page-scroll\" " .  $_SESSION['complete_name'] ;
							echo "</li>";
							echo "<li>";
							echo "<a class=\"page-scroll\" href=\"logout.php\">Log Out</a>";
							echo "</li>";
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
			
            <li><a href="#">Settings</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>




		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/checkout-sidebar.css" />