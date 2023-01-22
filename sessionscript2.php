<?php
if (session_status() == PHP_SESSION_NONE) {
    	session_start();
}
?>
<html>
<body>
<?php
if (isset($_SESSION['username']))
$username=$_SESSION["username"];
else
$username="Sir/Ma'm";
$cartquantity=$_SESSION["cartquantity"];
$cartprice=$_SESSION["cartprice"];
echo "Session is On and the session id is " . session_id() . "<br>"; 
echo "Welcome $username. <br>";
echo "There are $cartquantity products chosen in the cart worth $$cartprice";
?>
 </body>
</html> 