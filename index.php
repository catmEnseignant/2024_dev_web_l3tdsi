<?php
// Déclarer des variables / affecter des valeurs et afficher
$nom_var1 = 5;
$nom_var2 = "\n Les étudiants";
echo $nom_var1;
echo " <br> "; // pour aller à la ligne
echo $nom_var2;
echo " <br> ";// pour aller à la ligne
// Les chaines de caractères
$chaine1 = "Bonjour les"; // Déclaration et affectation
$chaine2 = "étudiants";
// Concaténation
echo "La concaténation de chaine de caractère: \n" .$chaine1. " ".$chaine2  ;
// chaine et varible
echo " <br> "; // pour u retoure à la ligne
echo "\n la chaine de la variable $nom_var1 ";
// accés à un caractère
echo " <br> "; // pour aller à la ligne
echo "\n le quatrième caractère de la chaine chaine1 est ".$chaine1[3];
echo " <br> ";
// Récupérer la longeur de la chaine
echo " \n la longeur de la chaine est: ".strlen($chaine2);
echo " <br> "; // pour aller à la lige
// Les nombres
$entier1 = 3;
$entier2 = 2.5;
echo "verifier le type entier ".is_int($entier1);
echo " <br> "; // pour aller à la ligne
echo "verifier le type réel ".is_float($entier2);
echo " <br> "; // pour aller à la ligne
// Les tableaux
    // tableaux

    $tableau = array(2, "la", 2.8);
    

    // Déclaration et affectation d'un tableau associatif
    $tableau3 = array();
    $tableau3['premier'] = 2;
    $tableau3['deuxième'] = 4;
    
    echo "\n Accès élément tableau " . $tableau[0] ;
    echo " <br> "; // pour aller à la ligne
    $tableau["clé"] = "tester index 7";
    // Affichage de tout le tableau
    print_r($tableau3);
    echo " <br> ";
    
    // echo "\n Accés élément tableau"
// Les constantes
define('PI', 10);
echo PI;
echo " <br > "; // pour un retoure à la ligne
// Les fonctions
    
    // Définition avec ou pas de paramètre

    function nomFonction($param1, $param2){
        echo "\n La somme des paramètre est ".$param1 + $param2;

    }
    nomFonction(4, 3);
    echo " <br > "; // pour un retoure à la ligne
    nomFonction(4, 2);
    echo " <br > ";



    // Portée globale
$nom_var1 = "Variable global"; // Variable globale
$nom_var2 = 4;                 // Variable globale

function scope() {
    // Accéder aux variables globales avec "global" ou "$GLOBALS"
    global $nom_var2;
    
    echo "\nAffichage de la variable globale  : " . $GLOBALS['nom_var1'];
    echo " <br > ";

    
    // Variable locale
    $varLocal = $GLOBALS['nom_var2'];
    
    
    // Variable statique
    static $var_static = 4;
    $var_static++;
    echo "\nAffichage de la variable statique : $var_static\n";
}

scope();
scope();










