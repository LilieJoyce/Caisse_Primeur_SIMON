<?php

require_once('../src/ProduitUnite.php');

try {
		$bdd = new PDO('mysql:host=localhost;charset=utf8;dbname=caisse_primeur', 'root', '');
	}
		catch (PDOException $e) {
			echo ('Connexion échouée'. $e->getMessage());		
	}

		$requete = $bdd->query('SELECT * FROM produit');

			
		while ($donnees = $requete->fetch()) {
			
			$venteUnite = new ProduitUnite($donnees['Nom'], $donnees['PrixKilo'],$donnees['PrixUnite'],3);
			echo ($venteUnite);
			//$venteUnite->Calcul_Prix();
			echo "<br/> Total du produit ".$donnees['Nom']." à l'unité si quantité = 3 : ".$venteUnite->Calcul_PrixUnite()."€";
		
			
			
			}

		$requete->closeCursor();

?>