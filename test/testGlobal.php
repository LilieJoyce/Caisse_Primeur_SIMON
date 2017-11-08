<?php

require_once('../src/Produit.php');
require_once('../src/ProduitKilo.php');
require_once('../src/ProduitUnite.php');

try {
		$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=caisse_primeur', 'root', '');
	}
		catch (PDOException $e) {
			echo ('Connexion échouée'. $e->getMessage());		
	}

		$requete = $bdd->query('SELECT * FROM produit');

		while ($donnees = $requete->fetch()) {
		
		$Produit = new Produit($donnees['Nom'], $donnees['PrixKilo'],$donnees['PrixUnite']);
			echo ($Produit);
			
		$venteUnite = new ProduitUnite($donnees['Nom'], $donnees['PrixKilo'],$donnees['PrixUnite'],3);
			echo "<br/> Total du produit ".$donnees['Nom']." à l'unité si quantité = 3 : ".$venteUnite->Calcul_PrixUnite()."€";
			
		$venteKilo = new ProduitKilo($donnees['Nom'], $donnees['PrixKilo'],$donnees['PrixUnite'],5);
			echo ("<br/> Total du produit ".$donnees['Nom']." à l'unité si poids de 5 kg : ".$venteKilo->Calcul_PrixKilo()."€");
			echo ("<hr>");
		}

		$requete->closeCursor();

?>