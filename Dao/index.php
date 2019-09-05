<?php 
error_reporting(E_ALL);
@ini_set("log_errors", 1);
ini_set('error_reporting', E_ALL);
ini_set('display_errors',1);
require_once ("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM datapoints");

$result = json_encode($usuarios);

echo $result;
?>