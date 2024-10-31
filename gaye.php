<?php
echo"Bonjour tout le Monde: Je suis  Mohamed Gaye<br>";
echo 2+3;

//Declarer des variables/affecter des valeurs et affichage
$v1=5;
$v2= "Les etudiants <br>";
echo $v1."<br>".$v2;

//Les chaines de caracteres
$chaine1="Bonjour les";
$chaine2= "etudiants";
echo "<br>Concatenation de chaine de caracteres:<br>".$chaine1." ".$chaine2;

//Chaine et variable
echo "<br>La valeur de la variable $v1";

//acces a un caractere
echo "<br>Le 4iem caractere de la chaine $chaine2 est ".$chaine2[3];

//recuperer la longueur de la chaine
echo "<br>La longueur de la chaine $chaine2 est:".strlen($chaine2);

//Les tableaux
$tab= array(2,"La",2.8);
$tab3['premier']=2;
$tab3['deuxieme']= 5;
print_r($tab3);

print_r($tab);

//Les constantes
define('PI', 3.14); // Définir la constante PI
echo PI;

//Les fonctions

//Avec ou pas de parametres
function monFonction($param1,$param2=2){
    echo"<br>La somme des parametres est: ".$param1+$param2;
}
monFonction(4);
monFonction(4,6);

?>