<?php 
$controller = new ClientController;
$showClient= $controller->show($this->parameter);
$onlyShow = true;

include_once('views/components/formCreateUpdateClient.php')
?>