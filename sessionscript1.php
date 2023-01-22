<?php
if (session_status() == PHP_SESSION_NONE) {
    			session_start();
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
$_SESSION["username"] = "John";
$_SESSION["cartquantity"] = 3;
$_SESSION["cartprice"] = 19.99;
?>
Finished with shopping? <br>
Click <a href="sessionscript2.php"> View Cart </a> link to view the quantity and amount of the products selected in the cart
 </body>
</html> 