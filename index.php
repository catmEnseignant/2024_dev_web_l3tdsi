<?php
echo "bonjour les etudiants de la L3TDSI";
 echo 2+3;  
  //Declaretionde variables/affecter des valeurs et affichage

  $var1 = 3;
  $var2 = 4;
  $resulta = $var1 + $var2;
  echo "la somme de ".$var1. "et".$var2. "est egale" .$resulta;
  $nom_var1 = 5;
  $nom_var2 = "\n les etudiants";

  //echo $nom_var1;
  //echo $nom_var2;

  //les chaines de caracteres

  $chaine1 = "bonjour les"; //declaration et affect
  $chaine2 = "etudiants";
  //concetenation
  echo "la concetenation de chaine de caractere: \n ". $chaine1. " ". $chaine2;
  //chaine et variable
  echo "\n la valeur de la  variable $nom_var1";
  //Acces a un caractere
  echo"\n le 4 ieme caractere de la chaine chaine1 est $chaine1[3]";
  //Recuperer la longueur de la chaine
  echo "\n la longueur de la chaine est :" .strlen($chaine2);