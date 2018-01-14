<?php
		header("Content-type: application/json");
		$json_array = array (
		'Ime' => 'Bojana',
		'Prezime' => 'Tomasevic Drazic',
		'Index' => '3174'
		
		);
		echo json_encode($json_array);
	
?>