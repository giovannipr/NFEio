<html>

<head>
<title>NFE.io System Administrator</title>

<?php session_start(); ?>

<script language="JavaScript" type="text/javascript"> 

function SaveSession(){
	
	document.getElementById("IRRate");
	document.getElementById("PISRate");
	document.getElementById("COFINSRate");
	document.getElementById("CSLLRate");
	
	location.reload();
}

</script> 

</head>

<body>
History 2 - System Administrator

<br><br><br>

<form name="update" method="post" action="UpdateSession.php">

<p>Insert Values between 0 and 100%</p>

<p><label for="IRRate">IR Rate:</label> Current (<?php echo $_SESSION ['IRRate'] ?>)
<input id="IRRate" name="IRRate" type="text" value="<?php echo $_SESSION ['IRRate'] ?>"></p>

<p><label for="PISRate">PIS Rate:</label> Current (<?php echo $_SESSION ['PISRate'] ?>)
<input id="PISRate" name="PISRate" type="text" value="<?php echo $_SESSION ['PISRate'] ?>"></p>

<p><label for="COFINSRate">COFINS Rate:</label> Current (<?php echo $_SESSION ['COFINSRate'] ?>)
<input id="COFINSRate" name="COFINSRate" type="text" value="<?php echo $_SESSION ['COFINSRate'] ?>"></p>

<p><label for="CSLLRate">CSLL Rate:</label> Current (<?php echo $_SESSION ['CSLLRate'] ?>)
<input id="CSLLRate" name="CSLLRate" type="text" value="<?php echo $_SESSION ['CSLLRate'] ?>"></p>

<br><br>

<input type="submit" name="Update" value="Update"/>

</form>

</body>

</html>