<?php
	function creertab ($depart, $nbagents, $f) {
		$nbtour =array();
		$debut = $depart%10;
		$taille = ($depart+$nbagents)%10;
		for ($i=$debut; $i <$taille ; $i++) { 
			$pc = fgets($f);
			$dc = fgets($f);
			$tc = fgets($f);
			$nbtour[$i] = $pc.";".$dc.";".$tc;
		};
		return $nbtour;
	}

	$nbagents = $_GET['nbagents'];
	$nbobjets = $_GET['nbobjets'];
	$nbevo = $_GET['nbevo'];
	$fichier = fopen("parametres.txt", 'w+');
	fputs($fichier, $nbagents.",".$nbobjets.",".$nbevo);
	fclose($fichier);	
	shell_exec("ocaml systeme.ml");
	$f = fopen('resultats.txt', 'r');
	$evo = array();
	$i = 1;
	for ($j=0; $j <$nbevo+1 ; $j++) { 
		$evo[$j] = creertab($i-1, $nbagents, $f);
		$lvide = fgets($f);
		$i = $i + ($nbagents*3)+1;
	};
	fclose($f);
	//echo json_encode($evo);
	var_dump($evo);
?>