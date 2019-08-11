
<?php
/*
 * 
 *  VERSÃO QUE RETORNA APENAS O JOGADOR DA VEZ.
 * 
 */

function Sacar($pontuacaoAtual){
    
    /* JOGADOR 'A' SEMPRE COMEÇA SACANDO */
	$jogador = 'A';
        
    /* DIVIDE O PLACAR */
	$placar = explode(':', $pontuacaoAtual);
    
    /* ATRIBUI VALOR DA PONTUAÇÃO RECEBIDA NO PARÂMETRO SENDO O PRIMEIRO VALOR  PARA O JOGADOR 'A' */
	$pontuacaoA = $placar[0];
    
    /* ATRIBUI VALOR DA PONTUACAO PARA JOGADOR 'B' */
	$pontuacaoB = $placar[1];
		
    /* SETA REGRA INICIAL 5 SAQUES */
	$regraVigente = 5; 

    /* VERIFICA DE QUEM É A VEZ DO SAQUE APENAS SE O VALOR RECEBIDO NO PARÂMETRO FOR UM EMPATE E MAIOR QUE 20. */	
	if (($pontuacaoA == $pontuacaoB && $pontuacaoA >= 20 && $pontuacaoB >= 20) || ($pontuacaoA > 20  && $pontuacaoB > 20)){	 
	    $regraVigente = 2;
	    $verificar = ($pontuacaoA + $pontuacaoB) - 40;	    
	    $jogadorDaVez = $verificar / 2;    
	    if ($jogadorDaVez % 2 == 0):
		$jogador = 'A';
	    else:
		$jogador = 'B';	
	    endif; 
	}
	else{	
    /* VERIFICA DE QUEM É A VEZ DO SAQUE DEPENDENDO DA PONTUAÇÃO RECEBIDA NO PARÂMETRO CASO NÃO SEJA UM EMPATE MAIOR QUE 20. */	    
	    $verificar = ($pontuacaoA + $pontuacaoB) / 5;
	    if (fmod($verificar, 2) < 1):
		$jogador = 'A';
	    else:
		$jogador = 'B';
	    endif; 
	}
	echo $jogador;
	return  $jogador;
	
}   
Sacar('0:0');

/*
 * 
 *  VERSÃO MAIS COMPLETA EXECUTANDO O JOGO ATÉ O FIM.
 * 
 */

function SacarCompleto($pontuacaoAtual){
    
    /* JOGADOR 'A' SEMPRE COMEÇA SACANDO */
	$jogador = 'A';
        
    /* DIVIDE O PLACAR */
	$placar = explode(':', $pontuacaoAtual);
    
    /* ATRIBUI VALOR DA PONTUAÇÃO RECEBIDA NO PARÂMETRO SENDO O PRIMEIRO VALOR  PARA O JOGADOR 'A' */
	$pontuacaoA = $placar[0];
    
    /* ATRIBUI VALOR DA PONTUACAO PARA JOGADOR 'B' */
	$pontuacaoB = $placar[1];
		
    /* SETA REGRA INICIAL 5 SAQUES */
	$regraVigente = 5; 

    /* VERIFICA DE QUEM É A VEZ DO SAQUE APENAS SE O VALOR RECEBIDO NO PARÂMETRO FOR UM EMPATE E MAIOR QUE 20. */	
	if (($pontuacaoA == $pontuacaoB && $pontuacaoA >= 20 && $pontuacaoB >= 20) || ($pontuacaoA > 20  && $pontuacaoB > 20)){	 
	    $verificar = ($pontuacaoA + $pontuacaoB) - 40;
	    $jogadorDaVez = $verificar / 2;  
	    $regraVigente = 2;	     
	    if ($jogadorDaVez % 2 == 0):
		$jogador = 'A';
	    else:
		$jogador = 'B';	
	    endif; 
	}
	else{	
    /* VERIFICA DE QUEM É A VEZ DO SAQUE DEPENDENDO DA PONTUAÇÃO RECEBIDA NO PARÂMETRO CASO NÃO SEJA UM EMPATE MAIOR QUE 20. */	    
	    $verificar = ($pontuacaoA + $pontuacaoB) / 5;
	    if (fmod($verificar, 2) < 1):
		$jogador = 'A';
	    else:
		$jogador = 'B';
	    endif; 
	}
 
    /* LOOP PARA EXECUTAR SAQUES */
	for($saque = 1; $saque <= $regraVigente; $saque++){
	
	/* NUMERO RANDÔMICO PARA VERIFICAR SE ACERTOU OU ERROU O SAQUE */
	    $acerto = rand(0, 1);
	    
	/* VERIFICA DE QUEM É A VEZ E ATRIBUI 1 PONTO */
	    if (($jogador == 'A' && $acerto == 1) || ($jogador == 'B' && $acerto == 0)){
		
		$pontuacaoA++;		
		echo "Saque: $saque Jogador: $jogador Ponto para Jogador: ".($jogador == 'B' ? 'A' : 'A')."  Total Pontos:  $pontuacaoA <br>";		
	    }elseif (($jogador == 'B' && $acerto == 1) || ($jogador == 'A' && $acerto == 0)){		
		
		$pontuacaoB++;	
		echo "<font color='red'> Saque: $saque Jogador: $jogador Ponto para Jogador: ".($jogador == 'A' ? 'B' : 'B')."  Total Pontos:  $pontuacaoB </font><br>";	
	    }	

	/* VERIFICA SE JA FORAM EFETUADOS 5 SAQUES DO JOGADOR QUE ESTA NA VEZ E MUDA PARA O JOGADOR ADVERSARIO */
	    if (($saque == 5 && $jogador == 'B') || ($saque == 2 && $jogador == 'B' && $regraVigente == 2)){
		
		$jogador = 'A';
		$saque = 0;
		echo '<br>';	
	    }

	/* VERIFICA SE JA FORAM EFETUADOS 5 SAQUES DO JOGADOR QUE ESTA NA VEZ E MUDA PARA O JOGADOR ADVERSARIO */
	    if(($saque == 5 && $jogador == 'A') || ($saque == 2 && $jogador == 'A' && $regraVigente == 2)){
		
		$jogador = 'B';
		$saque = 0;
		echo '<br>';	    
	    }

	/* VERIFICA SE HOUVE EMPATE, SE HOUVER MUDA REGRA VIGENTE PARA DOIS SAQUES */
	    if(($pontuacaoA >= 20 && $pontuacaoB >= 20) || ($pontuacaoA == $pontuacaoB && $pontuacaoA > 20 && $pontuacaoB > 20)){
		
		$regraVigente = 2;	
		echo '<br>';		
	    }

	/* VERIFICA SE ALGUM JOGAR ATIGINGIU 21 PONTOS COM A REGRA VIGENTE EM 5 SAQUES E FINALIZA O JOGO  */
	/* VERIFICA TAMBÉM SE HOUVE DIFERENCA DE DOIS PONTOS APÓS EMPATE. */
	    if(($regraVigente == 5 && $pontuacaoA == '21') || ($regraVigente == 5 && $pontuacaoB == '21') || ($regraVigente == 2 && $pontuacaoA - $pontuacaoB == 2) || ($regraVigente == 2 && $pontuacaoA - $pontuacaoB == -2) ){
	    
		$saque = 6;
		echo 'FIM DE JOGO!';
	    }
	}
}    

SacarCompleto('0:0');
