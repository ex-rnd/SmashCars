<?php
if ( ! isset($totalamount)) {
   	$totalamount=0;
}
$totalquantity=0;
if (!session_id()) {
  	session_start();
}
$connect = mysqli_connect("localhost", "root", "", "shopping") or die("Please, check your server connection.");
$sessid = session_id();
$query = "SELECT * FROM cart WHERE cart_sess = '$sessid'";
$results = mysqli_query($connect, $query) or die (mysql_query());
if(mysqli_num_rows($results)==0)
{
	echo "<div style=\"width:200px; margin:auto;\">Your Cart is empty</div> ";
}
else
{ 
?>

<header>
<section id="" class="panel panel-success">
<div class="container-fluid">
			<div class="row">
				<div class="center-block">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="button btn-info">
									<h4 class="text-center white-text">Cart Items</h4>
 
								
							</tr>
						</thead>	
							<tbody>
							
	  			<div class="media-right">
	  				<div class="media-center">							
					<div class="panel">		

	<table class="table table-striped table-bordered table-hover" border="1" align="center" cellpadding="5">
  	<tr class=\"danger\"><td> Item Code</td><td>Quantity</td><td>Item Name</td><td>Price</td><td>Total Price</td>
<?php
	while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC)) {
  		extract($row);
  		echo "<tr class=\"success\" ><td>";
  		echo $cart_itemcode;
  		echo "</td>";
  		echo "<td> <form method=\"POST\" action=\"cart.php?action=change&icode=$cart_itemcode\"> <input type=\"text\" name=\"modified_quantity\" size=\"2\" value=\"$cart_quantity\">";
  		echo "</td><td>";
  		echo $cart_item_name;
  		echo "</td><td>";
  		echo $cart_price;
  		echo "</td><td>";
		$totalquantity = $totalquantity + $cart_quantity;
  		$totalprice = number_format($cart_price * $cart_quantity, 2);
		$totalamount=$totalamount + ($cart_price * $cart_quantity);
  		echo $totalprice;
  		echo "</td><td>";
  		echo "<input type=\"submit\" class=\"btn btn-success\" name=\"Submit\"  value=\"Change quantity\"> </form></td>";
  		echo "<td>";
  		echo "<form method=\"POST\" action=\"cart.php?action=delete&icode=$cart_itemcode\">";
  		echo "<input type=\"submit\" class=\"btn btn-danger\" name=\"Submit\" value=\"Delete Item\"> </form></td></tr>";
	}
	echo "<tr><td >Total</td><td>$totalquantity</td><td></td><td></td><td>";
  	$totalamount = number_format($totalamount, 2);
	echo $totalamount;
	echo "</td></tr>";
	echo "</table><br>";
	echo "<div class=\"text-success\" style=\"width:400px; margin:auto;\">You currently have " . $totalquantity . " product(s) selected in your cart</div> ";
?>
	<table border="0" style="margin:auto;">
	<tr><td  style="padding: 10px;">
	<form method="POST" action="cart.php?action=empty">
		<input type="submit" class="button btn-warning" name="Submit" value="Empty Cart" style="font-family:verdana; font-size:150%;" > 
	</form>
	</td><td>
	<form method="POST" action="checklogin.php">
		<input id="cartamount" name="cartamount" type="hidden" value= "<?php echo $totalamount ; ?>">
		<input type="submit" class="button btn-success" name="Submit" value="Checkout"  style="font-family:verdana; font-size:150%;" >
	</form>
	</td></tr></table>
	
	
	
<?php
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