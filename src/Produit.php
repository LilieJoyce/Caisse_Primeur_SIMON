<!DOCTYPE html>
<html>
	<head>
		<title>	CAISSE DU PRIMEUR </title>
		<meta charset="UTF-8"/>
		<link rel="stylesheet" type="text/css" href="../style.css">
	</head>
</html>


<?php

//abstract class Produit { -> utilisation de la classe mère produit ABSTRAITE

class Produit {
	
	//donnée nom du produit
	public $nomProduit;
	
	//donnée prix au kilo du produit
	public $prixKilo;
	
	//donnée prix à l'unité du produit
	public $prixUnite;
	
	//Déclaration de la méthode de calcul de prix abstraite
	//abstract public function Calcul_Prix();
	
	//Constructeur
	public function __construct($nomProduit, $prixKilo, $prixUnite) {
		$this->Produit = $nomProduit;
		$this->Prix_Kilo = $prixKilo;      
		$this->Prix_Unite = $prixUnite;
	}
	
	//Affichage
	public function __toString(){
 		$text = "<div class='produit'>
					<p> Produit : ".$this->Produit."</p>
					<p> Prix au kilo : ".$this->Prix_Kilo."€
					<br/> Prix à l'unité : ".$this->Prix_Unite."€</p>					 
				 </div>";
		return $text;
	}
}

?>