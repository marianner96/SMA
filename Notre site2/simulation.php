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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="site.css">
    <link rel="stylesheet" href="assets/css/main.css" />  
    <meta name="viewport" content="width=device-width, initial-scale=1" /> 
    <script src="assets/js/sma.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <title>La théorie du chaos</title>
  </head>
  
  <body class="no-sidebar">

    <div id="header-wrapper">
      <div id="header" class="container">
            <h1 id="logo" style="font-size:60px;">Théorie du chaos</h1>
            
            <?php include("menu.php"); ?>
      </div>
    </div>

    <div class="container" id="explication">
      Vous allez maintenant pouvoir voir comment marche notre système multi-agents. Il suffit de choisir le nombre d'agents, d'évolutions et d'objets
       et laissez le programme faire le reste ! 
    </div>
    <img src="images/chaos.png" alt="chaos" id="chaos"></img>

    <div id="form">
      <form name="simulation" class="form-inline" id="val">
        <div class="form-group">
          <label>
            Nombres d'agents
            <input type="number" name="nbagents" min="1" max="100">
          </label>
        </div>

        <div class="form-group">
          <label>
            Nombres d'objets
            <input type="number" name="nbobjets" min="1" max="100">
          </label>
        </div>

        <div class="form-group">
          <label>
            Nombres d'évolution
            <input type="number" name="nbevo" min="1" max="100">
          </label>
        </div>

        <input type="button" name="ok" value="Valider" onclick="lancer()">
      </form>
    </div>
    <div id="graphique"></div>


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