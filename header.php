<!Doctype html>

<?php

	spl_autoload_register(function ($class)
	{
		include $class.'.class.php';
	});

	include('functions.php');

	$bdd = new mysqli('localhost','root','','banque');

	if($bdd -> connect_errno)
	{
		echo "Looser";
	}

	else
	{
		echo "Bienvenue Mr Bond";
	}

?>

<html lang="en">

	<head>

	    <meta http-equiv="Content-type" content="text/html"; charset="utf-8"/> 
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <link rel="icon" href="../../favicon.ico">

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>

	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


		<title>WF-Banque</title>

	</head>

	<body>

		<nav class="navbar navbar-default navbar-fixed-top">
  			
  			<div class="container">

  				<a class="navbar-brand" href="index.php">WF-Banque</a>
  					
  				<ul class="nav navbar-nav navbar-collapse collapse">

					<li><a href="virement.php">Virements</a></li>
  					<li><a href="listeClients.php">Clients</a></li>
  					<li><a href="historique.php">Historique</a></li>

  				</ul>    		
  			
  			</div>

		</nav>

		<br/><br/>
