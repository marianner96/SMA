<?php
	function creertab ($depart, $nbagents, $f) {
		$nbtour =array();
		for ($i=$depart; $i <$depart+$nbagents+1 ; $i++) { 
			$nbtour[$i] = fgets($f).";".fgets($f).";".fgets($f);
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
	$nblignes = (3*$nbagents+1)*($nbevo+1);
	$evo = array();
	$i = 1;
	for ($j=0; $j <$nbevo+2 ; $j++) { 
		$evo[$j] = creertab($i-1, $nbagents, $f);
		$lvide = fgets($f);
		$i = (3*$i+1);
	};
	fclose($f);
	//echo json_encode($evo);
	var_dump($evo);
?>