<?php

require_once "DatabaseProvider.php";

class MySqlProvider extends DatabaseProvider
{
    public function connect($host, $user, $pass, $dbname){
        $this->resource = new mysqli($host, $user, $pass, $dbname);
        return  $this->resource;
    }
    public function getErrorNo(){
        return mysqli_errno($this->resource);
    }
    public function getError(){
        return mysqli_error($this->resource);
    }
    public function query($q){
        return mysqli_query($this->resource,$q);
    }
    public function fetchArray($result){
        return mysqli_fetch_array($result);
    }
    public function isConnected(){
        return !is_null($this->resource);
    }
    public function escape($var){
        return mysqli_real_escape_string($this->resource,$var);
    }
}
 ?>
