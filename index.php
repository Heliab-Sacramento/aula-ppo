<?php

require_once "Carro.php";

$fusca = new Carro();
$fiat = new Carro();


$fusca->modelo = "1300";
$fiat->modelo = "147";

$fusca->exibir();

$fusca->exibirstatus();
$fusca->ligar();
$fusca->ligar();
$fusca->desligar();
$fusca->desligar();

