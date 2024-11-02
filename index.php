<?php

echo "Bonjour les etudiants de la L3TDSI <br>" ;

//Déclaration de variable 
$var1 = 3;
$var2 = 4;
$resultat = $var1 + $var2 ;
echo "La somme de ".$var1. " et ".$var2." est égale à ".$resultat;
//Les chaines de caractères
$chaine1 = "Bonjous les ";
$chaine2 = "tam sarr";
//concaténation 
echo " \n La concaténation de chaine de caractère: \n ". $chaine1. " ".$chaine2 ;
//Chaine et variable 
echo "\n La valeur de la variable est $var1";
//Accès à un caractère
echo "\n Le 4 iéme caractère de la chaine est $chaine1[3]";
//Récupérer la longueur de la chaine 
echo "\n La longueur de la chaine est : ".strlen($chaine2);
//Les nombres 
$entiers1 = 3;
$entiers2 = 2.5;
echo "Vérifier le type entier ".is_int($entiers1);
echo "\n Vérifier le type réel ".is_float($entiers2);
//Les tableaux
$tableau = array(2, "la", 2.8); // Déclaration et affectation 
$tableau3['premier'] = 2;
$tableau3['deuxieme'] = 4;
echo "\n Accès élément tableau ".$tableau[0];
$tableau["clé"] = "tester index 7";
//Affichage de tout le tableau 
print_r($tableau3);
//echo "\n Accès élément tableau ";
//Les constantes 
define('PI', 10);
echo PI;
//Les fonctions

//Définitions avec ou sans paramètre 
function nomFonction($param1, $param2 = 3){
    echo "\n La somme des paramètres est " . ($param1 + $param2);
}

nomFonction(4);
nomFonction(4, 2);
//La portée des variables : global, local, et static 
$nom_var1 = " Variable global "; 
$nom_var2 = 4; 
//Variable de portée global : Toute variable déclarée directement dans la balise php sans passer dans une fonction, une structure de contrôle ou une boucle a une portée globale.

function scope(){
    //Utilisation  d'une variable globale dans une fonction 
    //Pour utiliser la variable globale $nom_var2 qui n'est pas déclarée dans la fonction, on a deux façons de faire :
    global $nom_var2; // 1ère façon
    echo "\n Afficher la variable globale ".$GLOBALS['nom_var1']; // 2ème façon
    //Variable locale
    $varLocal = $GLOBALS['nom_var2']; //La variable $varLocal est une variable dans la fonction scope

    //Les variables statiques
    static $var_static = 4;

    $var_static++;

    //Une variable statique est l'attribut de PHP permettant de libérer la mémoire une fois son exécution terminée.
    //Cependant, dans certains cas, nous souhaitons réellement stocker les variables même après l'exécution de la fonction. Pour ce faire, nous utilisons le mot-clé `static`, et les variables sont alors appelées variables statiques.

    $local_var = 3;
    //echo $GLOBALS['nom_var2'];
    echo "\n Affichage des variables statiques ". $var_static."\n";

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



// Les formulaires et variables superglobales PHP

echo "Récupération avec \$_REQUEST:" . "<br>";
print_r($_REQUEST); // Permet de récupérer toutes les données saisies du formulaire avec toutes les méthodes d'envoi
echo "<br><br>";

echo "Récupération avec \$_POST:" . "<br>";
print_r($_POST); // Permet de récupérer toutes les données du formulaire avec la méthode POST
echo "<br><br>";

echo "Récupération avec \$_GET:" . "<br>";
print_r($_GET); // Permet de récupérer toutes les données du formulaire avec la méthode GET
echo "<br><br>";

echo "Récupération avec \$_FILES:" . "<br>";
print_r($_FILES); // Permet de récupérer toutes les informations des fichiers uploadés
echo "<br><br>";
//Les boucles 
//La boucle avec foreach
echo "La boucle foreach pour récupérer les clés et leurs valeurs dans un tableau ";
echo "<br>";
foreach ($_REQUEST as $key => $request) {
    echo "Le champ ".$key." à pour valeur ".$request."<br>";
    // code...
}
echo "La boucle avec for pour des itérations simples ";
echo "<br>";
for($i=1; $i<10; $i++){
    if ($i%2==0){
        echo $i."est pair "."<br>";
    }
    if($i%3==0){
        echo $i."est divisible par 3"."<br>";
        continue; //Permet de sauter vers au prochaine itération sanscontinuer le reste du code de la boucle 
    }
    echo "$i n'est pas divisible par 3"."<br>";
    if ($i%7==0){
        break; //Arrête l'exécution de la boucle 
    }
}

// Création de l'instance PDO et connexion à la BD
// Infos du serveur DB
$mysqlHost = "localhost";
$dbname = "hamza";
$charset = "utf8";
$dsn = "mysql:host=$mysqlHost;dbname=$dbname;charset=$charset";

// Les options
$opt = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
);

// Instanciation de l'objet PDO
$mysqlLogin = "root";
$mysqlPassword = "root1234@UCAD";
$PDO = new PDO($dsn, $mysqlLogin, $mysqlPassword, $opt);

// Définition de la requête de select
$mysqlTable = "etudiants";
$query = "SELECT * FROM $mysqlTable";

// Envoi et exécution de la requête à la base de données
$statement = $PDO->prepare($query);
$statement->execute(); // Exécution

// Récupération du résultat
$resultats = $statement->fetchAll(PDO::FETCH_ASSOC);
print_r($resultats);

// Requête d'insertion préparée
// Exemple de données à insérer (valeurs variables)
$numero_carte = '20210AGA0';
$prenom = 'Tam';
$nom = 'Sarr';
$adresse = 'keur madiabel, Sénégal';
$age = 22;
$query = "INSERT INTO etudiants (numero_carte, prenom, nom, adresse, age) VALUES (:numero_carte, :prenom, :nom, :adresse, :age)";

// Préparation de la requête
$statement = $PDO->prepare($query);

// Liaison des paramètres avec les variables
$statement->bindParam(':numero_carte', $numero_carte);
$statement->bindParam(':prenom', $prenom);
$statement->bindParam(':nom', $nom);
$statement->bindParam(':adresse', $adresse);
$statement->bindParam(':age', $age, PDO::PARAM_INT);







?>
		
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- L'attribut enctype="multipart/form-data" est obligatoire pour pouvoir récupérer les fichiers -->
        <label>Prénom</label>
        <input type="text" name="prenom"><br><br>
        
        <label>Nom</label>
        <input type="text" name="nom"><br><br>

        <label>CV</label>
        <input type="file" name="cv"><br><br>

        <label>Adresse</label>
        <input type="text" name="adresse"><br><br>

        <label>Téléphone</label>
        <input type="text" name="telephone"><br><br>

        <button type="submit">Enregistrer</button>
    </form>
</body>
</html>

