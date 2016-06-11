<?php
	/*
	fonction creertab
	Entree : $depart = ligne de depart, $nbagents = le nombre d'agents, $f le fichier ou il faut lire
	Sortie : renvoie un tableau associatif avec les trois coordonnées de chaque agent pour une evolution
	la fonction rtrim sert à enlever le '\n' qui apparait lors du passage en json
	*/
	function creertab ($depart, $nbagents, $f) {
		$nbtour =array();
		for ($i=$depart; $i <$nbagents ; $i++) { 
			$pc = rtrim(fgets($f));
			$dc = rtrim(fgets($f));
			$tc = rtrim(fgets($f));
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
		$evo[$j] = creertab(0, $nbagents, $f);
		$lvide = fgets($f);
		$i = $i + ($nbagents*3)+1;
	};
	fclose($f);
	echo json_encode($evo);
	//var_dump($evo);
?>