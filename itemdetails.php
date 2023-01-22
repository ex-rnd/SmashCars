<?php
include('topmenu.php');
$connect = mysqli_connect("localhost", "root", "mFbFZNjXASrjcbO4", "shopping") or die("Please, check your server connection.");
$code=$_REQUEST['itemcode'];
$query = "SELECT item_code, item_name, description, imagename, price FROM products " .
         	"where item_code like '$code'";
$results = mysqli_query($connect, $query) or die(mysql_error());
$row = mysqli_fetch_array($results, MYSQLI_ASSOC);
extract($row);

echo <<<_END

<header>
<section id="" class="well">
<div class="container-fluid">
			<div class="row">
				<div class="center-block">
					<table class="table table-striped table-hover">
						<thead>
							<tr>
								<th class="button btn-info">
									<h4 class="text-center white-text">Car Purchase</h4>
 
								
							</tr>
						</thead>	
							<tbody>
							
	  			<div class="media-center">
	  				<div class="media-right">
					</b></td></tr><tr> <td colspan=\"2\"><table><tr><td>
							
_END;


echo "<table width=\"100%\" cellspacing=\"0\" cellpadding=\"5\">";
echo "<tr><td style=\"padding: 3px;\" rowspan=\"6\">";
echo '<img src=' . $imagename . ' style="max-width:200px;max-height:260px;width:auto;height:auto;"></img></td>';
echo "<td colspan=\"2\" align=\"center\" style=\"font-family:verdana; font-size:150%;\"><b>";
echo $item_name;


//echo "</b></td></tr><tr> <td colspan=\"2\"><table><tr><td>";
$itemname=urlencode($item_name);
$itemprice=$price;
$itemdescription=$description;
$pfquery = "SELECT feature1, feature2, feature3, feature4, feature5, feature6 FROM productfeatures " .
         	"where item_code like '$code'";
$pfresults = mysqli_query($connect, $pfquery) or die(mysql_error());
$pfrow = mysqli_fetch_array($pfresults, MYSQLI_ASSOC);
extract($pfrow);
echo $feature1;
echo "</td><td>";
echo $feature2;
echo "</td></tr><tr><td>";
echo $feature3;
echo "</td><td>";
echo $feature4;
echo "</td></tr><tr><td>";
echo $feature5;
echo "</td><td>";
echo $feature6;
echo "</td></tr><tr>";

echo "<div class=\"panel\">";

echo "<form method=\"POST\" class=\"form-control btn-success\" action=\"cart.php?action=add&icode=$item_code&iname=$itemname&iprice=$itemprice\">";

echo "<td colspan=\"2\" style=\"font-family:verdana; font-size:150%;\">";
echo " Quantity: <input type=\"text\" class=\"form-inline\" name=\"quantity\" size=\"2\"> &nbsp;&nbsp;&nbsp;Price: " . $itemprice;

echo "</div>";
echo "<div class=\"panel\">";

echo "</td></tr><tr><td  colspan=\"2\"><input type=\"submit\" class=\"button btn-success\" name=\"buynow\" value=\"Buy Now\" style=\"font-size:150%;\">";
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"submit\" class=\"button btn-success\" name=\"addtocart\" value=\"Add To Cart\" style=\"font-size:150%;\"></td>";
echo"  </form>";
echo "</tr></table></table>";

echo "</div>";
echo "<div class=\"panel\">";

echo "<p  style=\"font-size:140%;\">Description</p>";
echo $itemdescription;

echo "</div>";

echo <<<_END

								</tr>
								
							</tbody>
							
						</table>
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
	
	
	
