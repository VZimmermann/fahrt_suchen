Enter fi<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HFU Mitfahrgelegenheit</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="expires" content="0">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
    <meta name="author" content="Julia Klimesch, Lisa Wojtynek,Vanessa Zimmermann" />
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
	<meta name="keywords" content="HFU, Hochschule Furtwangen, Mitfahrgelegenheit, Furtwangen, Hochschule">
	<meta name="description" content="Auf dieser Seite finden Sie die HFU Mitfahrgelegenheit. Konzipiert nur f&uuml;r Studenten und Angestellte der Hochschule Furtwangen.">
	  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mitfahrgelegenheit.css" />

  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>

<div class="container">
 <nav class="navbar navbar-default" style="background-color:white;border:none;" role="navigation">
  <div class="container-fluid">
  
    <div class="navbar-header">
	<!--bildet das Men𺥩chen beim kleiner machen ab und steht f𲠤en Teil, der nach dem verkleinern 𢥲haupt noch angezeigt wird-->
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="Startseite.html"><img src="Logo_HFU_Mitfahrboerse.png"  border="0" alt="Logo_HFU"></a>
    </div>
	
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <!--ul's springen beim Kleiner machen in das Men𢩬d-->
	  <ul class="nav navbar-nav">
        <li>
          <a href="fahrt_suchen.html">Fahrt suchen</a>
        </li>
        <li>
          <a href="fahrt_anbieten.html">Fahrt anbieten</a>
        </li>
			
      </ul>
      <ul class="nav navbar-nav navbar-right">
			<li><a href="nachrichten.html" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Nachrichten </a></li>
			<li><a href="kalender.html" ><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Kalender</a></li>
			<li><a href="profil.html" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span> Men&uuml;<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="meine_angebote.html">Meine Angebote</a></li>
					<li><a href="meine_anfragen.html">Meine Anfragen</a></li>
					<li><a href="gemerkte_fahrten.html">gemerkte Fahrten</a></li>
					<li class="divider"></li>
					<li><a href="#">abmelden</a></li>
				</ul>
			</li>

      </ul>
    </nav>
 </div>

</nav>

<!--gr&uuml;ner Balken unter der Navigation-->
  <div id="Footer" ></div>
	
	
 


	<!--Header-->
<div class="row">
	<div class="col-md-12">
<?php
  $start = $_POST['start']; 
  $zwischenziel1 = $_POST['zwischenziel1'];
  $zwischenziel2 = $_POST['zwischenziel2'];
  $zwischenziel3 = $_POST['zwischenziel3'];
  $ziel = $_POST['ziel'];
  $monat = $_POST['monat'];
  $jahr = $_POST['jahr'];
  $tag = $_POST['tag'];
  $minute=$_POST['minute'];
  $stunde=$_POST['stunde'];
  $preis = $_POST['kennzeichen'];
  $kennzeichen = $_POST['kennzeichen'];
  $fahrt_id = $_POST['fahrt_id'];
  $person_id = $_POST['person_id'];
	
  $db = mysqli_connect('localhost', 'root', "", 'mitfahrboerse') or die('Fehler beim Verbinden mit MySQL-Server.');
 
  mysqli_set_charset($db, "utf8");//setzt den Standardzeichesatz

  $sql = "INSERT INTO fahrt " .
    "VALUES ('$fahrt_id', '$person_id', '$start', '$ziel',".
	"'$kennzeichen','$zwischenziel1', '$zwischenziel2', '$zwischenziel3',".
	"'$preis', '$tag', '$monat','$jahr','$stunde' ,'$minute');";
  echo $sql;
  echo "<br>";

  
  if ($start==null)	{
	 echo "<p style='color:red;font-size:1.5em'>Bitte geben Sie eine Startadresse ein</p>";
	 echo "<button onclick='history.back()' id='zurueck' name='zurueck' class='btn btn-lg btn-primary' style='background-color:#83B81A;border:none'>zur&uumlck;</button>";
  }
  if($ziel==null) {
	echo "<p style='color:red;font-size:1.5em'>Bitte geben Sie eine Zieladresse ein</p>";
	echo "<button onclick='history.back()' id='zurueck' name='zurueck' class='btn btn-lg btn-primary' style='background-color:#83B81A;border:none'>zur&uumlck;</button>";
  }
 if($ziel!=null && $start!=null && $tag!=null && $monat!=null && $jahr!=null){
   
  $ergebnis = mysqli_query($db, $sql)//sendet die Abfrage
  or die('Fehler bei Datenbankabfrage.');
	
  if ($ergebnis!=null){
	echo "<p style='color:green;font-size:1.5em'>Daten wurden erfolgreich gespeichert</p>";
	echo "<button onclick='history.back()' id='zurueck' name='zurueck' class='btn btn-lg btn-primary' style='background-color:#83B81A;border:none'>&auml;ndern</button>";
  }
}


?>		
  		
	</div><!--Ende row-->
</div><!--Ende row-->

<div class="row">
	<!--Weisser Balken mit Schriftzug Studieren auf h&ouml;chstem Niveau-->
	<div id="balken_weiss_2">
		<div class="col-md-12"><img src="Studieren_auf_hoechstem_Niveau.jpg" id="Studieren" class="img-responsive" alt="Responsive image"></div>
	</div>
	
	<!--Footer-->
	<div id="Footer">
		<a href="faq.html" target="_blank">FAQ</a> | <a href="datenschutz.html" target="_blank">Datenschutz</a> | <a href="agb.html" target="_blank">AGB</a> | <a href="impressum.html" target="_blank">Impressum</a> | <a href="kontakt.html" target="_blank">Kontakt</a>
	</div>
 </div>
</div><!--Ende Container div-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>le contents here
