<?php

    require_once "Conjunto.php";
    $C1=new Conjunto(10);
    echo "Conjunto 1 : ";
    echo $C1->toString();
    echo "\n";
    
    $C2=new Conjunto(10);
    echo "Conjunto 2 : ";
    echo $C2->toString();
    echo "\n";
    
    $C3=new Conjunto(0);
    $C3->union($C1,$C2);
    echo "Union de C1 y C2: ";
    echo $C3->toString();
    echo "\n";

    $C4=new Conjunto(0);
    $C4->interseccion($C1,$C2);
    echo "Interseccion de C1 y C2: ";
    echo $C4->toString();
    echo "\n";

    $C5=new Conjunto(0);
    $C5->diferencia($C1,$C2);
    echo "Diferencia de C1 menos C2: ";
    echo $C5->toString();
    echo "\n";

    $C6=new Conjunto(0);
    $C6->diferencia($C2,$C1);
    echo "Diferencia de C2 menos C1: ";
    echo $C6->toString();
    echo "\n";


?>