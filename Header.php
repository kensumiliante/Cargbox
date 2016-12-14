<?php 

	$varReg = @$_GET['var']; 
	
	session_start();

	$User = $_SESSION['User'];
	$Nick = $_SESSION['Nick'];
	$Nick_Name = $_SESSION['Nick_Name'];
	$Id_Key = $_SESSION['Id_Key'];


	// session_destroy();
	if (!$User || !$Nick || !$Nick_Name) {
		echo "<script language='javascript'>alert('Usuario no autenticado.')
		window.location='../cargbox/Index.php?var=2'</script>";
	}


?>
<html>
<head>
	<meta charset="utf-8">
	<title>MyCarg </title>
	<link rel="stylesheet" type="text/css" href="Css/Style.css">
	<link rel="stylesheet" type="text/css" href="Css/demo.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <link rel="stylesheet" type="text/css" href="css/style4.css" />
	<link href='https://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
</head>
<body>
		<header>
			<div class="info"><div class="userTx"><a class="aMy" href="Controller/Log_Out.php"><div class="user"><b><label class="usTx"><?php echo $Nick; ?></label></div></a><?php echo "| &nbsp;".$Nick_Name; ?><a marginwidth="0" marginheight="0" scrolling="no" frameborder="0" href="MyCarg.php"></div><div class="top_My"><img class="logoMy" src="Images/LogoMy.png" width="240"></a><b></div></div>
		</header>
