<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";
/*
 * Create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

/**
  * Allocate the mobile number session variable to a text box
  */
?>

<!DOCTYPE html>
<html>
	<head>
            <style>
                body{
                background-size: 325%
            }
            </style>
		<title>eBusiness 2</title>
	</head>
	<body background="blue2.png">
			<div class="form">
			<form name="Details" method="post" action="eBus3.php">
				<center>
					<table cellspacing="10">
						<tr>
							<td><b></b></td>
							<td><b>Enter in your details below</b></td>
						</tr>
						<tr>
							<td>Name</td>
							<td><input type="text" id="txtName" name="txtName" value="" /></td>
						</tr>
						<tr>
							<td>Phone Number</td>
							<td><input type="tel" id="txtNum" name="txtNum"
                                                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                                                   required></td>
						</tr>						
						<tr>
							<td>Password</td>
							<td><input type="password" id="psw" name="psw" pattern="[0-9]{4,}" title="Must contain four numbers." required></td>							
						</tr>
						<tr>						
                                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"</td>
						</tr>
					</table>
				</center>
				
			<center>
				<input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Continue"/>
			</center>
			</div>
			</form>
	</body>
</html>	
