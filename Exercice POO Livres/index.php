<h1>I. Livres</h1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et<br>
    leurs auteurs respectifs.<br>
    Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un<br>
    auteur. Un auteur comporte un nom et un prénom.<br>
    Une méthode toString() sera appréciée dans chacune de vos classes.<br>
    Vous implémenterez une méthode afficherBibliographie() qui permettra d’afficher la bibliographie<br>
    complète d’un auteur :
</p>

<h2>Résultats</h2>

<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

$a1 = new Auteur("Tolkien", "J.R.R");
$a2 = new Auteur("Sapkowski", "Andrzej");
$a3 = new Auteur("Sarkozy", "Nicolas");

$l1 = new Livre("Le Seigneur de Anneaux : La Communauté de l'Anneau", 722, 1954, 9.99, $a1);
$l2 = new Livre("Le Seigneur de Anneaux : Les Deux Tours", 608, 1954, 9.99, $a1);
$l3 = new Livre("Le Seigneur de Anneaux : Le Retour du Roi", 650, 1955, 9.99, $a1);

$l4 = new Livre("Le Sorceleur : La Tour de l'Hirondelle", 432, 1997, 9.95, $a2);

$l4 = new Livre("Le Temps des Tempêtes", 528, 2020, 9, $a3);

echo $a1->afficherBibliographie();
echo $a2->afficherBibliographie();
echo $a3->afficherBibliographie();