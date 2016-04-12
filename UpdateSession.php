<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>UpdateSession</title>

<?php session_start(); ?>

<?php 

	if(isset($_POST['AmountWithheld'])){
		$_SESSION ['AmountWithheld'] = $_POST['AmountWithheld'];
	}
	else{
		if(isset($_POST['IRRate'])){
			$_SESSION ['IRRate'] = $_POST['IRRate'];
			$_SESSION ['PISRate'] = $_POST['PISRate'];
			$_SESSION ['COFINSRate'] = $_POST['COFINSRate'];
			$_SESSION ['CSLLRate'] = $_POST['CSLLRate'];
			echo "<script>alert('Update Completed!!!')</script>";
		}
	}
	
	echo "<script>javascript:history.back(-2)</script>";
	
?>

</head>

<body>
</body>
</html>