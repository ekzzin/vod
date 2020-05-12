<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Ajouter un film</title>

	</head>

	<body>	
		<h1>Ajout de film</h1>
			<tbody>
				<?php
					$fichier = fopen( "../data/vod.csv" , "a+" ) ;
					$ligne = $_POST["nom"] . ":" . $_POST["annee"] . ":" . $_POST["real"] . "\n" ;
					fwrite( $fichier , $ligne ) ;
					fclose( $fichier ) ;
					
					echo "Titre : " . $_POST["nom"] . "<br/>" ;
					echo "Année : " . $_POST["annee"] . "<br/>" ;
					echo "Réalisateur : " . $_POST["real"] . "<br/>" ;
				?>
				
			</tbody>
		</table>
	</body>
</html>
