<?php

namespace Models;

use PDO;
/**
 *
 */
class CalculateDB
{
  private $db;

  public function __construct()
  {
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "usecasepoints";

    $this->db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function getFactorTechnician(string $code)
  {
    $stmt = $this->db->prepare("SELECT weight FROM factor_technician WHERE factor =?");
    $stmt->execute([$code]);
    $return = $stmt->fetch();
    return $return['weight'];
  }
  public function getFactorEnvironmental($code)
  {
    $stmt = $this->db->prepare("SELECT weight FROM factor_environmental WHERE factor =?");
    $stmt->execute([$code]);
    $return = $stmt->fetch();
    return $return['weight'];

  }




}


 ?>
