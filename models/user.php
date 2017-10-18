<?php
require_once "DatabaseLayer.php";

class User
{
  private $db;
  private $id;
  private $username;
  private $pwd;

  public function __construct($user)
  {
    $this->db = $db = DatabaseLayer::getConnection("MySqlProvider");
    $datos = $db->execute("SELECT username, password FROM usuarios WHERE  username = ?",array($user));

    if (count($datos)>0)
    {
      $this->username = $datos[0]["username"];
      $this->pwd = $datos[0]["password"];
    }
    else {
      echo "No existen datos";
    }
  }

  public function getAcceso($pwd){
    $pwd=md5($pwd);
    if ($this->pwd == $pwd)
    {
      session_start();
      $_SESSION["user"] = $this->username;
      $_SESSION["time"] = time();
      echo "<script type='text/javascript'>
            window.location='panel.php';
          </script>";
    }
    else {
      echo "Clave invalida";
    }
}


?>
