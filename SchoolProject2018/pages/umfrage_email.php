<div class="ueberschrift">
	Wie finden Sie diese Seite?
</div>

<!-- umfrage/feedback -->
<div class="info">
  Deine E-Mail wurde versendet.

</div>
<!-- Übertragene Variablen werden deklariert und gesendet.-->
<?php
		$empfaenger = "manuel.saldeitis@web.de";
		$betreff = $_POST["betreff"];
		$text = $_POST["Nachricht"];
		$from = $_POST["mail"];
		 
		mail($empfaenger, $betreff, $text, $from);
?>