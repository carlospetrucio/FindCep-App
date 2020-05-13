<?php 
$cepusuario = "";
if (isset($_POST['cep'])){
    $cepusuario = $_POST['cep'];
}

require_once "vendor/autoload.php";

use carlospetrucio\findcep\Search;

$busca = new Search;



?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>FindCep</title>
  </head>
  <body class="bg-primary">

  <div class="container">

  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <img src="assets/img/logo.png" class="logo">
    </div>


    <div class="col-lg-12 col-sm-12 col-md-12 text-center">
      <?php include('includes/pesquisa.php'); ?>
    </div>
    
    <div class="col-lg-12 col-sm-12 col-md-12 text-center dados-print">
      <?php 

if (empty($cepusuario)) {
    echo "<small id='cepHelp' class='form-text text-light'>Informe um cep para pesquisa. (*apenas números)</small>";
  }
  else{
              //print_r($busca->getAddressFromZipcode($cepusuario));
              $vetor = $busca->getAddressFromZipcode($cepusuario);

foreach (array_keys($vetor) as $index => $key);
              $array = array_keys($vetor);
              for ($i = 0; $i <= 1; $i++) ;
              echo "<h1> Seu Cep é : " . $vetor[$array[0]] . "</h1>";
              echo "<h1> Endereço : " . $vetor[$array[1]] . " - " . $vetor[$array[2]] ."</h1>";
             
             
               
            
  }
               ?>
    </div>
    
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>