<?php

require_once('../src/Produit.php');

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
		}

		$requete->closeCursor();

?>