<?php 
//Retorna os dados em um array formatado.

if (empty($cepusuario)) {
    echo "<small id='cepHelp' class='form-text text-light'>Informe um cep para pesquisa. (*apenas números)</small>";
  }
  else{
              $vetor = $busca->getAddressFromZipcode($cepusuario);

              foreach (array_keys($vetor) as $index => $key);
              $array = array_keys($vetor);
              for ($i = 0; $i <= 1; $i++) ;
              echo "<h1> Seu Cep é : " . $vetor[$array[0]] . "</h1>";
              echo "<h1> Endereço : " . $vetor[$array[1]] . " - " . $vetor[$array[2]] ."</h1>";
        
  }
               ?>