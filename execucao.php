<?php

require_once("modelo/retangulo.php");
require_once("modelo/cirulo.php");
require_once("modelo/quadrado.php");
require_once("modelo/Iformageometrica.php");


$opcao = 0;
do {
    echo "\n-----------FORMAS GEOMETRICAS-----------\n";
    echo "1- quadrado\n";
    echo "2- retangulo\n";
    echo "3- circulo\n";
    $opcao = readline("Escolha a opção: ");
    switch ($opcao) {
        case 3:
            
        $Cirulo = new cirulo;
        $Cirulo->setRaio(readline("qual o numero do raio do circulo?: "));
        $Cirulo->GetArea();
        $Cirulo->GetDesenho();
        


            break;
        case 2:
            $Retangulo = new retangulo;
            $Retangulo->setbase(readline("qual o numero do lado
            
           
            
            do retangulo?: "));
            $Retangulo->setAltura(readline("qual a altura do retangulo?: "));
            $Retangulo->GetArea();
            $Retangulo->GetDesenho();
            break;
        case 1:
            $Quadrado = new quadrado;
            $Quadrado->setLado(readline("qual o numero do lado do quadrado?: "));
            $Quadrado->GetArea();
            $Quadrado->GetDesenho();



            break;
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while ($opcao != 0);









