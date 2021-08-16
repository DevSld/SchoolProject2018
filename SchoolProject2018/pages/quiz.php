<div class="ueberschrift">
	Bitte beantworten Sie ein paar Fragen
</div>
<div>
	Klicke eine Antwort pro Frage an und drücke am Ende auf den "Auflösen" Knopf.
</div>
<!-- quiz-formular -->
<div class="quiz">
	
		<form action="#" method="get" enctype="text/plain ">
			<table>
				<tr>
					<td colspan="9">
						<b>Wieviele Spiele kann man sich auf dieser Seite ansehen?</b>
					</td>				
				</tr>
				<tr>
					<!--- Variablen werden festgelegt --->
					<td>
						Eins
					</td>
					<td>
						<input name="f1" type="radio" value="1"><br>
					</td>
					<td>
						Drei
					</td>
					<td>
						<input name="f1" type="radio" value="5"><br>
					</td>
					<td>
						Zwei
					</td>
					<td>
						<input name="f1" type="radio" value="4"><br>
					</td>
					<td>
						Acht
						<input name="f1" type="radio" value="8"><br>
					</td>
					<td>
					<!--- Variablen werden übergeben und verarbeitet --->
						<?php						
							if (isset($_GET["f1"])) {
							$f1=$_GET["f1"];
								if (isset($f1) && $f1=="4" ){
						/* Ergebnis wird bekannt gegeben */
									echo "Richtig";
								}
							else {echo "Falsch";}
							}
								
						?>
					</td>
				</tr>
				<tr>
					<td colspan="9">
						<b>Wieviele Grafikkarten kann man sich auf dieser Seite ansehen?</b>
					</td>
				</tr>
				<tr>
					<!--- Variablen werden festgelegt --->
					<td>
					Zwei
					</td>
					<td>
						<input name="f2" type="radio" value="2"><br>
					</td>
					<td>
						Fünf
					</td>
					<td>
						<input name="f2" type="radio" value="5"><br>
					</td>
					<td>
						Eine
					</td>
					<td>
						<input name="f2" type="radio" value="1"><br>
					</td>
					<td>
						Drei
						<input name="f2" type="radio" value="3"><br>
					</td>
					<td>
					<!--- Variablen werden übergeben und verarbeitet --->
						<?php						
							if (isset($_GET["f2"])) {
							$f2=$_GET["f2"];
								if (isset($f2) && $f2=="2" ){
								/* Ergebnis wird bekannt gegeben */
									echo "Richtig";
								}
							else {echo "Falsch";}
							}
								
						?>
					</td>
				</tr>
				<tr>
					<td colspan="9">
						<b>Welche Grafikkarte hat einen Core Clock Speed von mehr als 1000MHz?</b>
					</td>				
				</tr>
				<tr>
					<!--- Variablen werden festgelegt --->
					<td>
						GTX 460
					</td>
					<td>
						<input name="f3" type="radio" value="1"><br>
					</td>
					<td>
						GTX 770
					</td>
					<td>
						<input name="f3" type="radio" value="2"><br>
					</td>
					<td>
						Beide  
					</td>
					<td>
						<input name="f3" type="radio" value="3"><br>
					</td>
					<td>
						Keine
						<input name="f3" type="radio" value="4"><br>
					</td>
					<td>
					<!--- Variablen werden übergeben und verarbeitet --->
						<?php						
							if (isset($_GET["f3"])) {
							$f3=$_GET["f3"];
								if (isset($f3) && $f3=="2" ){
								/* Ergebnis wird bekannt gegeben */
									echo "Richtig";
								}
							else {echo "Falsch";}
							}
								
						?>
					</td>
				</tr>
				<tr>
					<td colspan="9">
						<b>Welches der auf der Webseite vorgestellten Spiele benötigt am wenigsten RAM (Mindestanforderung) ?</b>
					</td>				
				</tr>
				<tr>
					<!--- Variablen werden festgelegt --->
					<td>
						Overwatch
					</td>
						
					<td>
						<input name="f4" type="radio" value="1"><br>
					</td>
					<td>
						StarCraft2
						<input name="f4" type="radio" value="4"><br>
					</td>
					<td>
					<!--- Variablen werden übergeben und verarbeitet --->
						<?php						
							if (isset($_GET["f4"])) {
							$f4=$_GET["f4"];
								if (isset($f4) && $f4=="4" ){
								/* Ergebnis wird bekannt gegeben */
									echo "Richtig";
								}
							else {echo "Falsch";}
							}
								
						?>
					</td>
				</tr>
			</table>
			<!-- gibt ein Signal, auf der Seite zu bleiben -->
			<input name="page" type="hidden" value="quiz">
			<!-- Knöpfe -->
			<input type="submit" value="Auflösen">
			<!-- Reset der Seite -->
			<a href="?page=quiz">
				<input type="submit" value="Reset">
			</a>
			
		</form>
		
	
</div>