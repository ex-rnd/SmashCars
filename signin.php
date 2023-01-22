<?php
include('topmenu.php');
?>
<section>
<div class="well">
<h4 class="text-center"> <b style="color:green;">Smash</b><b style="color:gray;">Cars</b> Inc Sign In </h4>
</div>
<div class="panel panel-success">
<form class="form-horizontal" action="validateuser.php" method="post" role="form">
<div class="form-group">
<label for="emailaddress" class="col-sm-2 control-label">Email Address</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="emailaddress" id="emailaddress" placeholder="Enter Email Address">
</div>
</div>

<div class="form-group">
<label for="password" class="col-sm-2 control-label">Password</label>
<div class="col-sm-6">
<input type="password" class="form-control"  name="password" id="password" placeholder="Enter Password">
<br> 
<input type="submit" class="button btn-success"  name="submit" value="Log in">
 
</div>
  	</form>
</div>
</div>
</section>

	<!-- footer //-->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="footer">
				&copy; SmashCars Inc.
			</div>
		</div>
	</div>
</div>




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
