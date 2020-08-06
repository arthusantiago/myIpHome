<?php 
	$dadoExposto = ["Mensagem" => $mensagem];
	if (isset($IpEditado)) {
		$dadoExposto["IP editado"] = $IpEditado;
	}
	echo json_encode($dadoExposto,JSON_FORCE_OBJECT);
?>