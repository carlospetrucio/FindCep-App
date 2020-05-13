<?php

$cepusuario = $_POST['cep'];

require_once "vendor/autoload.php";

use carlospetrucio\findcep\Search;

$busca = new Search;

print_r($busca->getAddressFromZipcode($cepusuario));