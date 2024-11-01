<?php // début de script PHP
    echo "Hello L3TDSI: Je suis Ahmadou Cheikhou Niang mon username est 111Ahmadou, ma branche est Ahmed";
    phpinfo();
?> <!-- Fin Script -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Script PHP</title>
</head>
<body>
    <h1>Script PHP à l'intérieur d'une page HTML</h1>
    <?php
        echo "Bonjour les étudiants : Un Script PHP dans une structure de page HTML";
    ?>
    
    <h2>Déclaration de variables et affichage</h2>
    <?php
        // Déclarer des variables et affecter des valeurs
        $nom_var1 = 5;
        $nom_var2 = "\n Les étudiants";

        //echo $nom_var1;
        //echo $nom_var2;

        // Les chaînes de caractères
        $chaine1 = "Bonjour les"; // Déclaration et affectation
        $chaine2 = "étudiants";

        // Concaténation
        echo "La concaténation de chaîne de caractère: \n " . $chaine1 . " " . $chaine2;

        // Chaîne et variable
        echo "\n La valeur de la variable \$nom_var1 est : $nom_var1";

        // Accès à un caractère
        echo "\n Le 4ème caractère de la chaîne chaine1 est : " . $chaine1[3];

        // Récupérer la longueur de la chaîne
        echo "\n La longueur de la chaîne est : " . strlen($chaine2);
    ?>

    <h2>La portée des variables : global, local et static</h2>
    <?php
        $nom_var1 = "Variable globale";
        $nom_var2 = 4; // Variable de portée globale

        function scope() {
            // Utilisation d'une variable globale dans une fonction
            global $nom_var2; // Première façon
            echo "\n Affichage de la variable globale (nom_var1) : " . $GLOBALS['nom_var1']; // Deuxième façon

            // Variable locale
            $varLocal = $GLOBALS['nom_var2']; // La variable $varLocal est une variable locale dans la fonction scope

            // Variable statique
            static $var_static = 4;
            $var_static++;

            // Explication de la variable statique
            echo "\n Affichage de la variable statique : " . $var_static . "\n";
        }

        // Appel de la fonction scope deux fois pour observer le comportement des variables statiques
        scope();
        scope();
    ?>
</body>
</html>
