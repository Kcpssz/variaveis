<?php

//$anoNascimento = 2003;
//$nomeCompleto = "Kauã Cavalcanti";
//so podemos usar numeros para criação de variáveis no meio e no fim da criação NUNCA no começo 
$nome1 = "João";
$sobrenome = "Pereira";

$nomeCompleto = $nome1 . " " . $sobrenome;

echo $nomeCompleto;
exit;
echo $nome1;

echo "<br/>";

//unset destroi/deleta a variavel a variável
//isset para saber se a variavel existe

if(isset($nome1)){

    echo $nome1;

}



?>