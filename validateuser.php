<?php
include('topmenu.php');
?>

<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
	 
}
$connect = mysqli_connect("localhost", "root", "mFbFZNjXASrjcbO4", "shopping") or die("Please, check your server connection.");
$query = "SELECT email_address, password, complete_name FROM customers WHERE email_address like '" . $_POST['emailaddress'] . "' " .
	"AND password like (PASSWORD('" . $_POST['password'] . "'))";
$result = mysqli_query($connect, $query) or die(mysql_error()); 
if (mysqli_num_rows($result) == 1) {
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		extract($row);
		echo "Welcome " . $complete_name . " to our Shopping Mall <br>"; 
		$_SESSION['emailaddress'] = $_POST['emailaddress'];
		$_SESSION['password'] = $_POST['password'];
		echo "<SCRIPT LANGUAGE=\"JavaScript\">updateUser('$complete_name');</SCRIPT>";
		echo "<p> Click <a href=\"eindex.php\"> here </a> to Proceed to your Account. <p>";
		//sleep(5);
		//header("Location: 'localhost/SmashCars/eindex.php' ");
	}
}
else {
?>

    <!-- content //-->
    <div class="col-lg-12">
    	<div class="content-feed">
    		<!-- post //-->
    		<div class="well">
    			<div class="row">
    				<div class="col-lg-2">
		    			<p><img class="img-circle" src="page_assets/logo.png" width="70" height="70" class="avatar"></p>
		    		</div>
	    			<div class="col-lg-10">
	    				<h3><a href="#">Hi, <b> Customer </b> ,</a></h3>
	    				<p> 
						
							Invalid Email address and/or Password<br>
							Not registered? 
							<a href="validatesignup.php">Click here</a> to register.<br><br><br>
							Want to Try again<br>
							<a href="signin.php">Click here</a> to try login again.<br>						
						</p>
	    				<div class="feed-meta">
		    				<ul class="list-inline">
		    					<li> </li>
		    					<li><a href="#"><i class="fa fa-reply"></i>  </a></li>
		    					<li><a href="#"><i class="fa fa-heart"></i>  </a></li>
		    				</ul>
		    			</div>
	    			</div>
	    		</div>
    		</div>
 
    		<div class="center">
    			<p><button class="btn btn-primary">Load More Posts</button></p>
    		</div>
    	</div>
    </div>


	<?php
 }
?>

<section id="newsletter" class="text-center">
	<h4>Stay connected with us. Join the newsletter to receive fresh info. </h4>
	
	<form class="form-inline" method="POST">
		<div class="form-group">
			<input class="form-control" placeholder="You name">
		</div>
		
		<div class="form-group">
			<input class="form-control" placeholder="Your email">
		</div>
		
		<button type="submit" class="btn btn-primary">Join now!</button>
	</form>
</section>


		
<footer>
	<div class="container">
		<div class="col-sm-2">
			<img src="imgs/smashcarslogo.png" class="img-responsive">
		</div>
		
		<div class="col-sm-2">
			<h5>SmashCars Inc.</h5>
			<ul class="list-unstyled">
				<li><a href="#">Documentation</a></li>
				<li><a href="#">Packt publisher</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>
		
		<div class="col-sm-2">
			<h5>Social</h5>
			<ul class="list-unstyled">
				<li><a href="#">Facebook</a></li>
				<li><a href="#">Twitter</a></li>
				<li><a href="#">Blog</a></li>
			</ul>
		</div>
			
			<div class="col-sm-2">
				<h5>Support</h5>
				<ul class="list-unstyled">
					<li><a href="#">Contact</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Terms and conditions</a></li>
					<li><a href="#">Help desk</a></li>
				</ul>
			</div>
			
			<div class="col-sm-4">
				<address>
					<strong>Name, Inc.</strong>
					Address line 1<br>
					Address line 2<br>
					<abbr title="Phone">P:</abbr> (123) 456-7890
				</address>
				
			</div>
		</div>
	</footer>
<script src="js/jquery-1.11.3.js"></script>
<script src="js/bootstrap.js"></script>




		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script>
			(function() {
				[].slice.call( document.querySelectorAll( '.checkout' ) ).forEach( function( el ) {
					var openCtrl = el.querySelector( '.checkout__button' ),
						closeCtrls = el.querySelectorAll( '.checkout__cancel' );

					openCtrl.addEventListener( 'click', function(ev) {
						ev.preventDefault();
						classie.add( el, 'checkout--active' );
					} );

					[].slice.call( closeCtrls ).forEach( function( ctrl ) {
						ctrl.addEventListener( 'click', function() {
							classie.remove( el, 'checkout--active' );
						} );
					} );
				} );
			})();
		</script>	
	
    <!-- jQuery -->
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/new-age.min.js"></script>
	
</body>

</html>	
	
	
	
