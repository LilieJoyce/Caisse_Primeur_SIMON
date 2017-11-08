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
class ProduitKilo extends Produit {
	
	//donnée poids du produit
	public $poidsProduit;
	
	//Constructeur
	public function __construct($nomProduit, $prixKilo, $prixUnite,$poidsProduit) {
		parent::__construct($nomProduit, $prixKilo, $prixUnite);
		$this->Poids = $poidsProduit;
	}
	
	//public function Calcul_Prix() { -> utilisation de la méthode abstraite
	
	//Déclaration fonction Calcul de prix au kilo
	public function Calcul_PrixKilo() {
		return ($this->Poids*$this->Prix_Kilo);
	}
 	
}

?>