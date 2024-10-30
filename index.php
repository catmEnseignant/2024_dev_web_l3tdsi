
<?php
// Code PHP ici
echo  "Bonjour les etudiants de la L3TDSI <br>" ;
// Declaration de variable 

$var1 = 3;
$var2 = 4;
$resultat = $var1+$var2 ;
echo " La somme de ".$var1. " et ".$var2. " est egale " .$resultat."<br>" ;
//Declarer des variable/affecter des valeur/et affichage
$nom_var1=5;
$nom_var2="\n Les étudiants";
//Les chaines de caractères
$chaine1= "Bonjour les "; //Declararion et affect
$chaine2 = "étudient";
//concaténation 
echo " La concaténation de chaine de caractère : \n ".$chaine1." ".$chaine2."<br>";
//chaine et variable
echo "\n La valeur de de la variable nom_var1 est $nom_var1  <br>";
//Accés à un caractere
echo " \n Le 4 ième caractére de la chaine chaine1 est $chaine1[3] <br>";
//Récupérer la longueur de la chaine
echo " \n La longueur de la chaine est  : ".strlen($chaine2). "<br>";
//Les nombres
$entier1=3;
$entier2=2.5;
echo "Verifier le type entier ".is_int($entier1). "<br>";
echo "\n Verifier le type reel ".is_float($entier2). "<br>";
//Les tableau 
$tableau=array(2,"la",2.8);//declaration et affectation
$tableau3['premier']=2;
$tableau3['deuxieme']=4;
echo "\n Accées élément tableau ".$tableau[0] . "<br>";

$tableau["clé"]="tetser indexe 7 ";
//Afichage de tous le tableau
print_r($tableau3 ) ;
//echo " \n Accés élément tableau";
//Les constantes

define('PI',10);
echo PI;
//Les fonctions

//Definition avec ou sans parametre
function nomFonction($param1, $param2=3){
    echo " \n La somme des parametres est ".$param1 + $param2. "<br> ";

}
nomFonction(4);
nomFonction(4,2);






