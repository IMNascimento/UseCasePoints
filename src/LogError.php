<?php

namespace App;

class LogError
{

public function logErrorTxt(string $erro)
{
  $p = __DIR__;
  $arquivo = "\log.txt";
  $fp = fopen($p.$arquivo, "a+");
  fwrite($fp, $erro);
  fclose($fp);
}

public function logErrorHTML(string $erro)
{
  $p = __DIR__;
  $arquivo = "\log.html";
  $fp = fopen($p.$arquivo, "a+");
  fwrite($fp, $erro);
  fclose($fp);
}


}





 ?>
