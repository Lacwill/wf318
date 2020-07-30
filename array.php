<?php
// 4 - Créer une page array.php :
// 4.1 - Déclarer un tableau avec tous les fruits : pommes, cerises, poires, bananes
$tab_fruit = array('pommes', 'poires', 'cerises', 'bananes');

// 4.2 - Déclarer un tableau avec tous les poids suivants : 100, 500, 1000, 2000, 5000
$tab_poids = array( 100, 500, 1000, 2000, 5000 );

// 4.3 - Affichez les 2 tableaux
print '<pre>';
	print_r( $tab_fruit );
print '</pre><hr>';

print '<pre>';
	print_r( $tab_poids );
print '</pre><hr>';

// 4.4 - Sortir le fruit 'cerise' avec le poids 500 via les tableaux créés pour les transmettre à la fonction calcul() et ainsi obtenir le prix
require_once "fonction.inc.php";

echo calcul( $tab_fruit[2], $tab_poids[1] ) . '<hr>';

// 4.5 - Sortir TOUS les prix pour les 'cerises' avec tous les poids (boucle)
foreach ($tab_poids as $value) {

	echo calcul( $tab_fruit[2], $value );
}

// echo '<p>'.sizeof($tab_poids) .'</p>'; // retourne la taille d'un tableau

// for( $i = 0; $i < sizeof($tab_poids); $i++ ){

// 	echo calcul( $tab_fruit[2], $tab_poids[$i] );
//}

// 4.6 - Sortir tous les prix pour tous les fruits avec tous les poids (boucles imbriquées)
foreach ($tab_fruit as $valeur_fruit) {

	echo "<h2>$valeur_fruit</h2>";

	foreach( $tab_poids as $valeur_poids ){

		echo calcul( $valeur_fruit, $valeur_poids );
	}
}
//-----------------------------
// for( $i = 0 ; $i < sizeof($tab_fruit); $i++ ){ 

// 	echo '<h2>'. $tab_fruit[$i] . '</h2>';

// 	for ( $j = 0; $j < count($tab_poids) ; $j++) { 
			
// 		echo calcul( $tab_fruit[$i], $tab_poids[$j] );
// 	}	
// }

// 4.7 - faire un affichage dans un tableau ('table') pour un affichage plus 'propre'
echo '<table border="1">';
	echo '<tr>';
		echo "<th></th>";
		foreach ($tab_poids as $value) {

			echo "<th>$value</th>";
		}
	echo '</tr>';

	foreach ($tab_fruit as $value) {
		echo '<tr>';
			echo "<th>$value</th>";

			foreach ($tab_poids as $info_prix) {

				echo '<td>'. calcul( $value, $info_prix) .'</td>';
			}
		echo '</tr>';
	}
echo '</table>';

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>