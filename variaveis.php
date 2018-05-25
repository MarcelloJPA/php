<?php

$nome = "Marcello lima";

$idade = 25;

$sobrenome = "da Costa";

$nomeCompleto = $nome . " " . $sobrenome;  //CONCATENAÇÃO
echo $nomeCompleto;

l
unset($nome);  // APAGA CONTEUDO DA VARIÁVEL 

echo "<br>";

  

if(isset($nome)){     //"ISSET"-> se existe conteudo na variavel $nome imprima senão informe q esta vazia 
	echo $nome;
}
else {
	echo"variavel está vazia";
}



?>