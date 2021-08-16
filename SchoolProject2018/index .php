<html>
	<head>
		<title>Computer-Info</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"  >
	</head>
	
	<body>

<!-- ------------------------ Hauptrahmen ------------------------ -->

<!--  Diese Seite wurde unter Nutzung von Apache in Xampp erstellt -->	

<!-- made by Manuel Saldeitis -->
		<div class="mainframe">
			<!--Banner-->
			<a href="?page=startseite">
				<div class="topline"	>
					<h1>Computer-Info</h1>
				</div>
			</a>
			<table class="navbar">
				<tr>
					<td class="tdwidth">
					<a href="?page=startseite">Startseite</a>
					</td>
					<td class="tdwidth">
						<a href="?page=spiele">Spiele</a>
					</td>
					<td class="tdwidth">
						<a href="?page=grafikkarten">Grafikkarten</a>
					</td>
					<td class="tdwidth">
						<a href="?page=quiz">Quiz</a>
					</td>
					<td class="tdwidth">
						<a href="?page=umfrage">Feedback</a>
					</td>
					<td class="tdwidth">
						<a href="?page=impressum">Impressum</a>
					</td>
					
				</tr>
			</table>
		</div>
<!-- -------------------------- Webseite -------------------------- -->		
		<div class="website">
			<?php
					//deklarattion
				$p="startseite";
				//Programm
				if (isset($_GET['page'])){
					
				$p=$_GET["page"];
				}
				
				if ($p=="startseite") {
					echo"Du befindest dich auf der Startseite.";
				}
				elseif ($p=="spiele") {
					echo"Du befindest dich bei den Spielen.";
				}
				elseif ($p=="grafikkarten") {
					echo"Du befindest dich bei den Grafikkarten.";
				}
				elseif ($p=="quiz") {
					echo"Du befindest dich bei dem Quiz.";
				}
				elseif ($p=="umfrage") {
					echo"Hier kannst du ein Feedback zur Seite geben.";
				}
				elseif ($p=="impressum") {
					echo"Du befindest dich bei dem Impressum.";
				}
				elseif ($p=="datenschutz") {
					echo"Du befindest dich bei dem Datenschutz.";
				}
				
			?>
			
			<?php 
				//deklarattion
				$p="startseite";
				//Programm
				if (isset($_GET['page'])){
					
				$p=$_GET["page"];
				}
				
				if ($p=="startseite") {
					include "pages/startseite.php";
				}
				elseif ($p=="spiele") {
					include "pages/spiele.php";					
				}
				elseif ($p=="grafikkarten") {
					include "pages/grafikkarten.php";
				}
				elseif ($p=="quiz") {
					include "pages/quiz.php";
				}
				elseif ($p=="umfrage") {
					include "pages/umfrage.php";
				}
				elseif ($p=="impressum") {
					include "pages/impressum.php";
				}
				elseif ($p=="datenschutz") {
					include "pages/datenschutz.php";					
				}
				elseif ($p=="overwatch") {
					include "pages/spiele/overwatch.php";					
				}
				elseif ($p=="rainbow") {
					include "pages/spiele/rainbow.php";					
				}
				elseif ($p=="splintercell") {
					include "pages/spiele/splintercell.php";					
				}
				elseif ($p=="starcraft2") {
					include "pages/spiele/starcraft2.php";					
				}
				elseif ($p=="gtx770") {
					include "pages/grafikkarten/gtx770.php";					
				}
				elseif ($p=="gtx460") {
					include "pages/grafikkarten/gtx460.php";					
				}
				elseif ($p=="umfrage_email") {
					include "pages/umfrage_email.php";
				}
				else echo "<center><h1>Error404</h1> Diese Seite ist nicht verfügbar</center>";
			?>
		</div>	
		<center> <a href="?page=datenschutz" >Datenschutz</a> </center>
	</body>
</html>