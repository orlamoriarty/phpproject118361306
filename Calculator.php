
<html>


<head>
<title>Calculator</title>

<script language="javascript" type="text/Javascript">

<!-- Assigning values to the radio buttons-->
function subTotal() {
	//Enter in prices here
	var x = 5;
	var y = 15;
	var p = x + y * 12;
	var b = y * 12;
	
	if (document.getElementById('basicProgram').checked) {
		//basic package is checked
		document.calculator.total.value = b;
		
	} else if (document.getElementById('proProgram').checked) {
		//pro package is checked
		document.calculator.total.value = p;
		
	}
}

<!--Calculations
function calDisc() {
	var subTott = document.calculator.total.value
	var disctotal = ((subTot /100) *10);
	document.calculator.discount.value = discTotal;
}

function calcTotal () {
	var subTott = document.calculator.total.value;
	var discTotal = document.calculator.discount.value;
	
	var wholeTotal = (subTott - discTotal);
	
	document.calculator.wholeTotal.value = wholeTotal;
}

</script>
</head>


<body>
<!-- Opening a html form-->
<form name="calculator">

<!-- User file out form here-->

</br>
<input type="radio" name="programType" id="basicProgram" value="Basic" />Basic
<input type="radio" name="programType" id="proProgram" value="Pro" checked />Pro


<!-- Here result will be displayed -->

<br/>
Subtotal; <input type ="text" name="total">
<br>
<input type="button" value="Subtotal" onclick="javascript:subTotal();">
</br>

Discount: <input type="text" name="discount">
<br>
<input type="button" value="Discount" onclick="javascript:calDisc();">
<br/>

Total: <input type="text" name="wholeTotal">
<br>
<input type="button" value="Total" onclick="javascript:calTotal();">



</form>

</body>

<html>



















	
