<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Recherche des films</title>

	</head>

	<body>	
		<h1>Rechercher les films</h1>
		<table>
			<thead>
				<tr>
					<th>Titre</th>
					<th>Année</th>
					<th>Réalisateur</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$fichier = file("../data/vod.csv");
					foreach ($fichier as $ligne);
						$lignes = explode(":", $ligne);
						if ($lignes[0] === $_POST["film"]) {
							echo "<tr>" ;
							echo "<td>" . strtoupper( $lignes[ 0 ] ) . "</td>" ;
							echo "<td>" . ucfirst( strtolower( $lignes[ 1 ] ) ) . "</td>" ;
							echo "<td>" . ucwords( strtolower( $lignes[ 2 ] ) ) . "</td>" ;
							echo "</tr>" ;
						
					}
						else{
							echo "Le film ' " , $_POST["film"], " ' n'a pas pu être trouvé";
						};
				?>
				
			</tbody>
		</table>
	</body>
</html>
