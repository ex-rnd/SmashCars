<?php
include('topmenu.php');
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

echo <<<_END

<header>
<section id="" class="panel panel-success">
<div class="container-fluid">
			<div class="row">
				<div class="center-block">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="button btn-info">
									<h4 class="text-center white-text"> </h4>
 
								
							</tr>
						</thead>	
							<tbody>
							
	  			<div class="media-right">
	  				<div class="media-center">							
					<div class="panel">
					
_END;

$connect = mysqli_connect("localhost", "root", "mFbFZNjXASrjcbO4", "shopping") or die("Please, check your server connection.");
$message = "";
$quantity="";
$action="";
$query="";
if (isset($_POST['quantity'])) {
  	$quantity = trim($_POST['quantity']);
}
if ($quantity=='')
{
	$quantity=1;
}
if($quantity <=0)
{
	echo "Quantity value is invalid ";
	echo "Go Back and enter a valid value";
}
else
{
	if (isset($_REQUEST['icode'])) {
  		$itemcode = $_REQUEST['icode'];
	}
	if (isset($_REQUEST['iname'])) {
  		$item_name = $_REQUEST['iname'];
	}
	if (isset($_REQUEST['iprice'])) {
  		$price = $_REQUEST['iprice'];
	}
	if (isset($_POST['modified_quantity'])) {
  		$modified_quantity = $_POST['modified_quantity'];
	}
	$sess = session_id();
	if (isset($_REQUEST['action'])) {
		$action = $_REQUEST['action'];
	}
	switch ($action) {
  		case "add":
			$query="select * from cart where cart_sess = '$sess' and cart_itemcode like '$itemcode'";
			$result = mysqli_query($connect, $query) or die(mysql_error()); 
			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
				$qt=$row['cart_quantity'];
				$qt=$qt + $quantity;
				$query="UPDATE cart set cart_quantity=$qt where cart_sess = '$sess' and cart_itemcode like '$itemcode'";
				$result = mysqli_query($connect, $query)  or die(mysql_error());
			}
			else
			{
    				$query = "INSERT INTO cart (cart_sess, cart_quantity, cart_itemcode, cart_item_name, cart_price) VALUES ('$sess', $quantity, '$itemcode', '$item_name', $price)";
    				$message = "<div align=\"center\"><strong>Item added.</strong></div>";
			}
    			break;

  		case "change":
			if($modified_quantity==0)
			{
    				$query = "DELETE FROM cart WHERE cart_sess = '$sess' and cart_itemcode like '$itemcode'";
    				$message = "<div style=\"width:200px; margin:auto;\">Item deleted</div>";
			}
			else
			{
				if($modified_quantity <0)
				{
					echo "Invalid quantity entered";
				}
				else
				{
    					$query = "UPDATE cart SET cart_quantity = $modified_quantity  WHERE cart_sess = '$sess' and cart_itemcode like '$itemcode'";
    					$message = "<div style=\"width:200px; margin:auto;\">Quantity changed</div>";
				}
			}
    			break;
  		case "delete":
    			$query = "DELETE FROM cart WHERE cart_sess = '$sess' and cart_itemcode like '$itemcode'";
    			$message = "<div style=\"width:200px; margin:auto;\">Item deleted</div>";
    			break;
  		case "empty":
    			$query = "DELETE FROM cart WHERE cart_sess = '$sess'";
      			break;
	}
	if($query !="")
	{
		$results = mysqli_query($connect, $query) or die(mysql_error());
		echo $message;
	}
	include("showcart.php");
	echo "<SCRIPT LANGUAGE=\"JavaScript\">updateCart();</SCRIPT>";
}

echo <<<_END

												</tr>
								
											</tbody>
							
										</table>
						
									</div>									
							</div>					
						</div>						
					</div>
				</div>
			</div>
		</section>
</header>

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
			
			
_END;

?>


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