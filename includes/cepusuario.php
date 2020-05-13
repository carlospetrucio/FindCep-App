<?php
// recebe os dados do formulário de pesquisa do usuário

$cepusuario = "";
if (isset($_POST['cep'])){
    $cepusuario = $_POST['cep'];
}
require_once "vendor/autoload.php";
use carlospetrucio\findcep\Search;
$busca = new Search;