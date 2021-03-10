<?php

namespace App\Models;
use mysqli;
class my_Database 
{
  protected $mydatabaseConnection;
  public function __construct()
  {
      $host ='localhost';
      $username ='root';
      $password ='';
      $databasename ='bitem';
      $this->mydatabaseConnection = new mysqli($host,$username, $password, $databasename);
  }   
  public function selectdata($selectquery)
  {
    $result = $this->mydatabaseConnection->query($selectquery);
    $result = $result->fetch_all(MYSQLI_ASSOC);
    return $result;
  }


  public function insertdata($insertQuery)
  {
    $insertresult = $this->mydatabaseConnection->query($insertQuery);
    return $insertresult;
  }
}

