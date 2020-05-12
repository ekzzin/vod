<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les films</title>

	</head>

	<body>	
		<h1>Consulter les films</h1>
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
					$liste = file("../data/vod.csv");
					foreach( $liste as $ligne ){
						
						echo "<tr>" ;
						
						$infos = explode( ":" , $ligne ) ;
						
						echo "<td>" . strtoupper( $infos[ 0 ] ) . "</td>" ;
						echo "<td>" . ucfirst( strtolower( $infos[ 1 ] ) ) . "</td>" ;
						echo "<td>" . ucwords( strtolower( $infos[ 2 ] ) ) . "</td>" ;
						
						echo "</tr>" ;
						
					}
				
				?>
				
			</tbody>
		</table>
	</body>
</html>
