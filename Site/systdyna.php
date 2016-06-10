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
    <link rel="stylesheet" type="text/css" href="site.css"> 
    <link rel="stylesheet" href="assets/css/main.css" />  
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
       Présentation des systèmes dynamiques
    </div>


    <div class="container">


      <div class="text">
        Un système dynamique est un système physique qui évolue, il peut évoluer dans le temps ou par rapport à une autre variable suivant l'espace de phase considéré. La trajectoire d'un objet en mouvement dans le temps est donc un système dynamique, ainsi que le nombre d'individu d'une population quelconque dans le temps, ou encore les valeurs d'une fonction (par exemple : y = 2x) par rapport à la valeur de x.</br>
        Quelque soit sa nature (topologique, différentiable, mesurable), un système dynamique est la donnée conjointe : d'un espace des phases (une structure (espace mesurable, variété différentielle, ...) correspondant à l'ensemble de tous les états possibles du système considéré) et d'un temps (discret ou continu).
      </div>


      <div class="text">
        <h1>Espace des phases</h1>
        L'espace des phases en mécanique analytique est un espace à 2 dimensions permettant d'interpréter géométriquement le mouvement d'un système mécanique décrit par des équations différentielles du second ordre par rapport au temps.</br>
        Cet espace n'a pas la structure d'un espace vectoriel. Il est étroitement associé aux équations de Hamilton et donc au formalisme Hamiltonien. Cette représentation permet de distinguer un comportement chaotique d'un comportement aléatoire.</br>
        Si le mouvement est aléatoire, les points du système remplissent l'espace des phases au hasard: aucune structure n'apparaît.
        Quand le mouvement est chaotique, les points paraissent à première vue aléatoires. Néanmoins, quand on observe le système suffisamment longtemps, on constate que les points dessinent une forme particulière, ces attracteurs sont qualifiés d'étranges : ils sont la signature du chaos.
      </div>


      <div class="text">
       <h1>Les lois d'évolution</h1>
       Chaque système dynamique est régis par des lois d'évolution. Parmis celle-ci on compte :
       <p class="loi">Lois statiques</p>
        Intégralité des parties d'un système technique : Un système technique doit avoir un élément moteur, un organe de transmission, un organe de travail et un organe de contrôle.</br>
        Conductibilité énergétique du système : Libre passage de l'énergie entre les différents organes.</br>
        Coordination des rythmes des parties : Coordination en fréquence, vibration, périodicité.Coordination des rythmes des parties : Coordination en fréquence, vibration, périodicité.
        <p class="loi">Lois cinématiques</p>
        Augmentation du niveau d’idéalité : Le système tend vers un idéal dont le volume, le poids, la surface, le coût tendent vers zéro à iso-performance.</br>
        Développement inégal des entités : Le développement inégal des sous-systèmes conduit à des contradictions.</br>
        Transition vers le super système : Après avoir épuisé les possibilités d'innovation de l'objet, celles-ci apparaissent au niveau du système.
        <p class="loi">Lois dynamiques</p>
        Transition vers le microniveau : Passage du macro au microniveau.</br>
        Augmentation de la dynamisation et du niveau de contrôlabilité : tendance à augmenter les organes de contrôle.
      </div>

      <div class="text">
        Des systèmes dynamiques non linéaires, ou simplement linéaires par morceau, peuvent faire preuve de comportements complètement imprévisibles, qui peuvent même sembler aléatoires, 
        alors qu'il sont régis par des lois déterminées. Cette imprédictibilité est appelée chaos. 
        On appelle la branche des systèmes dynamiques qui s'attache à définir clairement et à étudier le chaos : la théorie du chaos.</br>
        Cette branche des mathématiques décrit qualitativement les comportements à long terme des systèmes dynamiques. Dans ce cadre, on ne met pas l'accent sur la recherche de solutions 
        précises aux équations du système dynamique (ce qui, de toute façon, est souvent sans espoir), mais plutôt sur la réponse à des questions comme « Le système convergera-t-il vers un état stationnaire à long terme, 
        et dans ce cas, quels sont les états stationnaires possibles ? » ou « Le comportement à long terme du système dépend-t-il des conditions initiales ? ».</br>
        Un objectif important est la description des points fixes, ou états stationnaires, du système : ce sont les valeurs de la variable pour lesquelles elle n'évolue plus avec le temps. 
        Certains de ces points fixes sont attractifs : ce qui veut dire que si le système parvient à leur voisinage, il va converger vers le point fixe.

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