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
       Les équations de Lorenz
    </div>


    <div class="container">


      <div class="text">
        Comme nous l'avons vu précédemment, Lorenz s'est servi d'équations simplifiées pour découvrir la théorie du chaos. Les équations qu'il a utilisées (avant de 
        les simplifier) sont les équations aux dérivées partielles couplées de Navier-Stokes. Elles représentent mathématiquement le couplage de l'atmosphère avec 
        l'océan. Son but était d'étudier le phénomène de convection de Rayleigh-Bénard.
      </div>


      <div class="text">
        Nous allons tout d'abord voir les équations aux dérivées partielles couplées de Navier-Stokes appliquées au cas général. Ces équations servent à décrire le 
        mouvement des fluides, elles permettent de prédire la météo, simuler les océans, optimiser les ailes des avions et même améliorer le réalisme des jeux vidéos.
        Les équation de Navier-Stokes, établient au XIXème siècle par le français Navier et le britannique Stokes, sotn des équations qui permettent de décrire le 
        champ de vitesse d’un fluide. Plus précisément, il s’agit d’équations différentielles dont le champ de vitesse est l’inconnue.
      </div>


      <div class="text">
        Il existe plusieurs formes d'éqations de Navoer-Stokes, elles dépendent de la notation utilisée. Pour notre cas, Lorenz a utiliser la formulation différentille 
        générale de ces équations :
        <ul class="liste">
          <li> \( \frac{\partial\rho}{\partial t}+\overrightarrow{\nabla} \cdot (\rho \overrightarrow{v}) = 0 \) est l'équation de continuité </li>
          <li> \( \frac{\partial (\rho \overrightarrow{v})}{\partial t} + \overrightarrow{\nabla} \cdot (\rho \overrightarrow{v} \otimes 
            \overrightarrow{v})= -\overrightarrow{\nabla}p + \overrightarrow{\nabla} \cdot \bar{\bar{\tau}} + \rho \overrightarrow{f} \) est l'équation de bilan de 
            la quantité de mouvement</li>
          <li> \( \frac{\partial (\rho e)}{\partial t} + \overrightarrow{\nabla} \cdot [(\rho e +p)\overrightarrow{v}] = \overrightarrow{\nabla} \cdot (\bar{\bar{\tau}} 
            \cdot \overrightarrow{v}) + \rho \overrightarrow{f} \cdot \overrightarrow{v} -  \overrightarrow{\nabla} \cdot (\overrightarrow{\dot{q}}) + r \) est 
            l'équation de bilan de l'énergie</li>
        </ul>
      </div>

      <div class="text">
        Lorenz a appliqué ces équations au couplage de l'atmosphère avec l'océan. Les propriétés thermodynamiques très différentes de l’atmosphère et de l’océan 
        (capacité calorifique, en particulier) introduisent une forte dissymétrie dans la réponse d’un milieu au forçage de l’autre : en première approximation, on 
        étudie la réponse de l’océan au forçage atmosphérique (éventuellement de forte intensité, mais rapidement variable dans le temps), et on néglige l’impact des 
        variations horizontales et temporelles de l’océan superficiel sur l’atmosphère. C’est pourtant ce couplage dans son ensemble, incluant la modification de l’état 
        de la surface de la mer, qu’il faut comprendre et représenter dans des modèles numériques.
      </div>
      <div class="text">
        Cependant, ces équations étaient trop compliquées à résoudre pour son époque. Lorenz a donc cherché à simplifier ces équations au maximum. Il a étudier une 
        situation mathématique particulière : le phénomène de convection de Rayleigh-Bénard. Il a alors abouti à un système différentiel de 3 équations à 3 inconnues,
        beaucoup plus simple à calculer que les autres.
      </div>

      <div class="text">
        Ces équations sont donc :
        \(  \left\{\begin{array}{rl}
            \frac{\partial x}{\partial t} &= Pr (y-x)\\
            \frac{\partial y}{\partial t} &= rx -xz -y\\
            \frac{\partial z}{\partial t} &= xy - bz
            \end{array}\right. \)
        <br>
        avec : 
        <ul class="liste">
          <li> Pr est le nombre de Prandtl. Il caractérise la viscosité et la conductivité thermique du fluide. En général, on pose \( Pr=10 \) </li>
          <li> r est le nombre Rayleigh réduit, qui représente la différence de température entre le bas et le haut du réservoir. En général, on pose
          \( r=28 \) </li>
          <li> b est le rapport entre hauteur et largeur du système de convection. En général, on pose \( r=\frac{8}{3} \) </li>
        </ul>
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