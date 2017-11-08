<?php

require_once('../src/ProduitKilo.php');

try {
		$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=caisse_primeur', 'root', '');
	}
		catch (PDOException $e) {
			echo ('Connexion échouée'. $e->getMessage());		
	}

		$requete = $bdd->query('SELECT * FROM produit');

		while ($donnees = $requete->fetch()) {
			
			$venteKilo = new ProduitKilo($donnees['Nom'], $donnees['PrixKilo'],$donnees['PrixUnite'],5);
			echo ($venteKilo);
			//$venteKilo->Calcul_prix;
			
			echo ("<br/> Total du produit ".$donnees['Nom']." à l'unité si poids de 5 kg : ".$venteKilo->Calcul_PrixKilo()."€");
			
		}
			
		$requete->closeCursor();
?>