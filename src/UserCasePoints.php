<?php

namespace App;

use App\InterfaceCalculate;
use App\Validation;
use Models\CalculateDB;

class UserCasePoints implements InterfaceCalculate
{
  private $simpleTap;
  private $mediumTap;
  private $advancedTap;
  private $simpleTucp;
  private $mediumTucp;
  private $complexTucp;
  private $factorTec;
  private $factorEnv;

  public function setSimpleTap($x)
  {
      $this->simpleTap = $x;
      return $this;
  }
  public function getSimpleTap()
  {
    return $this->simpleTap;
  }
  public function setMediumTap($x)
  {
      $this->mediumTap = $x;
      return $this;
  }
  public function getMediumTap()
  {
    return $this->mediumTap;
  }
  public function setAdvancedTap($x)
  {
      $this->advancedTap = $x;
      return $this;
  }

  public function getAdvancedTap()
  {
    return $this->advancedTap;
  }
  public function setSimpleTucp($x)
  {
      $this->simpleTucp = $x;
      return $this;
  }
  public function getSimpleTucp()
  {
    return $this->simpleTucp;
  }
  public function setMediumTucp($x)
  {
      $this->mediumTucp = $x;
      return $this;
  }
  public function getMediumTucp()
  {
    return $this->mediumTucp;
  }
  public function setComplexTucp($x)
  {
      $this->complexTucp = $x;
      return $this;
  }

  public function getComplexTucp()
  {
    return $this->complexTucp;
  }
  public function setFactorTec(array $x)
  {
      $this->factorTec = $x;
      return $this;
  }

  public function getFactorTec(): array
  {
    return $this->factorTec;
  }
  public function setFactorEnv(array $x)
  {
      $this->factorEnv = $x;
      return $this;
  }

  public function getFactorEnv(): array
  {
    return $this->factorEnv;
  }
  public function __construct(array $publish,  array $fields, array $type)
  {
    $x = Validation::validate($publish, $fields, $type);
    $this->setSimpleTap($x['simpleTap']);
    $this->setMediumTap($x['mediumTap']);
    $this->setAdvancedTap($x['advancedTap']);
    $this->setSimpleTucp($x['simpleTucp']);
    $this->setMediumTucp($x['mediumTucp']);
    $this->setComplexTucp($x['complexTucp']);

    $tFactor=array(
    "T1"=>$x['t1'],
    "T2"=>$x['t2'],
    "T3"=>$x['t3'],
    "T4"=>$x['t4'],
    "T5"=>$x['t5'],
    "T6"=>$x['t6'],
    "T7"=>$x['t7'],
    "T8"=>$x['t8'],
    "T9"=>$x['t9'],
    "T10"=>$x['t10'],
    "T11"=>$x['t11'],
    "T12"=>$x['t12'],
    "T13"=>$x['t13']);

    $eFactor=array(
      "F1"=>$x['f1'],
      "F2"=>$x['f2'],
      "F3"=>$x['f3'],
      "F4"=>$x['f4'],
      "F5"=>$x['f5'],
      "F6"=>$x['f6'],
      "F7"=>$x['f7'],
      "F8"=>$x['f8']);

    $this->setFactorTec($tFactor);
    $this->setFactorEnv($eFactor);
  }
  public function totalActionPoints() : int
  {
    return ($this->getSimpleTap()*1)+($this->getMediumTap()*2)+($this->getAdvancedTap()*3);
  }


  public  function totalUseCasePoints() : int
  {
    return ($this->getSimpleTucp()*5)+($this->getMediumTucp()*10)+($this->getComplexTucp()*15);
  }

  public  function unajustedUseCasePoints() :int
  {
    return $this->totalActionPoints()+$this->totalUseCasePoints();
  }

  public  function useCasePoints() :float
  {
    return $this->unajustedUseCasePoints()*$this->technicalFactor()*$this->environmentalFactor();
  }

  public function technicalFactor() :float
  {
    $sumFactors=0;
    $db = new CalculateDB;
    foreach ($this->getFactorTec() as $key => $value) {
      $result = $value * $db->getFactorTechnician($key);
      $sumFactors = $result + $sumFactors;
    }
   $factor = 0.6 + (0.01 * $sumFactors);
    return $factor;
  }

  public  function environmentalFactor() :float
  {
    $sumFactors=0;
    $db = new CalculateDB;
    foreach ($this->getFactorEnv() as $key => $value) {
     $result = $value * $db->getFactorEnvironmental($key);
     $sumFactors = $result + $sumFactors;
    }
    $factor = 1.4 + (-0.03 * $sumFactors);
    return $factor;
  }

  public function effortManHour() :float
  {
    return $this->useCasePoints()*20;
  }

}





 ?>
