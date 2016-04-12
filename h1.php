<html>

<head>
<title>NFE.io Provides Services</title>

<?php session_start(); ?>

<script language="JavaScript" type="text/javascript"> 

function CalculateAmountWithheld(invoice_amount, ir_rate, pis_rate, cofins_rate, csll_rate){
	
	var ir_amount = 0;
	var pis_amount = 0;
	var cofins_amount = 0;
	var csll_amount = 0;
	
	if(invoice_amount * ir_rate > 10){ir_amount = invoice_amount * ir_rate}
	
	if(invoice_amount > 5000){
		pis_amount = invoice_amount * pis_rate;
		cofins_amount = invoice_amount * cofins_rate; 
		csll_amount = invoice_amount * csll_rate;
	}
	
	var sum = ir_amount + pis_amount + cofins_amount + csll_amount; 
	document.getElementById('AmountWithheld').value = sum;

	return sum;	
}

</script> 

</head>

<body>
History 1 - Provides Services

<br><br><br>


<form name="calc" method="post" action="UpdateSession.php">

<p><label for="InvoiceAmount">Invoice Amount:</label>
<input id="InvoiceAmount" name="InvoiceAmount" type="text" value="0.00" required/></p>

<br>

<p><label for="IRRate">IR Rate:</label>
<?php echo $_SESSION ['IRRate'] ?>%</p>

<p><label for="PISRate">PIS Rate:</label>
<?php echo $_SESSION ['PISRate'] ?>%</p>

<p><label for="COFINSRate">COFINS Rate:</label>
<?php echo $_SESSION ['COFINSRate'] ?>%</p>

<p><label for="CSLLRate">CSLL Rate:</label>
<?php echo $_SESSION ['CSLLRate'] ?>%</p>

<br><br>

<input type="submit" name="Calculate" value="Calculate" 
onClick="CalculateAmountWithheld(document.calc.InvoiceAmount.value, 
								 <?php echo $_SESSION ['IRRate']/100 ?>,
								 <?php echo $_SESSION ['PISRate']/100 ?>,
								 <?php echo $_SESSION ['COFINSRate']/100 ?>,
								 <?php echo $_SESSION ['CSLLRate']/100 ?>)" 
								 />

<br><br>
								 
<label for="AmountWithheld">Result:</label> <input type="text" name="AmountWithheld" id="AmountWithheld" value="0.00"/>

</form>
								 
</body>

</html>