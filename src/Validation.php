<?php

namespace App;

use App\LogError;
/*
Classe para tratar as validações
 */
class Validation extends LogError
{


static public function validate(array $array, array $fields, array $type) :array
{
    try {
      $result = array();
      $i=0;
      if (empty($array)) {
        throw new Exception("User manipulated input field and removed the names.");
      }
      if (count($array) != count($fields)) {
        throw new Exception("User manipulated input field and removed some names.");
      }
      foreach ($array as $key => $value[0]) {
        $key = $fields[$i];
        if (!empty($value[0]) or $value[0] == 0 ) {
          $result[$key] = self::validateType($type[$i], $value[0]);
        }else {
          throw new Exception($key." = "."Empty variable");
        }
        $i++;
      }
      return $result;
    } catch (\Exception $e) {
      $this->logErrorTxt($e);
      $this->logErrorHTML("<br><b>". $e . "</b><br />");
      header('Location: calculos.html');
    }
}

static public function validateType($type, $value)
{
  switch ($type) {
    case 'string':
        return strval($value);
      break;
    case 'int':
        return intval($value);
      break;
    case 'float':
      return floatval($value);
      break;
    default:
      break;
    }
}

}







 ?>
