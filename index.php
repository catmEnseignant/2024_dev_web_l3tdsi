<?php
    echo"Hello class My name is Thierno Ousmane Sy "; 
    echo "\n";
    $var=5;
    echo"La valeur de variable est: \n $var ";
    echo"\n";
    $var2= "\n Les etudiants \n";
    echo"$var2";
    $color="red";
    echo "My car is  $color ";
    $text= "W3schools";
    echo " \n    Une site web pour appredre le Php \n".$text;
    $x=19;
    $y= 32;
    $z=$x+$y;
    echo " \n $z ";
    if($x>$y){
        echo "La valeurs de x est superieur a y \n";
    }else {
        echo "la valeur de x est inferiur a y \n";
    }
    $tos="Thierno";
    var_dump( $tos );
    echo "\n";
    
    var_dump($z);
    function text(){
         global $x, $y;
         $x =$x+$y;
    }
    text(); 
    echo "\n";
    
    echo "voici la valeur du variable globall $x \n" ;
    function ghost(){
        $char="L3 TDSI";
        echo $char; 
    }
    ghost();
    echo "\n";
    $matier=array("DEv","Machine ","learning reseau","crypto","algebre");
    var_dump($matier);
    echo "\n";
    echo strlen( "\n$matier[2] ");
     echo "\n";
    function affiche($nom){
        echo "Bonjour .$nom";
    }
    affiche("\nCHEIKH MBEUGUE");
     


    
?>
!