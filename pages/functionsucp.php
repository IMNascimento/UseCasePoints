<?php

// refatoração de variaveis para ficar melhor colocar mesmo nome menos alocação de memoria
function calculateTap($simpleTap,$mediumTap,$advancedTap){
    // primeira refatoração para otimizar memoria
    $simpleTap = $simpleTap * 1;
    // segunda refatoração para melhor otimização de memoria e logica avançada
    $mediumTap *= 2;
    // esse nome não condiz com nada
    $advancedTwo = $advancedTap * 3;

    $tap = $simpleTap + $mediumTap + $advancedTwo;
    return $tap;
    // retorno calculo no return return $simpleTap + $mediumTap + $advancedTap;
}

// refatoração do nome para useCaseComplexity
function casePoints($simpleTucp,$mediumTucp,$complexTucp){

    $simpleTwo = $simpleTucp * 5;
    $mediumTwo = $mediumTucp * 10;
    $complexTwo = $complexTucp * 15;

    $totalTucp = $simpleTwo +  $mediumTwo + $complexTwo;

    return $totalTucp;
}

function uucp($x,$j){
    $uucp=$x+$j;
    return $uucp;
}

// pode especificar melhor o recebimento x condiz com que ?
// troca do nome de x por technicalFactor
function technicalFactorDb($x)
{
    switch ($x) {
        case '0':
            return 2.0;

            break;
        case '1':
            return 1.0;

            break;
        case '2':
            return 1.0;

            break;
        case '3':
            return 1.0;

            break;
        case '4':
            return 1.0;

            break;
        case '5':
            return 0.5;

            break;
        case '6':
            return 0.5;

            break;
        case '7':
            return 2.0;

            break;
        case '8':
            return 1.0;

            break;
        case '9':
            return 1.0;

            break;
        case '10':
            return 1.0;

            break;
        case '11':
            return 1.0;

            break;
        case '12':
            return 1.0;

            break;

        default:

    }
}

// $g condiz com que não condiz com nada teria um nome melhor para ela identação diferente
function technicalFactor($g){
    $sumFactors=0;
    foreach ($g as $key => $value) {

     $resultado = $value * technicalFactorDb($key);
     // pode ser refatorado para uma linha otimizando memoria
     // exemplo $sumFactors += $resultado;
     $sumFactors = $resultado + $sumFactors;

    }
    // posso retorna o calculo direto no return otimizando memoria
   //$factor = 0.6 + (0.01 * $sumFactors);
    //return $factor;
    return 0.6 + (0.01 * $sumFactors);
  }

// refatoração do nome $x não corresponde a nada  mal identado
  function environmentalFactorDb($x)
{
    switch ($x) {
        case '0':
            return 1.5;

            break;
        case '1':
            return 0.5;

            break;
        case '2':
            return 1;

            break;
        case '3':
            return 0.5;

            break;
        case '4':
            return 1;

            break;
        case '5':
            return 2.0;

            break;
        case '6':
            return -1;

            break;
        case '7':
            return -1;

            break;
// apagar o comentario desnecessario
       /* default:
            return 'Tipo ' . $x . ' não existe';*/
            default:
            //o default tem que exisitir mas nele você não passa parametro
            //pois ele sempre é executado
    }
}

// refatoração igual a outra função
  function environmentalFactor($g){
    $sumFactors=0;
    foreach ($g as $key => $value) {

     $result = $value * environmentalFactorDb($key);
     $sumFactors = $result + $sumFactors;

    }
    $factor = 1.4 + (-0.03 * $sumFactors);
    return $factor;

  }

// $x $e não corresponde com nada refatorar nomes e refatorar nome da função tambem
  function ucp($x,$e,$r){
    $ucp= $x*$e*$r;
    return $ucp;

  }
// refatoração de nome da funça e variavel e calculo pode ser executado dentro do return para otimizar memoria
  function eh($y){
    $eh=$y*20;
    return $eh;

  }





?>
