Enter <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
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
	<!--bildet das Men??chen beim kleiner machen ab und steht f??en Teil, der nach dem verkleinern ??haupt noch angezeigt wird-->
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="Startseite.html"><img src="Logo_HFU_Mitfahrboerse.png"  border="0" alt="Logo_HFU"></a>
    </div>
	
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <!--ul's springen beim Kleiner machen in das Men??d-->
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
	
	
 


<!--Hauptteil-->
<div class="row">
	<div class="col-md-12">
		<?php
			$start = $_POST['start']; 
			$ziel = $_POST['ziel'];
			$tag = $_POST['tag'];
			$monat = $_POST['monat'];
			$jahr = $_POST['jahr'];
			$stunde = $_POST['stunde'];
			$minute = $_POST['minute'];
  
			$db = mysqli_connect('localhost', 'root', "", 'mitfahrboerse')
			or die('Fehler beim Verbinden mit MySQL-Server.');
			$sql = "SELECT * FROM fahrt WHERE Startadresse='$start' and Zieladresse = '$ziel' and Tag =$tag and Monat =$monat and Jahr = $jahr ;";
			echo $sql;
			$ergebnis = mysqli_query($db, $sql)
			or die('Fehler bei Datenbankabfrage.');

			echo "<table border='1' >";
			while ($zeile = mysqli_fetch_array( $ergebnis, MYSQL_ASSOC)) {
				echo "<tr>";
					echo "<td>". $zeile['Startadresse'] . "</td>";
					echo "<td>". $zeile['Zieladresse'] . "</td>";
					echo "<td>". $zeile['Tag']. ".". $zeile['Monat'] . "." .$zeile['Jahr'] ."</td>";
					echo "<td>". $zeile['stunde'] .":" . $zeile['minute']. "</td>";
				echo "</tr>";
   
			}
			echo "</table>";
		?>		
	</div><!--Ende col-->
</div><!--Ende row-->

	
	<!--Weisser Balken mit Schriftzug Studieren auf h&ouml;chstem Niveau-->
	<div id="balken_weiss_2">
		<div class="col-md-12"><img src="Studieren_auf_hoechstem_Niveau.jpg" id="Studieren" class="img-responsive" alt="Responsive image"></div>
	</div>
	
	<!--Footer-->
	<div id="Footer">
		<a href="faq.html" target="_blank">FAQ</a> | <a href="datenschutz.html" target="_blank">Datenschutz</a> | <a href="agb.html" target="_blank">AGB</a> | <a href="impressum.html" target="_blank">Impressum</a> | <a href="kontakt.html" target="_blank">Kontakt</a>
	</div>
 
</div><!--Ende Container div-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>file contents here
