<html>

<head>
<title>NFE.io Test</title>

<?php

	session_start();
	
	if(!isset($_SESSION ['AmountWithheld'])){
	
		$_SESSION ['AmountWithheld'] = 0;
		$_SESSION ['IRRate'] = 0;
		$_SESSION ['PISRate'] = 0;
		$_SESSION ['COFINSRate'] = 0;
		$_SESSION ['CSLLRate'] = 0;
		
	}

?>

</head>

<body>

You are Welcome to NFE.io

<br><br><br>

<form action="h1.php"><input type="submit" name="H1" value="History 1 - Provides Services"/></form>
<br><br>

<form action="h2.php"><input type="submit" name="H2" value="History 2 - System Administrator"/>
<?php if($_SESSION ['IRRate'] == 0 && $_SESSION ['PISRate'] == 0 && $_SESSION ['COFINSRate'] == 0 && $_SESSION ['CSLLRate'] == 0){ 
	echo "Please, set a value to rates.";
	}else{ echo "Rates Initialised!!!";}
?>
</form>

<br><br>
<form action="h3.php"><input type="submit" name="H3" value="History 3 - Company"/></form>

</body>

</html>