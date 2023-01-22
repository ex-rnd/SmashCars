<?php
include('topmenu.php');
?>
<html>
	<head>
	</head>
	<body>
  	<form action="addcustomer.php" method="post">
		<table border="0" cellspacing="1" cellpadding="3">
			<tr><td colspan="2" align="center">Enter your information</td></tr>
  			<tr><td>Email Address: </td><td> <input size="20" type="text" name="emailaddress"></td></tr>
  			<tr><td>Password: </td><td>  <input size="20" type="password" name="password"></td></tr>
  			<tr><td>ReType Password:  </td><td> <input size="20" type="password" name="repassword"></td></tr>
  			<tr><td>Complete Name  </td><td> <input size="50" type="text" name="complete_name"></td></tr>
   			<tr><td>Address:  </td><td> <input size="80" type="text" name="address1"></td></tr>
  			<tr><td></td><td> <input size="80" type="text" name="address2"></td></tr>
  			<tr><td>City:  </td><td> <input size="30" type="text" name="city"></td></tr>
  			<tr><td>State:  </td><td> <input size="30" type="text" name="state"></td></tr>
 			<tr><td>Country:  </td><td> <input size="30" type="text" name="country"></td></tr>
  			<tr><td>Zip Code:  </td><td> <input size="20" type="text" name="zipcode"></td></tr>
    			<tr><td>Phone No:  </td><td> <input size="30" type="text" name="phone_no"></td></tr>
  			<tr><td><input type="submit" name="submit" value="Submit"> </td><td> 
    			<input type="reset" value="Cancel"></td></tr>
		</table>
  	</form>
</body>