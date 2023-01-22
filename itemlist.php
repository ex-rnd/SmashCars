<?php
include('topmenu.php');
$connect = mysqli_connect("localhost", "root", "mFbFZNjXASrjcbO4", "shopping") or die("Please, check your server connection.");
$category=$_REQUEST['category'];
$query = "SELECT item_code, item_name, description, imagename, price FROM products " .
         	"where category like '$category' order by item_code";
$results = mysqli_query($connect, $query) or die(mysql_error()); 

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
									<h4 class="text-center white-text">Car Results</h4>
 
								
							</tr>
						</thead>	
							<tbody>
							
	  			<div class="media-right">
	  				<div class="media-right">							
							
_END;


echo "<table border=\"0\">";
$x=1;
echo "<tr>";
while ($row = mysqli_fetch_array($results, MYSQLI_ASSOC))  {
	if ($x <= 3)
	{
		$x = $x + 1;
 		extract($row);
   		echo "<td style=\"padding-right:15px;\">";
		echo "<a href=itemdetails.php?itemcode=$item_code>";
		echo '<img class=\"img-thumbnail\" src=' . $imagename . ' style="max-width:700px;max-height:240px;width:auto;height:auto;"></img><br/>';
		
 

	  	echo "<div class=\"media-body\">";
		echo "&nbsp;";
	  	echo "<h4 class=\"media-heading\"><a href=\".$item_code.\">$category</a></h4>";
	  	echo "<p>";
				
 	
	
 		echo $item_name .'<br/>';
		echo "</a>";
		
        echo "</p>";
	  	echo "<span class=\"pull-right\">";
 
		echo "</span>";
	  	echo "</div>";
	  	echo "</div>";
 		
		
    	echo '$'.$price .'<br/>';
    	echo "</td>";
	}
	else
	{
		$x=1;
		echo "</tr><tr>";
	}
}
echo "</table>";

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
	
	
	
