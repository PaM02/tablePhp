<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost:3308;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM jeux_video');

echo "<table border='1'>";
	echo "<tr>
			<td>nom</td>
			<td>possesseur</td>
		</tr>\n";
	// On affiche chaque entrée une à une
	while ($donnees = $reponse->fetch())
	{
	echo "<tr>
			<td>{$donnees['nom']}</td>
			<td>{$donnees['possesseur']}</td>
		</tr>\n"; 

	}

echo "</table>";

$reponse->closeCursor(); // Termine le traitement de la requête

?>