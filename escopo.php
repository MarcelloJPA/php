<?php

		$nome = "MARCELLO";

		function teste(){
			echo $nome;
		}

		teste();  // <<==== A FUNÇÃO "TESTE" NÃO CONSEGUIRÁ EXECUTAR, POIS A VARIÁVEL $NOME ESTÁ FORA E SEM DIREITO GLOBAL

		



		function teste2(){
			global $nome;
			echo $nome; 
		}
		teste2();      //<< FUNCIONA PERFEITAMENTE POIS NA FUNÇÃO A VARIAVEL $NOME ESTÁ GLOBAL


?>