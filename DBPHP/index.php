<?php

require 'classes/Produto.php';
$pro = new Produto();

$produtos = $pro->listar();

foreach($produtos as $produto){
    echo $produto ['nome'];
    echo '</br>';

}

?>