<?php 
	$dadoExposto = ["Mensagem" => $mensagem];
	if (isset($IpSalvo)) {
		$dadoExposto["IP salvo"] = $IpSalvo;
	}
	echo json_encode($dadoExposto,JSON_FORCE_OBJECT);
?>