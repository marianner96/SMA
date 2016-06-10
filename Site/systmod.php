<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head >
  	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="publisher"  content="EISTI" >
    <meta name="copyright"  content="EISTI" >
    <meta name="date-creation-yyyymmdd"  content="20160215" >
    <meta name="reply-to"  content="rentchlerm@eisti.eu, blaisclair@eisti.eu" >
    <meta name="description"  content="paramètres de boutons" >
    <meta name="robots"  content="index,follow" >
    <meta name="Author" content="BLAIS Claire, RENTCHLER Marianne">
    <link rel="stylesheet" href="assets/css/main.css" />  
    <link rel="stylesheet" type="text/css" href="site.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />   
    <script type="text/javascript" async
  src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-MML-AM_CHTML">
</script>
    <title>La théorie du chaos</title>
  </head>

  <body class="no-sidebar">

    <div id="header-wrapper">
      <div id="header" class="container">
            <h1 id="logo" style="font-size:60px;">Théorie du chaos</h1>
            
            <?php include("menu.php"); ?>
      </div>
    </div>


    <img src="images/lorenz.jpg" alt="Une photo"></img>


    <div id="headr">
       Les modèles de système dynamique
    </div>


    <div class="container">


      <div class="text">
       On peut différencier trois sortes de systèmes dynamiques : les systèmes aléatoires (aussi appelés systèmes stochastiques), les systèmes déterministes et les systèmes chaotiques.
      </div>


      <div class="text">
        <h1>Modèle déterministe</h1>
        Les systèmes déterministes sont des systèmes régis par des lois mathématiques bien connues, on peut donc prévoir exactement l'évolution de ces systèmes dans le temps.
      </div>


      <div class="text">
       <h1>Modèle aléatoire</h1>
       Les systèmes aléatoires, aussi appelé modèle stochastique, évoluent, comme leur nom l'indique, au hasard dans tout l'espace sans qu'aucune équation ne les régisse, sans qu'aucune prévision exacte soit possible dans le temps.
      </div>

      <div class="text">
       <h1>Modèle chaotique</h1>
       Les systèmes chaotiques ont un comportement infiniment complexe. Ils sont irrésistiblement attirés par une figure géométrique de structure infiniment complexe sur laquelle ils semblent errer au hasard, mais sans jamais la quitter, ni repasser deux fois par le même point. Les attracteurs qui caractérisent ces systèmes, incluent à la fois des lois déterministes et des lois aléatoires, ce qui rend impossible toute prévision à long terme.
      </div>

      <div class="text">
        <h3>Les systèmes dynamiques et la théorie du chaos</h3>
        Des systèmes dynamiques non linéaires, ou simplement linéaires par morceau, peuvent faire preuve de comportements complètement imprévisibles, qui peuvent même sembler aléatoires, 
        alors qu'il sont régis par des lois déterminées. Cette imprédictibilité est appelée chaos. 
        On appelle la branche des systèmes dynamiques qui s'attache à définir clairement et à étudier le chaos : la théorie du chaos.</br>
        Cette branche des mathématiques décrit qualitativement les comportements à long terme des systèmes dynamiques. Dans ce cadre, on ne met pas l'accent sur la recherche de solutions 
        précises aux équations du système dynamique (ce qui, de toute façon, est souvent sans espoir), mais plutôt sur la réponse à des questions comme « Le système convergera-t-il vers un état stationnaire à long terme, 
        et dans ce cas, quels sont les états stationnaires possibles ? » ou « Le comportement à long terme du système dépend-t-il des conditions initiales ? ».</br>
        Un objectif important est la description des points fixes, ou états stationnaires, du système : ce sont les valeurs de la variable pour lesquelles elle n'évolue plus avec le temps. 
        Certains de ces points fixes sont attractifs : ce qui veut dire que si le système parvient à leur voisinage, il va converger vers le point fixe.

      </div>

      <div classs="text" id="pointfixe">
        <h1>Les points fixes :</h1>
        <ul style="list-style-type:disc"  >
          <li>stable si  \(\forall \epsilon>0 \exists \delta\) tel que \( \mid X-X(0) \mid <\delta \Rightarrow sup_t \mid X-X(t)\mid <\epsilon \)</li>
          <li>asymptotiquement stable, ou attractif, s'il existe un \(\delta>0\) tel que \(\mid X-X(0) \mid <\delta \Rightarrow lim_{t->\infty} X(t)=X\)</li>
          <li>instable ou répulsif s'il n'est pas stable</li>
        </ul>
        Cependant, dans un système dynamique chaotique, nous avons vu que les équations qui régissent le système ne sont pas linéaires. Il faut donc linéarise l'application
        f$ au voisinage du point fixe.</br>
        Si on prend \(X\) une perturbation autour d'un point fixe. Le développement de \(f\) au premier ordre au voisinage du point fixe s'écrit, compte tenu de \(f(0)=(0,0)^t\):
        \(f(X) = F(0)X+ o (\mid X \mid ^{2})\) où \( F(0)= \begin{pmatrix} 0 & 1 \\ -1 & \epsilon \end{pmatrix} \) est la matrice jacobienne de \( f\) en \((0,0)^t \).
      </div>

      <div class="text">
        <h1>Attracteur étrange</h1>
        Il est possible de quantifier l'ordre du chaos en déterminant la dimension de l'attracteur étrange, c'est à dire sa capacité à remplir une région donnée de 
        l'espace phase. Une méthode consiste à introduire un espace des phases avec un petit nombre p de variables: si la dimension p de l'espace de construction est 
        inférieure à celle de l'attracteur, on obtient une projection de la trajectoire. On augmente alors la dimension de l'espace de construction en ajoutant des 
        variables. Si la dimension calculée du diagramme finit par saturer, c'est la signature d'un chaos et la valeur de saturation est la dimension fractale de 
        l'attracteur. Si au contraire cette dimension croît avec la dimension de l'espace de construction, c'est que le système est aléatoire.</br>
        Les propriétés du chaos ne dépendent pas du système où il apparaît. Les attracteurs étranges, fragiles structures entre l'ordre et le désordre, et les nombres 
        de Feigenbaum (deux nombres réels exprimant des rapports apparaissant dans les diagrammes de bifurcation de la théorie du chaos) sont toujours présents. On parle de 
        structure universelle.</br>
        Le comportement chaotique de systèmes complexes n'est pas une surprise, on sait depuis longtemps que la météorologie comprend des comportements complexes et même chaotiques. 
        La véritable surprise est plutôt la découverte de chaos dans des systèmes presque triviaux. Ainsi, la fonction logistique est un simple polynôme du second degré, pourtant 
        le comportement de ses solutions est chaotique.</br>
        Chaque condition initiale détermine entièrement l'évolution future car il n'y a pas de hasard : le système est déterministe. Cependant, deux conditions initiales très 
        proches peuvent avoir des évolutions complètement différentes. L'évolution du système devient alors imprévisible car une petite erreur de mesure ou un arrondi à la 15ème 
        décimale conduisent à des résultats complètement faux au bout d'un certain temps : c'est le chaos déterministe.</br>
        Le météorologue Lorenz a été le premier à réaliser qu'il existe un chaos déterministe. En météo, cela a pour conséquence qu'il sera toujours impossible de prévoir le 
        temps du mois prochain. 

      </div>
    </div>
    <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.dropotron.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/skel-viewport.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>

  </html>
</body>