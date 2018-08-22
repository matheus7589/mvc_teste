<?php

$url = $_GET['path'];

$url = explode('/', $url);

$classe = $url[0];
$metodo = $url[1];

$classe .= 'Controller';

require_once 'controllers/'.$classe.'.php';

$obj = new $classe();
$obj->$metodo();
?>
