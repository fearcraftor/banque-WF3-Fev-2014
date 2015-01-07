<?php 

	function effectuerVirement($post1, $post2, $post3, $clients)
	{
		global $bdd;
		//Récupération des données du formulaire
		$somme = $post1;
		$emetteur = $post2 - 1;
		$destinataire = $post3 - 1;

		//Récupère les clients à créditer/débiter
		$aDebiter = $clients[$emetteur];
		$aCrediter = $clients[$destinataire];

		//effectue le virement
		$aDebiter->virement($aCrediter, $somme);

		//Récupère les nouveaux soldes
		$crediteurSolde = $aCrediter->getCompte()->getSolde();
		$debiteurSolde = $aDebiter->getCompte()->getSolde();

		//Inscrit les nouveaux soldes dans la base de donnée
		$updateCrediteur = $bdd -> query ("UPDATE comptes SET solde =".$crediteurSolde." WHERE id =".$post3);
		$updateDebiteur = $bdd -> query ("UPDATE comptes SET solde =".$debiteurSolde." WHERE id =".$post2);

		//Ajoute à l'historique
		$histoCrediteur = $bdd -> query ("INSERT INTO histo (id, compte, motif, credit, debit, solde, `date`)
										VALUES (NULL, '{$post3}', '{$post2}', '{$somme}', 0, '{$crediteurSolde}', CURRENT_DATE())");

		$histoDebiteur = $bdd -> query ("INSERT INTO histo (id, compte, motif, credit, debit, solde, `date`)
										VALUES (NULL, '{$post2}', '{$post3}', 0, '{$somme}', '{$debiteurSolde}', CURRENT_DATE())");

		echo "Transaction effectuée.";
	}

?>
