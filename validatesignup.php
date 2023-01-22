<?php
include('topmenu.php');
?>


<section>
<div class="well">
<h4 class="text-center"> <b style="color:green;">Smash</b><b style="color:gray;">Cars</b> Inc Sign Up </h4>
</div>
<div class="panel panel-success">
<form class="form-horizontal" action="addcustomer.php" method="post" role="form" onsubmit="return validate(this);">
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
</div>
</div>

<div class="form-group">
<label for="password" class="col-sm-2 control-label">Re EnterPassword</label>
<div class="col-sm-6">
<input type="password" class="form-control"  name="repassword" id="repassword" placeholder="Enter Password Again">
</div>  	
</div>

<div class="form-group">
<label for="complete_name" class="col-sm-2 control-label">Complete Name:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="complete_name" id="complete_name" placeholder="Enter Complete Name">
</div>
</div>

<div class="form-group">
<label for="address" class="col-sm-2 control-label">Address:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="address1" id="address1" placeholder="Enter Address 1">
<input type="text" class="form-control"  name="address2" id="address2" placeholder="Enter Address 2">
</div>
</div>

<div class="form-group">
<label for="city" class="col-sm-2 control-label">City:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="city" id="city" placeholder="Enter City">
</div>
</div>

<div class="form-group">
<label for="state" class="col-sm-2 control-label">State:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="state" id="state" placeholder="Enter State">
</div>
</div>

<div class="form-group">
<label for="country" class="col-sm-2 control-label">Country:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="country" id="country" placeholder="Enter Country">
</div>
</div>

<div class="form-group">
<label for="zipcode" class="col-sm-2 control-label">Zip Code:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="zipcode" id="zipcode" placeholder="Enter Zip Code">
</div>
</div>

<div class="form-group">
<label for="phone_no" class="col-sm-2 control-label">Phone No:</label>
<div class="col-sm-6">
<input type="text" class="form-control"  name="phone_no" id="phone_no" placeholder="Phone No">

<br>
<input type="submit" class="button btn-success"  value="Sign Up">
<input type="reset" class="button btn-danger"  value="Cancel">

</div>
</div>
</form>
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
