<?php
	$nbagents = $_GET['nbagents'];
	$nbobjets = $_GET['nbobjets'];
	$nbevo = $_GET['nbevo'];
	$fichier = fopen("parametres.txt", 'a+');
	fputs($fichier, 'nbagents = '.$nbagents."\n");
	fputs($fichier, 'nbobjets = '.$nbobjets."\n");
	fputs($fichier, 'nbevo = '.$nbevo."\n");
	
	shell_exec("ocaml systeme.ml");

	//echo exec($commande);
	// affichage de données 

?>