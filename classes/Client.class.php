<?php

class Clients
{	
	//Défini les attributs d'un client
	private $num;
	private $nom;
	private $prenom;
	private $adresse;
	private $compte;

	//Assigne un compte existant à l'objet client
	public function __construct($id, $compte)
	{
		$this->num = $id;
		$this->compte = $compte;
	}

	//Assesseur modifie le nom et prénom
	public function setClient($nouveauNom, $nouveauPrenom, $newAdresse)
	{
		$this->nom = $nouveauNom;
		$this->prenom = $nouveauPrenom;
		$this->adresse = $newAdresse;
	}

	//Assesseur retrouve le nom et prénom à partir des attributs private
	public function getClient($item)
	{
		if($item == "all")
		{
			return $this->nom ." ".$this->prenom;
		}

		elseif($item == "nom")
		{
			return $this->nom;
		}

		elseif($item == "prenom")
		{
			return $this->prenom;
		}

		elseif($item == "adresse")
		{
			return $this->adresse;
		}

		elseif($item == "num")
		{
			return $this->num;
		}
	}

	public function getCompte()
	{
		return $this->compte;
	}

	//Affiche des informations en fonction des attributs de la classe clients et de l'assesseur de la classe Comptes
	public function afficherSolde()
	{
		echo "<br/>Le solde du compte de ".$this->prenom." ".$this->nom." est de ".$this->compte->getSolde();
	}

	//effectue un virement
	public function virement($aCrediter, $somme)
	{
		$nouveauSolde = $aCrediter -> getCompte() -> getSolde() + $somme;
		$aCrediter -> getCompte() -> setSolde($nouveauSolde);
		$this -> getCompte() -> setSolde($this -> getCompte() -> getSolde() - $somme);
	}
}

?>
