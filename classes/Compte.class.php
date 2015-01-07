<?php

class Comptes
{
	private $num;
	private $solde;
	private $autoDec;

	public function __construct($id, $solde, $decouvert)
	{
		$this->num = $id;
		$this->solde = $solde;
		$this->autoDec = $decouvert;
	}

	public function crediterCompte($valeur)
	{
		$this->solde = $this->solde + $valeur;
		echo "<br/>Compte crédité";
	}

	public function debiterCompte($valeur)
	{
		if($this->solde >= $valeur - $this->autoDec)
		{		
			$this->solde = $this->solde - $valeur;
			return true;
		}
		else
		{
			return false;
		}
	}

	public function setSolde($valeur)
	{
		$this->solde = $valeur;
	}

	public function getSolde()
	{
		return $this->solde;
	}

	public function getDec()
	{
		return $this->autoDec;
	}
}

?>
