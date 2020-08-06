<?php 
	$dadoExposto = 
	[	
		"mensagem" = $mensagem
	];
	echo json_encode($dadoExposto,JSON_FORCE_OBJECT);
?>