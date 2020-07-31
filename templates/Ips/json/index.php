<?php 
	
	$dadosExpostos = [];
	foreach ($dados as $ip) {
		$dadosExpostos[] = 
		[	
			"id" => $ip->id,
			"ip"=> $ip->ip,
			"created" => $ip->created,
			"modified" => $ip->modified,
		];
	}
	echo json_encode($dadosExpostos,JSON_FORCE_OBJECT);
?>