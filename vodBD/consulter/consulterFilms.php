<!DOCTYPE html>
<html lang="fr">

	<head>
		<meta charset="utf-8">
		<title>Consulter les films</title>

	</head>

	<body>	
		<h1>Consulter les films</h1>
			<tbody>
				<?php
				$bd = new PDO( 'pgsql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;

				$resultat = $bd->query( "SELECT * FROM `film`" ) ;
				$lignes = $resultat->fetchAll(PDO::FETCH_ASSOC) ;
				foreach( $lignes as $uneLigne ){
					echo $uneLigne[ 'annee' ] ;
				}
								
				unset( $bd ) ;
				$bd = NULL ;
				?>
				
			</tbody>
	</body>
</html>
