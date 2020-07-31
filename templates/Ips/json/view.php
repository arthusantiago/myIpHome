<?php 
	$dadoExposto = 
	[	
		"id" => $ip->id,
		"ip"=> $ip->ip,
		"created" => $ip->created,
		"modified" => $ip->modified,
	];
	echo json_encode($dadoExposto,JSON_FORCE_OBJECT);
?>