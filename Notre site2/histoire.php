<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head >
    <title>La théorie du chaos</title>
  	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta name="publisher"  content="EISTI" >
    <meta name="copyright"  content="EISTI" >
    <meta name="date-creation-yyyymmdd"  content="20160215" >
    <meta name="reply-to"  content="rentchlerm@eisti.eu, blaisclair@eisti.eu" >
    <meta name="Author" content="BLAIS Claire, RENTCHLER Marianne">
    <link rel="stylesheet" type="text/css" href="site.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->  
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
      Un peu d'histoire
    </div>

    <div class="container">
      <div class="text">
        Pour certains physiciens, le XXème siècle se résume en trois découvertes majeures : la relativité, la mécanique quantique et le chaos. La théorie 
        de la relativité faite par Einstein a fait changer les croyances des physiciens à propos de l’espace et du temps, et la mécanique quantique a démontré 
        la théorie de Newton selon laquelle tout était mesurable. La théorie du chaos a quant à elle démontré qu’on ne peut pas tout prévoir.
      </div>

      <div class="text">
        Pierre-Simon de Laplace a postulé, en 1812, que si, à un moment donné, on connaissait la position et la vitesse de tous les objets de l'Univers ainsi que les 
        forces qui s'exercent sur eux, on pourrait alors calculer leur devenir pour tous les moments à venir. Or la théorie du chaos prouve qu'il y a des processus que 
        l'on ne peut pas complètement prédire. Toutefois, un système chaotique n'est pas un système sauvage qui fait n'importe quoi n'importe comment. Sous son désordre 
        apparent, se cache un ordre très strict : il obéit aux principes physiques qui s'appliquent à tous les autres systèmes. Mais il est d'une part impossible de 
        prévoir son comportement sur le long terme et, d'autre part, de savoir quel était précisément son état dans le passé. On parle pour cela de sensibilité aux 
        conditions initiales ou aussi appelé «l'effet papillon».
      </div>

      <div class="text">
    	  C'est Edward Lorenz, professeur de mathématiques au MIT (Massachusetts Institut of Technologie), qui est le père officiel de la théorie du chaos. Il l'a 
        découverte à la suite de calculs qu'il destinait à prévoir les phénomènes météorologiques. En effet, ces prévisions nécessitent énormément de calculs (dus 
        aux lois de Newton, aux trajectoires des corps...) et donc d'équations différentielles très complexes car il y a énormément de variables qui entrent en jeu.
	    </div>
      <div class="text">
    	  Pour simplifier le plus possible les équations, Lorenz a obtenu un système de trois équations à trois inconnues, que l'on verra plus tard, cependant les calculs 
        restaient impossibles à faire à la main. Lorenz utilisa un des premiers ordinateurs : le royal McBee LGP-300.
  	  </div>
      <div class="text">
    	  Lorsque l'ordinateur imprima les résultats des équations, Lorenz décida de refaire les calculs mais au lieu de garder six chiffres après la virgule, il décida 
        de n'en garder que trois pour gagner du temps. Pour lui et pour beaucoup des mathématiciens de son époque, une faible variation dans les variables à la base 
        d'un calcul aussi complexe aurait une incidence du même ordre de grandeur sur le résultat final. Lorsqu'il eut les deux résultats et qu'il les représenta 
        graphiquement à l'aide de son  ordinateur, il vit que les résultats étaient totalement différents. En effet, au début les résultats se ressemblent mais après 
        ils divergent très vite (le premier pouvait représenter une tempête et l'autre une sécheresse). La divergence des résultats ne pouvait s'expliquer que par la 
        présence de termes non linéaires dans les équations du modèle. Lorenz venait de découvrir que dans des systèmes non linéaires d'infimes différences dans les 
        conditions initiales engendraient à la longue des systèmes totalement différents. Il comprit alors qu'il ne serait jamais possible de prédire la météo à moyen 
        ou à long terme, et cela a remis en causes les certitudes de la physique de l'époque.
      </div>
      <div class="text">
      	Grâce à la courbe d'évolution des deux résultats, il remarqua que, si les premières valeurs se ressemblaient, ensuite les courbes divergeaient. Cependant ce 
        n'était pas une divergence quelconque, cela ressemblait à des ailes de papillons déployées. Il eu beau refaire les équations de nombreuses fois, il eu toujours 
        le même résultat. Il décide d'appeler sa découverte les attracteurs étranges.
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
  </body>
</html>