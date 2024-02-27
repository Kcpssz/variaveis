<?php
//tipos simples
$nome = "hcode";
$site = 'www.hcode.com.br';

$ano = 1990;
$salario = 5500.99;

$bloqueado = false;
//////////////////////////////////////////////////////
//tipos compostos
$frutas = array ("abacaxi", "laranja", "manga");

echo $frutas [2]; 

$nascimento = new DateTime();

var_dump($nascimento);
//////////////////////////////////////////////////////
//tipos especiais

$arquivo =  fopen("exemplo-03.php", "r");

var_dump($arquivo);

$nulo = NULL;
$vazio = "";
//var_dump utilizado para descobrir o tipo da variavel 


?>