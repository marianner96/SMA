<?php
	$nbagents = $_GET['nbagents'];
	$nbobjets = $_GET['nbobjets'];
	$nbevo = $_GET['nbevo'];
	$fichier = fopen("parametres.txt", 'a+');
	fputs($fichier, 'nbagents = '.$nbagents."\n");
	fputs($fichier, 'nbobjets = '.$nbobjets."\n");
	fputs($fichier, 'nbevo = '.$nbevo."\n");
	$commande = "ocaml systeme.ml";
	$param = array();
	$status_exec ;
	$resultat = exec($commande,$param,$status_exec);

	echo $resultat." -- ".$status_exec."<br/>";
	foreach ($param as $i) {
	    echo $i;
	    echo "<br/>";
}


	// affichage de données 

?>