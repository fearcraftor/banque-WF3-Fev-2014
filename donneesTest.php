<?php 

	$clients = array();

	$result = $bdd -> query ("SELECT `clients`.`id`, `clients`.`prenom`, `clients`.`nom`, `clients`.`adresse`, `comptes`.`solde`, `comptes`.`autoDec` 
								FROM clients 
								INNER JOIN comptes 
								ON `clients`.`id` = `comptes`.`id` ");

	while ($data = $result->fetch_assoc())
	{
		$compte = new Comptes($data['id'], $data['solde'], $data['autoDec']);

		$client = new Clients($data['id'], $compte);
		$client -> setClient($data['nom'], $data['prenom'], $data['adresse']);

		array_push($clients, $client);
	}


?>
