<?php

namespace App;



interface InterfaceCalculate
{


  public function totalActionPoints() :int;

  public function totalUseCasePoints() :int;

  public function unajustedUseCasePoints() :int;

  public function useCasePoints() :float;

  public function effortManHour() :float;

  public function technicalFactor() :float;

  public function environmentalFactor() :float;

}






 ?>
