<?php

$nome = "Kauã";

function teste  (){
//na linha abaixo estou dizendo q a variavel nome dentro da função e fora da função representam a mesma coisa pois se nao colocasse para ser uma variavel global, iria dar um erro
    global $nome;  
    echo $nome;

}

function teste2(){
    global $nome;       
    echo $nome ." agora no teste 2"; 

}

teste();
teste2();


?>