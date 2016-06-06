<?php
	$nbagents = $_GET['nbagents'];
	$nbobjets = $_GET['nbobjets'];
	$nbevo = $_GET['nbevo'];
	$fichier = fopen("parametres.txt", 'a+');
	fputs($fichier, 'nbagents = '.$nbagents."\n");
	fputs($fichier, 'nbobjets = '.$nbobjets."\n");
	fputs($fichier, 'nbevo = '.$nbevo."\n");
	$command = 'ocaml #use "exemple.ml";;';
	$result = shell_exec($command);
	$out = explode("\n", $result);
	var_dump($out) ;
?>