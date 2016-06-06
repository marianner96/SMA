    <!DOCTYPE html>
    <html>
    <head>
    <title>Exemple Exec</title>
    </head>
    <body>

    <h1>Commande 'ls -l'</h1>
    <?php
    $commande = "ocaml";
    $param = array();
    $status_exec ;
    $resultat = exec($commande,$param,$status_exec);

    echo $resultat." -- ".$status_exec."<br/>";
    foreach ($param as $i) {
        echo $i;
        echo "<br/>";
    }
    ?>

    </body>
    </html>