<?php


function calculateTap($simpleTap,$mediumTap,$advancedTap){
    $simpleTwo = $simpleTap * 1;
    $mediumTwo = $mediumTap * 2;
    $advancedTwo = $advancedTap * 3;

    $tap = $simpleTwo + $mediumTwo + $advancedTwo;
    return $tap;
}


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


function technicalFactor($g){
    $sumFactors=0;
    foreach ($g as $key => $value) {
   
     $resultado = $value * technicalFactorDb($key);
    
     $sumFactors = $resultado + $sumFactors;
    
    }
   $factor = 0.6 + (0.01 * $sumFactors);
    return $factor;
  
  }

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

       /* default:
            return 'Tipo ' . $x . ' não existe';*/
    }
}


  function environmentalFactor($g){
    $sumFactors=0;
    foreach ($g as $key => $value) {
  
     $result = $value * environmentalFactorDb($key);
     $sumFactors = $result + $sumFactors;

    }
    $factor = 1.4 + (-0.03 * $sumFactors);
    return $factor;
    
  }


  function ucp($x,$e,$r){
    $ucp= $x*$e*$r;
    return $ucp;

  }

  function eh($y){
    $eh=$y*20;
    return $eh;

  }


        
        

?>