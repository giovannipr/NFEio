<html>

<head>
<title>NFE.io Company</title>

<?php session_start(); ?>

<script language="JavaScript" type="text/javascript"> 

function RoundValue(value){
	document.getElementById('result').value = "R$".concat(value.toFixed(2));
	return value;	
}

</script>

<head>

<body>
History 3 - Company

<br><br><br>

<form name="calc" action="#">

<p><label for="AmountWithheld">Invoice Withheld:</label>
<?php echo $_SESSION ['AmountWithheld'] ?></p>

<input type="button" name="Round" value="Round" 
onClick="RoundValue(<?php echo $_SESSION ['AmountWithheld'] ?>)"/>

<br><br>

<label for="result">Rounded Value:</label> <input type="text" name="result" id="result" value="R$"/>

</form>

</body>

</html>