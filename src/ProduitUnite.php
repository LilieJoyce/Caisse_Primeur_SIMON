<!DOCTYPE html>
<html>
	<head>
		<title>	CAISSE DU PRIMEUR </title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
</html>

<?php

require_once('Produit.php');
class ProduitUnite extends Produit {
	
	//donnée nombre du produit
	public $Quantite;
	
	//Constructeur
	public function __construct($nomProduit, $prixKilo, $prixUnite,$Quantite) {
		parent::__construct($nomProduit, $prixKilo, $prixUnite);
		$this->Quantite = $Quantite;
	}
	
	
	
	//public function Calcul_Prix() { -> utilisation de la méthode abstraite
	
	//Déclaration fonction Calcul de prix au à l'unité
	public function Calcul_PrixUnite() {
		return ($this->Quantite*$this->Prix_Unite);
	}
}

?>