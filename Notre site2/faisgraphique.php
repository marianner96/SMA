<?php
	$nbagents = $_GET['nbagents'];
	$nbobjets = $_GET['nbobjets'];
	$nbevo = $_GET['nbevo'];
	$fichier = fopen("parametres.txt", 'w+');
	fputs($fichier, $nbagents.",".$nbobjets.",".$nbevo);
	
	shell_exec("ocaml systeme.ml");

	//echo exec($commande);
	// affichage de données 

?>