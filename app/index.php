<?php
  $classe;
  $metodo;

  if(!isset($_GET["classe"]) || !isset($_GET["metodo"])){
    $classe = "Erro";
    $metodo = "mostrarErro";
  }
  else{
    $classe = $_GET["classe"];
    $metodo = $_GET["metodo"];
  }
  $classe.="Controller";
  $classe = ucfirst($classe);
  
  require_once("./controllers/$classe.php");

  $controller = new $classe();
  $controller->$metodo();

?>