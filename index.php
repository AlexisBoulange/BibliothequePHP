<?php

// Pour inclure un fichier en PHP : require ou include . Require_once et include_once existent aussi.
// include et require sont similaires mais l'include ne vous fera pas d'erreur fatale et affichera la page. Le require non.

require 'Author.php';
require 'Livre.php';

$a1 = new Author ('King', 'Stephen');
$l1 = new Livre ('ça', 1203, '1990', '20$', $a1);

echo $l1;



// Un livre a un auteur et un auteur peut avoir plusieurs livres.
// Les relations doivent être faites par des clés étrangères.
// Les clés étrangères représentent la classe à laquelle ils font références.
// La clé étrangère est dans la chose qui a le moins de ref (ex : ordi a une marque et la marque à plusieurs ordinateurs, la clé étrangère sera l'ordinateur) tel que : (1 . 1 < 1 . many)


//Créer une classe Editor
//Une maison d'édition à plusieurs auteurs et un auteur a une seule maison d'édition
//On affiche l'auteur avec sa maison d'édition
//Faire un DOCTYPE pour la mise en forme
?>