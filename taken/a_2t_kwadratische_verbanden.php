<?php 
	//defineer titel
	$taaknaam ="Kwadratische verbanden (basis)";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Formules met kwadraten I',
      '#theorieB' => 'Formules met kwadraten II',
      '#theorieC' => 'Parabolen',
      '#theorieD' => 'Formule kwadratisch verband',
      '#theorieE' => 'Coördinaten van top van parabool',      
      '#theorieF' => 'Werkschema',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 2 | <?php echo $taaknaam; ?></title>

<div class="taakinhoud">

<!--theorie Inleiding-->
<div class="tekstblok theorie analyse">
	<h3>Inhoud</h3>
	<p>
		In de vorige analyse blokken hebben jullie geleerd over lineaire formules.<br>
		In deze taak leer je wat kwadratische verbanden en hoe de grafiek van een kwadratisch verband er uit ziet.
	</p>
	<!-- 	Je gaat zelf parabolen tekenen. -->
</div>


<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Blokjes</h3>
	<p>
		Hieronder staat een reeks van figuren met blokjes. Bij elk figuur is het aantal blokjes anders.
	</p>
		<img src="../afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/blokjes_1.png" alt="blokjes_1" />
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>3</TD><TD>5</TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
				</TABLE>
		</li>
		<li>
			Hoeveel blokjes komen er elke keer bij? Geef dit met pijlen aan in de tabel.
		</li>
		<li>
			Hoeveel blokjes heeft figuur nummer `0`?
		</li>
		<li>
			Neem over en vul in:<br>
			Startgetal = ...<br>
			Hellingsgetal = ...
		</li>
		<li>
			Maak een formule bij deze situatie waarmee je het <em>aantal blokjes</em> kunt uitrekenen als je het nummer van de figuur weet.
		</li>
	</ol>
	<p>
		Door de woorden in de formules <b>af te korten</b> met <b>letters</b>, worden ze korter. Meestal nemen we hiervoor de eerste letter van het woord. <em>Aantal blokjes</em> korten we af tot <em>b</em> 
		en <em>nummer figuur</em> tot <em>n</em>.
	</p>
	<ol start="6">
		<li>
				Bereken <em>b</em>  als <em>n</em> =`9`  (Dus bereken het aantal sterren van figuur met nummer `9`.)
			</li>
		<li>
				Hoe groot moet <em>n</em> zijn als <em>b</em>=27 ? Maak hiervoor de twee pijlenkettingen.
			</li>  
	</ol>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
					<ol>
						<li>
							<table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
									
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">3</td>
								<td colspan="2">5</td>
								<td colspan="2">7</td>
								<td colspan="2">9</td>
								<td colspan="2">11</td>
								<td colspan="2">13</td>
									
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								
								<th></th>
							</tr>
						</tfoot>	
						</table>
						</li>
						<li>
							Steeds `2` erbij.
						</li>
						<li>
							`3-2=1` dus figuur nummer `0` heeft `1` blokje.
						</li>
						<li>
							Neem over en vul in:<br>
							Startgetal `= 1` <br>
							Hellingsgetal `= 2`
						</li>
						<li>
							<em>aantal blokjes</em> `= 1 + 2 *` <em>nummer figuur</em>
						</li>
						<li>
							<em>a</em> `= 1 + 2 *` <em>n</em><br>
							<em>a</em> `= 1 + 2 * 9`<br>
							<em>a</em> `= 1 + 18` <br>
							<em>a</em> `= 19`
						</li>
						<li>
							<img src="../afbeeldingen/analyse_leerjaar_2/pijlenketting_b_is_27.png" alt="pijlenketting_b_is_27" width="" height="" />
						</li>
							
					</ol>
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Telefoonabonnement</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Voor een telefoonabonnement betaal je abonnementskosten en belkosten. 
				Stel je betaalt € `10,00` abonnementskosten per maand en nog € `0,20` per minuut.
				Van de kosten per maand kun je een formule maken.
			</p>
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/analyse_leerjaar_2/abonnement.png" alt="abonnement" width="" height="" />
		</div>
	</div>
	<ol>
		<li>
			Hoeveel moet je betalen als je helemaal niet hebt gebeld?
		</li>
		<li>
			Hoeveel moet je betalen als je 10 minuten hebt gebeld?
		</li>
		<li>
			Neem over en vul in:<br>
			`K=... * a + ... `<br>
			Met `K` voor totale kosten per maand en `a` voor aantal belminuten.
		</li>
		<li>
			Neem de tabel over en vul hem in:<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>a</em></td>
							<td colspan="2">0</td>
							<td colspan="2">50</td>	
						</tr>
						<tr>
							<td><em>K</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>
		<li>
			Teken de grafiek van <em>K</em> in een passend assenstelsel. Gebruik daarvoor de tabel.
		</li>
		<li>
			In december krijg ik een rekening van 17 euro. Onderzoek met behulp 
			van de grafiek hoe lang ik heb gebeld. Controleer je antwoord met de formule.
		</li>
		<li>
			In december krijg Femke een rekening van € 15,35. <br>
			Stel de vergelijking op waarmee Femke kan berekenen hoeveel minuten ze gebeld heeft in december.
		</li>
		<li>
			Los de vergelijking op.
		</li>
		<li>
			Hoeveel  heeft Femke gebeld in december? Geef je antwoord in <b>seconden</b> nauwkeurig.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				10 euro
			</li>
			<li>
				`10+10*0,20=`<br>
				`10+2=12`<br>
				Als je 10 minuten hebt gebeld, moet je € 12,- betalen.
			</li>
			<li>
				`K=0,20*a+10`<br>
				Met `K` voor totale kosten per maand en `a` voor aantal belminuten.
			</li>
			<li>
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>a</em></td>
								<td colspan="2">0</td>
								<td colspan="2">50</td>	
							</tr>
							<tr>
								<td><em>K</em></td>
								<td colspan="2">10</td>
								<td colspan="2">20</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</li>
			<li><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bellen_e.png"  width="500" />
			</li>
			<li>
				Bij 17 euro aan kosten, hoort 35 minuten bellen.
			</li>
			<li>
				`0,20a + 10 = 15,35`
			</li>
			<li>
				`0,20a + 10 = 15,35`<br>
				`0,20a = 5,35`<br>
				`a = (5,35)/(0,20)= 26,75`
			</li>
			<li>
				`0,75*60=45`<br>
				Dus Femke heeft `26` minuten en `45` seconden gebeld.<br>
				Je kunt ook bedenken dat `26,75` minuten = `26 3/4` minuten en `3/4` minuut is 45 seconden.
			</li>
		</ol>
</div>
	</div>
</div>

<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Pre-paid</h3>
	<p>
		Een andere manier om te bellen is via een zogenaamd pre-paid abonnement. Je koopt vooraf beltegoed.
		De kosten voor het aantal minuten dat je hebt gebeld, gaan van het beltegoed af. 
		De formule waarmee je het beltegoed kuny berekenen is:<br>
		`B = - 0,25 * a + 40`
	</p>
	<ol>
		<li>
			Hoeveel is mijn beltegoed als ik nog niet heb gebeld?
		</li>
		<li>
			Wat is mijn beltegoed als `20` minuten heb gebeld?
		</li>
		<li>
			Bereken hoe lang ik maximaal kan bellen met een beltegoed van € `40` euro.
		</li>
		<li>
			Teken de grafiek bij de formule. Je kan gebruik maken van de tabel hieronder:
			<br><br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>a</em></TD><TD>0</TD><TD>40</TD>
					</TR>
					<TR>
						<TD width="150px"><em>B</em></TD><TD></TD><TD></TD>
					</TR>
				</TABLE><br>

		</li>
		<li>
			Hoe kan je het antwoord van vraag c. aflezen uit de grafiek?
		</li>
	</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`40` euro.
					</li>
					<li>
						`40-0,25*20`<br>
						`40-5=35` euro.
					</li>
					<li>
						<table>
					<tr>
						<td>`0`</td>
						<td>`=`</td>
						<td>`40-0,25a`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`+0,25a`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`+0,25a</td>
					</tr>
					<tr>
						<td>`0,25a`</td>
						<td>`=`</td>
						<td>`40`</td>
					</tr>
					<tr>
						<td class="tussenstap_vergelijking">`:0,25`</td>
						<td></td>
						<td class="tussenstap_vergelijking">`:0,25`</td>
					</tr>
					<tr>
						<td>`a`</td>
						<td>`=`</td>
						<td>`160`</td>
					</tr>
					</table>
					Ik kan dus maximaal `160` minuten bellen.
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>a</em></TD><TD>0</TD><TD>40</TD>
					</TR>
					<TR>
						<TD width="150px"><em>B</em></TD><TD>40</TD><TD>30</TD>
					</TR>
				</TABLE><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_hv/opdracht_3d.png"  width="500" />
			</li>
			<li>
				Kijk waar de grafiek de horizontale as snijdt. 
			</li>
			</ol>
						
					
			</div>		
		</div>
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Meer blokjes</h3>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/blokjes_2.PNG" alt="blokjes_2" />
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
			<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>nummer figuur</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
						<td colspan="2">5</td>
						<td colspan="2">6</td>
					</tr>
					<tr>
						<td><em>aantal blokjes</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
		</li>
		<li>
			Hoeveel blokjes komen er elke keer bij? Geef dit met pijlen aan in de tabel. 
		</li>
		<li>
			Kun je bij de tabel een formule maken van de vorm:<br>
			<em>a</em> = <em>hellingsgetal</em> &sdot; <em>n</em> + <em>startgetal</em>? Waarom wel/niet?
		</li>
		<li>
			<div class="row">
				<div class="col-xs-5">
					Welke formule past bij de rij?<br>
					<ol id="numbers">
						<li>
							`a = n`<sup>2</sup>
						</li>
						<li>
							`a = 2n + 1`
						</li>
					</ol>
					Met <em>a</em> voor <em>aantal blokjes</em> en <em>n</em> voor <em>nummer figuur</em>.
				</div>
				<div class="col-xs-7">
					<p class="geeltje">
						Weet je nog:<br>
						`n`<sup>2</sup> `= n * n`.<br>
						Kijk terug in de taak <a href="index.php?p=v_2thv_machten_en_wortels" target="_blank">Machten en wortels</a> voor een herhaling van kwadraat.
					</p>
				</div>
			</div>	
		</li>
		<li>
			Bereken met de formule het <em>aantal blokjes</em> als <nobr>`n = 10`</nobr>.  
		</li>
	</ol>
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>nummer figuur</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>	
										<td colspan="2">5</td>
										<td colspan="2">6</td>
									</tr>
									<tr>
										<td><em>aantal blokjes</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">4</td>
										<td colspan="2">9</td>
										<td colspan="2">16</td>
										<td colspan="2">25</td>
										<td colspan="2">36</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<tr>
											<th colspan="1"></th>
											<th colspan="1"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
											<th></th>
										</tr>
									</tr>
								</tfoot>	
							</table>
						</div>
					</li>
					<li>
						Nee, want de toename is niet steeds gelijk.
					</li>
					<li>
						Formule 1:<br>
						`a = n^2`
					</li>
					<li>
						`a =10^2 = 100`
					</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Blokjes</h3>
	<p>
		Bij een rij met blokjesfiguren hoort de formule:<br>
		`a = 4 + n^2`
	</p>
	<ol>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `3`.
		</li>
		<li>
			Bereken met de formule het aantal blokjes voor figuur nummer `5`.
		</li>
		<li>
			Onder de tabel zie je twee rijen met pijltjes. De eerste rij ken je al: hier vul je het verschil in tussen de twee vakjes erboven. In de tweede rij doe je hetzelfde: weer het verschil tussen de twee vakjes erboven.<br>
			Neem de tabel over en vul hem in.<br>
			<div class="table-responsive verhouding">
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>n</em></td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
					</tr>
					<tr>
						<td><em>a</em></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
						<td colspan="2"></td>
					</tr>			
				</tbody>
				<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th></th>
					</tr>
					<tr>
						<th colspan="2"></th>
						<th colspan="1"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
			</div>
		</li>
		<li>
			Er is een figuur met 104 blokjes. Welk nummer heeft dat figuur?
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`a=4+3^2`<br>
					`a=4+9=13`
				</li>
				<li>
					`a=4+5^2`<br>
					`a=4+25=29`
				</li>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>n</em></td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>a</em></td>
									<td colspan="2">5</td>
									<td colspan="2">8</td>
									<td colspan="2">13</td>
									<td colspan="2">20</td>
									<td colspan="2">29</td>
									<td colspan="2">40</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
									<th></th>
								</tr>
								<tr >
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					`104-4=100`<br>
					`10^2=100` dus figuur nummer `10` heeft `104` blokjes.
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Formules met kwadraten I</h3>
	<p>
		In de eerste drie opgaven is de toename regelmatig, dit noemen we het <span id="hellingsgetal">hellingsgetal</span> of <b>eerste verschil</b>:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding" >
			<tbody>
					<tr class="borderbottom">
						<td><em>n</em></td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
						<td colspan="2">7</td>	
					</tr>
					<tr>
						<td><em>a</em></td>
						<td colspan="2">3</td>
						<td colspan="2">5</td>
						<td colspan="2">7</td>
						<td colspan="2">9</td>
						<td colspan="2">11</td>
						<td colspan="2">13</td>
						<td colspan="2">15</td>	
					</tr>			
				</tbody>
			<tfoot>
					<tr >
					<th colspan="1"></th>
					<th colspan="1"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
					<th></th>
				</tr>
			</tfoot>	
		</table>
	</div>
	<p>
		Je kunt bij de tabel een lineaire formule opstellen.<br>
		<em>a</em> =  <span id="startgetal">startgetal</span>+  <span id="hellingsgetal">hellingsgetal</span> × <em>n</em><br>
		De formule die we bij de tabel kunnen opstellen is:<br>
		`a = 2n+1`
	</p>
	<p>
		In opgave `4` en `5` is het eerste verschil <b>niet</b> hetzelfde.
		Bij de tabellen van opdracht `4` en `5` is wél het <b>tweede</b> verschil steeds hetzelfde:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding">
			<tbody>
				<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
				<tr>
				<td><em>a</em></td>
				<td colspan="2">1</td>
				<td colspan="2">4</td>
				<td colspan="2">9</td>
				<td colspan="2">16</td>
				<td colspan="2">25</td>
				<td colspan="2">36</td>
			</tr>			
			</tbody>
			<tfoot>
				<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
							<th></th>
						</tr>
				<tr>
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
							<th></th>
						</tr>
			</tfoot>
		</table>
	</div>
	<p>
		Bij zo'n tabel hoort een <b>kwadratische formule</b>.
		<br>
		Het aantal blokjes in opdracht `4` kun je berekenen met de formule:<br>
		`a = n^2`
	</p>
</div>

<div class="tekstblok opdracht" id="6">
			<h3>Opdracht 6</h3>
			<p></p>
				<ol>
					<li>
						Neem de tabel hieronder over, en laat met 
						behulp van pijlen zien dat bij de tabel een lineaire 
						formule hoort.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>7</TD><TD>12</TD><TD>17</TD><TD>22</TD><TD>27</TD><TD>32</TD><TD>37</TD>
					</TR>
				</TABLE><br>
					</li>
					<li>
						Hoeveel blokjes horen er bij figuur nummer `0`?
					</li>
					<li>
						Wat is de toename, het hellingsgetal dus?
					</li>
					<li>
						Neem over en vul in:<br>
						<em>a</em>	`= .... +...*n`
					</li>
				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li><table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">7</td>
								<td colspan="2">12</td>
								<td colspan="2">17</td>
								<td colspan="2">22</td>
								<td colspan="2">27</td>
								<td colspan="2">32</td>
								
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th></th>
							</tr>
						</tfoot>	
						</table>
						</li>
						<li>
							`7-5=2` <br>
							Dus bij figuur nummer `0` horen `2` blokjes.
						</li>
						<li>
							Het hellingsgetal is `5` ,want als de bovenste rij met `1` toeneemt dan komt er onder steeds `5` bij.
						</li>
						<li>
							<em>aantal blokjes</em>	`= 2 +5*`<em>nummer figuur</em>
						</li>
					</ol>
					
			</div>		
		</div>

</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7</h3>
	<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/blokjes_3.png" alt="blokjes_3" width="600" height="" />
	<ol>
		<li>
			Neem de tabel over en vul hem in:<br><br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
			<TR>
				<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
			</TR>
			<TR>
				<TD width="150px"><em>a</em></TD><TD></TD><TD></TD><TD></TD>
			</TR>
			</TABLE><br>
		</li>
		<li>
			Hoort bij de tabel een lineair verband? Waarom wel/niet?
		</li>
		<li>
			Welke formule past bij de tabel?
			<ol id="numbers">
				<li>
					<en>a</em> `= 3*n`<sup>2</sup>
				</li>
				<li>
					<em>a</em> `= 3 + n`<sup>2</sup>
				</li>
			</ol>
		</li>
		<li>
			Bereken met de formule hoeveel blokjes figuur 6 heeft.
		</li>
		<li>
			Neem de tabel over en vul hem in:<br>
			<br>
			<div class="table-responsive verhouding">
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>n</em></td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>	
						</tr>
						<tr>
							<td><em>a</em></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
							<td colspan="2"></td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th></th>
						</tr>
						<tr >
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>4</TD><TD>7</TD><TD>12</TD>
					</TR>
					</TABLE><br>
				</li>
				<li>
					Bij de tabel hoort geen lineair verband omdat de toename niet steeds hetzelfde is.
				</li>
				<li>
					Formule `2`
				</li>
				<li>
					<em>a</em> `= 3 + n^2`<br>
					<em>a</em> `= 3+6^2`<br>
					<em>a</em> `= 3 + 36 = 39`<br>
					Dus figuur nummer `6` heeft `39` blokjes.
				</li>
				<li>
				<div class="table-responsive verhouding">
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">4</td>
								<td colspan="2">7</td>
								<td colspan="2">12</td>
								<td colspan="2">19</td>
								<td colspan="2">28</td>
								<td colspan="2">39</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
								<th></th>
							</tr>
							<tr>
								<th colspan="2"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</div>
			</li>
		</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8</h3>
	<p>
		Neem de tabel hieronder over, en laat met behulp van pijlen zien dat bij de tabel een kwadratische formule hoort.
	</p>
	<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
		<TR>
			<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
		</TR>
		<TR>
			<TD width="150px"><em>a</em></TD><TD>2</TD><TD>14</TD><TD>34</TD><TD>62</TD><TD>98</TD><TD>142</TD><TD>194</TD>
		</TR>
	</TABLE>
				
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="table-responsive verhouding">	
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>n</em></td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>
							<td colspan="2">7</td>	
						</tr>
						<tr>
							<td><em>a</em></td>
							<td colspan="2">2</td>
							<td colspan="2">14</td>
							<td colspan="2">34</td>
							<td colspan="2">62</td>
							<td colspan="2">98</td>
							<td colspan="2">142</td>
							<td colspan="2">194</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 12</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 20</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 28</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 36</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 44</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 52</th>
							<th></th>
						</tr>
						<tr>
							<th colspan="2"></th>
							<th colspan="1"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
			<p>
				Het tweede verschil is steeds hetzelfde dus bij de tabel hoort een kwadratische formule.	
			</p>		
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Vier tabellen</h3>
	<ol>
		<li>
			Hieronder zie je vier tabellen.
			Neem de tabellen over en onderzoek met pijlen of er een lineair verband bij hoort of een kwadratisch verband.</p>
			<ol id="numbers">
				<li>											
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>5</TD><TD>16</TD><TD>33</TD><TD>56</TD><TD>85</TD><TD>120</TD>
					</TR>
				</TABLE>
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>18</TD><TD>15</TD><TD>12</TD><TD>9</TD><TD>6</TD><TD>3</TD>
					</TR>
				</TABLE>
			</li>
				<li>
					
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>-10</TD><TD>-6</TD><TD>-2</TD><TD>2</TD><TD>6</TD><TD>10</TD>
					</TR>
				</TABLE>
			</li>
				<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>a</em></TD><TD>9</TD><TD>12</TD><TD>17</TD><TD>24</TD><TD>33</TD><TD>44</TD>
					</TR>
				</TABLE><br>
			</li>
			</ol>
		</li>		
		<li>
			Maak voor de tabellen waar een lineair verband bij hoort ook de woordformule.
		</li>
	</ol>	

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<ol id="numbers">
						<li>
							<table class="verhouding">
								<tbody>
									<tr class="borderbottom">
										<td><em>n</em></td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>
										<td colspan="2">5</td>
										<td colspan="2">6</td>
									</tr>
									<tr>
										<td><em>a</em></td>
										<td colspan="2">5</td>
										<td colspan="2">16</td>
										<td colspan="2">33</td>
										<td colspan="2">56</td>
										<td colspan="2">85</td>
										<td colspan="2">120</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 17</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 23</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 29</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
									<th></th>
								</tr>
								<tr>
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
						<br>
						Het tweede verschil is steeds hetzelfde. Bij de tabel hoort dus een kwadratische formule.
					</li>
					<li>
						<table class="verhouding" >
							<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">18</td>
								<td colspan="2">15</td>
								<td colspan="2">12</td>
								<td colspan="2">9</td>
								<td colspan="2">6</td>
								<td colspan="2">3</td>
								
							</tr>			
						</tbody>
							<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th></th>
							</tr>
						</tfoot>	
						</table><br>
						Het eerste verschil is steeds hetzelfde. Bij de tabel hoort dus een lineaire formule.
					</li>
					<li>
						<table class="verhouding" >
							<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">-10</td>
								<td colspan="2">-6</td>
								<td colspan="2">-2</td>
								<td colspan="2"> 2</td>
								<td colspan="2"> 6</td>
								<td colspan="2">10</td>
								
							</tr>			
						</tbody>
							<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th></th>
							</tr>
						</tfoot>	
						</table>
						<br>
						Het eerste verschil is steeds hetzelfde. Bij de tabel hoort dus een lineaire formule.
					</li>
					<li>
						<table class="verhouding">
							<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">9</td>
				<td colspan="2">12</td>
				<td colspan="2">17</td>
				<td colspan="2">24</td>
				<td colspan="2">33</td>
				<td colspan="2">44</td>
			</tr>			
		</tbody>
							<tfoot>
					<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>

		</tfoot>	
						</table>
						<br>
						Het tweede verschil is steeds hetzelfde. Bij de tabel hoort dus een kwadratische formule.
					</li>
				</ol>
				</li>
				<li>
					Voor tabel `2`:<br>
					Startgetal: `18+3=21`<br>
					Hellingsgetal: `-3`<br>
					<em>a</em> `=21-3*n`<br>
					<br>
					Voor tabel `3`:<br>
					Startgetal: `-10-4=-14`<br>
					Hellingsgetal: `+4`<br>
					<em>a</em> `=-14+4*n`
				</li>
			</ol>		
		</div>		
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Formules met kwadraten II</h3>
	<p>
		Bij tabel `4` in opgave `9` hoort een <b>kwadratische formule</b>:
		<br>
		<em>a</em> `=8 + n`<sup>2</sup><br>
		<br>
		Je ziet in de formule bij de letter `n` (we noemen dit de <b>variabele</b>) een <b>kwadraat</b>. <br>
		Als in een formule de variabele in het kwadraat staat dan heet zo'n formule een <b>kwadratische formule</b>.<br>
		Wil je weten hoeveel blokjes figuur `9` heeft? Vul in de formule `9` in op de plek van `n`.<br>
		<em>a</em> `= 8 + 9`<sup>2</sup><br>
		<em>a</em> `= 8 + 81 = 89`<br>
		Dus figuur nummer `9` bestaat uit 89 blokjes.
	</p>
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10</h3>
	<p>
		Bij een rij met blokjesfiguren hoort de formule:<br>
		<em>a</em> `= 5n^2` - 3`
	</p>
	<ol>
		<li>
			Neem over en vul in:<br>
			Figuur nummer `3` heeft `..` blokjes want:<br>
			<em>a</em> `= 5* 3` <sup>2</sup> `-3`<br>
			<em>a</em> `= 5* ...` - 3`<br>
			<em>a</em> `= ... - 3`<br>
			<em>a</em> `= ...`
		</li>
		<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `2`.
					</li>
		<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `4`.
					</li>
		<li>
			Neem de tabel over en vul hem in.<br>
			<table class="verhouding" style="background-color:white">		
							<tbody>
								<tr class="borderbottom">
									<td><em>n</em></td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>a</em></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
									<td colspan="2"></td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th></th>
								</tr>
								<tr>
									<th colspan="2"></th>
									<th colspan="1"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
									<th></th>
								</tr>	
							</tfoot>	
						</table>
		</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Figuur nummer `3` heeft `42` blokjes want:<br>
					<em>a</em> `= 5* 3` <sup>2</sup> `-3`<br>
					<em>a</em> `= 5* 9 - 3`<br>
					<em>a</em> `= 45 - 3`<br>
					<em>a</em> `= 42`
				</li>
				<li>
					<em>a</em> `= 5* 2` <sup>2</sup> `-3`<br>
					<em>a</em> `= 5* 4 - 3`<br>
					<em>a</em> `= 20 - 3`<br>
					<em>a</em> `= 17`
				</li>
				<li>
					<em>a</em> `= 5* 4` <sup>2</sup> `-3`<br>
					<em>a</em> `= 5* 16 - 3`<br>
					<em>a</em> `= 80 - 3`<br>
					<em>a</em> `= 77`
				</li>
				<li>
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>n</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
							</tr>
							<tr>
								<td><em>a</em></td>
								<td colspan="2">2</td>
								<td colspan="2">17</td>
								<td colspan="2">42</td>
								<td colspan="2">77</td>
								<td colspan="2">122</td>
								<td colspan="2">177</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 15</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 25</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 45</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 55</th>
								<th></th>
							</tr>
							<tr>
								<th colspan="2"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</li>
			</ol>
		</div>		
	</div>
</div>

<div class="tekstblok opdracht" id="11">
			<h3>Opdracht 11</h3>
			<p>Neem over en bereken:</p>
			<table>
		<tr>
			<td width="300">
				<ol>
					<li>
					`3`<sup>`2`</sup>` = 3 * 3 =...`
				</li>
				<li>
					`6`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`4`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-3)`<sup>`2`</sup>` = -3 * -3 =...`
				</li>
				<li>
					`(-5)`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-7)`<sup>`2`</sup>` = ... * ... =...`
				</li>
				</ol>
			</td>
			<td width="300">
				<ol start="7">
					<li>
					`-3`<sup>`2`</sup>` = - 3 * 3 = -9`
					</li>
					<li>
					`-7`<sup>`2`</sup>` = ...    ... * ... = .....`
					</li>
					<li>
					`-5`<sup>`2`</sup>` = ...    ... * ... = .....`
					</li>
					<li>
					`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
					</li>
					<li>
					`-(-8)`<sup>`2`</sup>` = ...    ... * ... = ...`
					</li>
					<li>
					`-(-4)`<sup>`2`</sup>` = ...    ... * ... = ...`
					</li>
				</ol>
			</td>
		</tr>
	</table>
			

<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">

					<ol>
					<li>
					`3`<sup>`2`</sup>` = 3 * 3 = 9`
				</li>
				<li>
					`6`<sup>`2`</sup>` = 6 * 6 = 36`
				</li>
				<li>
					`4`<sup>`2`</sup>` = 4 * 4 = 16`
				</li>
				<li>
					`(-3)`<sup>`2`</sup>` = -3 * -3 = 9`
				</li>
				<li>
					`(-5)`<sup>`2`</sup>` = -5 * -5 = 25`
				</li>
				<li>
					`(-7)`<sup>`2`</sup>` = -7 * -7 = 49`
				</li>
				</ol>
			</td>
			<td width="300">
				<ol start="7">
					<li>
					`-3`<sup>`2`</sup>` = - 3*3 = -9`
					</li>
					<li>
					`-7`<sup>`2`</sup>` = - 7*7 = -49`
					</li>
					<li>
					`-5`<sup>`2`</sup>` = - 5*5 = -25`
					</li>
					<li>
					`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
					</li>
					<li>
					`-(-8)`<sup>`2`</sup>` = - -8*-8 = -64`
					</li>
					<li>
					`-(-4)`<sup>`2`</sup>` = - -4*-4 = -16`
					</li>
				</ol>
			</td>
		</tr>
	</table>
				
				</div>
			</div>
</div>

<div class="tekstblok opdracht" id="12">
			<h3>Opdracht 12</h3>
			<p>Neem over en bereken:
			</p>
			
				<ol>
					<li>
					`4`<sup>`2`</sup>` + 5 = 4 * 4  +  5 = ... + ... = ...`
				</li>
				<li>
					`3`<sup>`2`</sup>` + 7 =`
				</li>
				<li>
					`(-9)`<sup>`2`</sup>` - 12 =`
				</li>
				<li>

					`-3 * (-5)`<sup>`2`</sup>` = -3 *   -5 * -5 = -3 * ... = ...`
				</li>
				<li>
					`-4 * 6 `<sup>`2`</sup>` = `
				</li>
				<li>
					`5 *(-7)`<sup>`2`</sup>` = `
				</li>
		
								
					<li>
					`7 * -3`<sup>`2`</sup>` = 7 * -  3 * 3 = 7 * ... = ...`
					</li>
					<li>
					`5 * -4`<sup>`2`</sup>` = `
					</li>
					<li>
					`-2 * -5`<sup>`2`</sup>` = `
					</li>
					
				</ol>
			
			

<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">

					<ol>
					<li>
					`4`<sup>`2`</sup>` + 5 = 4 * 4  +  5 = 16 + 5 = 21`
				</li>
				<li>
					`3`<sup>`2`</sup>` + 7 = 3 * 3 + 7 = 9 + 7 = 16`
				</li>
				<li>
					`(-9)`<sup>`2`</sup>` - 12 = -9*-9 - 12 = 81 - 12 = 69`
				</li>
				<li>

					`-3 * (-5)`<sup>`2`</sup>` = -3 *   -5 * -5 = -3 * 25 = -75`
				</li>
				<li>
					`-4 * 6 `<sup>`2`</sup>` = -4 * 6*6 = -4 * 36 = -144`
				</li>
				<li>
					`5 *(-7)`<sup>`2`</sup>` = 5 * -7*-7 = 5 * 49 = 245`
				</li>
		
								
					<li>
					`7 * -3`<sup>`2`</sup>` = 7 * -  3 * 3 = 7 * -9 = -63`
					</li>
					<li>
					`5 * -4`<sup>`2`</sup>` = 5 * -4*-4 = 5 * 16 = 80`
					</li>
					<li>
					`-2 * -5`<sup>`2`</sup>` = -2 * - 5*5 = -2 * -25 = 50`
					</li>
					
				</ol>
				
				</div>
			</div>
</div>





<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 5</h3>
			<p>Bij een rij met blokjesfiguren hoort de formule:<br>
				<em>Aantal blokjes</em> `= 4 + n` <sup>2</sup></p>
				<ol>
					<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `3`.
					</li>
					<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `5`.
					</li>
					<li>
						Neem de tabel over en vul hem in.<br>

						<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>Nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>Aantal blokjes</em></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
		</li>
		<li>
			Er is een figuur met 104 blokjes. Welk nummer heeft dat figuur?
		</li>
	</ol>
		

<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						`a=4+3^2`<br>
						`a=4+9=13`
					</li>
					<li>
						`a=4+5^2`<br>
						`a=4+25=29`
					</li>
					<li>
						<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">5</td>
				<td colspan="2">8</td>
				<td colspan="2">13</td>
				<td colspan="2">20</td>
				<td colspan="2">29</td>
				<td colspan="2">40</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
	</li>
	<li>
		`104-4=100`<br>
		`10^2=100` dus figuur nummer `10` heeft `104` blokjes.
	</li>

				</ol>
					
			</div>		
		</div>

</div>
<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>Formules met kwadraten</h3>
		<p>
			In opgave 1 is de toename (het verschil) steeds hetzelfde:
			<br>
			<table class="verhouding" >
		
		<tbody>
			<tr class="borderbottom">
				<td><em>nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
				<td colspan="2">7</td>	
			</tr>
			<tr>
				<td><em>aantal blokjes</em></td>
				<td colspan="2">3</td>
				<td colspan="2">5</td>
				<td colspan="2">7</td>
				<td colspan="2">9</td>
				<td colspan="2">11</td>
				<td colspan="2">13</td>
				<td colspan="2">15</td>	
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="1"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
			<br>
			Je kan bij de tabel een lineaire formule opstellen.<br>
			<em>aantal blokjes</em> =  <span id="startgetal">startgetal</span>+  <span id="hellingsgetal">hellingsgetal</span> × <em>nummer figuur</em>
			De woordformule die we bij de tabel kunnen opstellen is:<br>
			<em>aantal blokjes</em>`= 1 + 2*n`
			<br>
			<br>
			
			In opgave `2` was de toename (het verschil) <b>niet</b> hetzelfde.
			Bij de tabel van opdracht `2` is het <b>tweede</b> verschil steeds hetzelfde:
			<br>
			<table class="verhouding" >
		
		<tbody>
			<tr class="borderbottom">
				<td><em>Nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>Aantal blokjes</em></td>
				<td colspan="2">1</td>
				<td colspan="2">4</td>
				<td colspan="2">9</td>
				<td colspan="2">16</td>
				<td colspan="2">25</td>
				<td colspan="2">36</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
			Bij de tabel hoort een <b>kwadratische formule</b>.<br>
			<br>
			Het aantal blokjes in opdracht 2 kan je berekenen met de formule:<br>
			<em>Aantal blokjes</em> `= n`<sup>2</sup><br>
			<br>
	</div>


<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 6</h3>
			<p></p>
				<ol>
					<li>
						Neem de tabel hieronder over, en laat met 
						behulp van pijlen zien dat bij de tabel een lineaire 
						formule hoort.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>7</TD><TD>12</TD><TD>17</TD><TD>22</TD><TD>27</TD><TD>32</TD><TD>37</TD>
					</TR>
				</TABLE><br>
					</li>
					<li>
						Hoeveel blokjes horen er bij figuur nummer `0`?
					</li>
					<li>
						Wat is de toename, het hellingsgetal dus?
					</li>
					<li>
						Neem over en vul in:<br>
						<em>aantal blokjes</em>	`= .... +...*n`
					</li>
				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li><table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">7</td>
								<td colspan="2">12</td>
								<td colspan="2">17</td>
								<td colspan="2">22</td>
								<td colspan="2">27</td>
								<td colspan="2">32</td>
								
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
								<th></th>
							</tr>
						</tfoot>	
						</table>
						</li>
						<li>
							`7-5=2` <br>
							Dus bij figuur nummer `0` horen `2` blokjes.
						</li>
						<li>
							Het hellingsgetal is `5` ,want als de bovenste rij met `1` toeneemt dan komt er onder steeds `5` bij.
						</li>
						<li>
							<em>aantal blokjes</em>	`= 2 +5*`<em>nummer figuur</em>
						</li>
					</ol>
			</div>		
		</div>

</div>


<!--pdracht 4-->
<div class="tekstblok opdracht">
			<h3>Opdracht 7</h3>
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/blokjes_3.png" alt="blokjes_3" width="600" height="" />
			<ol>
				<li>
					Neem de tabel over en vul hem in:<br><br>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD></TD><TD></TD><TD></TD>
					</TR>
					</TABLE><br>
				</li>
				<li>
					Hoort bij de tabel een lineair verband? Waarom wel/niet?
				</li>
				<li>
					Welke formule past bij de tabel?
					<ol class="numbers">
						<li>
							<en>Aantal blokjes</em> `= 3*n`<sup>2</sup>
						</li>
						<li>
							<em>Aantal blokjes</em> `= 3 + n`<sup>2</sup>
						</li>
					</ol>
				</li>
				<li>
					Bereken met de formule hoeveel blokjes figuur 6 heeft.
				</li>
				<li>
					Neem de tabel over en vul hem in:<br>
					<br>
					<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>Nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>Aantal blokjes</em></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
	</li>
</ol>


<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden</p>
					<ol>
						<li>
							<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
							<TR>
								<TD width="150px"><em>n</em></TD><TD>1</TD><TD>2</TD><TD>3</TD>
							</TR>
							<TR>
								<TD width="150px"><em>a</em></TD><TD>4</TD><TD>7</TD><TD>12</TD>
							</TR>
							</TABLE><br>
						</li>
						<li>
							Bij de tabel hoort geen lineair verband omdat de toename niet steeds hetzelfde is.
						</li>
						<li>
							Woordformule `2`
						</li>
						<li>
							<em>a</em> `= 3 + n^2`<br>
							<em>a</em> `= 3+6^2`<br>
							<em>a</em> `= 3 + 36 = 39`<br>
							Dus figuur nummer `6` heeft `39` blokjes.
						</li>
						<li>
							<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">4</td>
				<td colspan="2">7</td>
				<td colspan="2">12</td>
				<td colspan="2">19</td>
				<td colspan="2">28</td>
				<td colspan="2">39</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
	</li>
					</ol>
				
				</div>
			</div>
</div>



<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 8</h3>
			<p></p>
								
						Neem de tabel hieronder over, en laat met 
						behulp van pijlen zien dat bij de tabel een kwadratische formule hoort.
						<br><br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>2</TD><TD>14</TD><TD>34</TD><TD>62</TD><TD>98</TD><TD>142</TD><TD>194</TD>
					</TR>
				</TABLE><br>
					


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>
				<td colspan="2">7</td>	
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">2</td>
				<td colspan="2">14</td>
				<td colspan="2">34</td>
				<td colspan="2">62</td>
				<td colspan="2">98</td>
				<td colspan="2">142</td>
				<td colspan="2">194</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 12</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 20</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 28</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 36</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 44</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 52</th>
				<th></th>
			</tr>
		</tfoot>	
		</table><br>
		Het tweede verschil is steeds hetzelfde dus bij de 
		tabel hoort een kwadratische formule.			
			</div>		
		</div>

</div>

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 9</h3>
			<ol>
				<li>
					Hieronder zie je vier tabellen.
					Neem de tabellen over en onderzoek met pijlen of er een lineair verband bij hoort of een kwadratisch verband.</p>
					<ol id="numbers">
					<li>											
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>5</TD><TD>16</TD><TD>33</TD><TD>56</TD><TD>85</TD><TD>120</TD>
					</TR>
				</TABLE>
				</li>
				<li>
					<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>18</TD><TD>15</TD><TD>12</TD><TD>9</TD><TD>6</TD><TD>3</TD>
					</TR>
				</TABLE>
			</li>
			<li>
					
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>-10</TD><TD>-6</TD><TD>-2</TD><TD>2</TD><TD>6</TD><TD>10</TD>
					</TR>
				</TABLE>
			</li>
			<li>
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>nummer figuur</em></TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD>
					</TR>
					<TR>
						<TD width="150px"><em>aantal blokjes</em></TD><TD>9</TD><TD>12</TD><TD>17</TD><TD>24</TD><TD>33</TD><TD>44</TD>
					</TR>
				</TABLE><br>
			</li>
				</ol>
			</li>
				
	<li>
					Maak voor de tabellen waar een lineair verband bij hoort ook de woordformule.
	</li>
	
	</ol>	


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<ol id="numbers">
							<li>
								<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>
			</tr>
			<tr>
				<td><em>aantal blokjes</em></td>
				<td colspan="2">5</td>
				<td colspan="2">16</td>
				<td colspan="2">33</td>
				<td colspan="2">56</td>
				<td colspan="2">85</td>
				<td colspan="2">120</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 17</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 23</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 29</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
				<th></th>
			</tr>
		</tfoot>	
		</table><br>
		Tweede verschil is steeds hetzelfde. Bij de tabel hoort dus een kwadratische formule.
					</li>
					<li>
					<table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">18</td>
								<td colspan="2">15</td>
								<td colspan="2">12</td>
								<td colspan="2">9</td>
								<td colspan="2">6</td>
								<td colspan="2">3</td>
								
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
								<th></th>
							</tr>
						</tfoot>	
						</table><br>
						Eerste verschil is steeds hetzelfde. Bij de tabel hoort dus een lineaire formule.
						</li>
						<li>
							<table class="verhouding" >
		
						<tbody>
							<tr class="borderbottom">
								<td><em>nummer figuur</em></td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
								<td colspan="2">6</td>	
								
							</tr>
							<tr>
								<td><em>aantal blokjes</em></td>
								<td colspan="2">-10</td>
								<td colspan="2">-6</td>
								<td colspan="2">-2</td>
								<td colspan="2"> 2</td>
								<td colspan="2"> 6</td>
								<td colspan="2">10</td>
								
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="1"></th>
								<th colspan="1"></th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 4</th>
								<th></th>
							</tr>
						</tfoot>	
						</table><br>
						Eerste verschil is steeds hetzelfde. Bij de tabel hoort dus een lineaire formule.
						</li>
						<li>
							<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>
			</tr>
			<tr>
				<td><em>aantal blokjes</em></td>
				<td colspan="2">9</td>
				<td colspan="2">12</td>
				<td colspan="2">17</td>
				<td colspan="2">24</td>
				<td colspan="2">33</td>
				<td colspan="2">44</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 7</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 9</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 11</th>
				<th></th>
			</tr>
		</tfoot>	
		</table><br>
		Tweede verschil is steeds hetzelfde. Bij de tabel hoort dus een kwadratische formule.
	</li>
</ol>
<li>
	Voor tabel `2`:<br>
	Startgetal: `18+3=21`<br>
	Hellingsgetal: `-3`<br>
	<em>aantal blokjes</em> `=21-3*`nummer figuur<br>
	<br>
	Voor tabel `3`:<br>
	Startgetal: `-10-4=-14`<br>
	Hellingsgetal: `+4`<br>
	<em>aantal blokjes</em> `=-14+4*`nummer figuur
</li>
</ol>
					
			</div>		
		</div>

</div>

<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>Formules met kwadraten</h3>
			Bij tabel `4` in opgave `7` hoort een <b>kwadratische formule</b>.
			De woordformule die bij de tabel hoort is:<br>
			<br>
			<em>aantal blokjes</em> `=8 + n`<sup>2</sup><br>
			<br>
			Je ziet in de formule bij de letter `n` (we noemen dit de <b>variabele</b>) een <b>kwadraat</b>. <br>
			Als in een formule de variabele in het kwadraat staat dan heet zo'n formule een <b>kwadratische formule</b>.<br>
			Wil je weten hoeveel blokjes figuur `9` heeft? Vul in de formule `9` in op de plek van `n`.<br>
			<em>Aantal blokjes</em> `= 8 + 9`<sup>2</sup><br>
			<em>Aantal blokjes</em> `= 8 + 81 = 89`<br>
			Dus figuur nummer `9` bestaat uit 89 blokjes.
	</div>


<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 10</h3>
			<p>Bij een rij met blokjesfiguren hoort de formule:<br>
				<em>Aantal blokjes</em> `= 5n` <sup>2</sup>` - 3`</p>
				<ol>
					<li>
						Neem over en vul in:<br>
						Figuur nummer `3` heeft `..` blokjes want:<br>
						<em>Aantal blokjes</em> `= 5* 3` <sup>2</sup> `-3`<br>
						<em>Aantal blokjes</em> `= 5* ...` - 3`<br>
						<em>Aantal blokjes</em> `= ... - 3`<br>
						<em>Aantal blokjes</em> `= ...`

					<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `2`.
					</li>
					<li>
						Bereken met de formule het aantal blokjes voor figuur nummer `4`.
					</li>
					<li>
						Neem de tabel over en vul hem in.<br>

						<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>Nummer figuur</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>Aantal blokjes</em></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
				<td colspan="2"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ ...</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
		</li>
		
	</ol>
				


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Figuur nummer `3` heeft `42` blokjes want:<br>
						<em>a</em> `= 5* 3` <sup>2</sup> `-3`<br>
						<em>a</em> `= 5* 9 - 3`<br>
						<em>a</em> `= 45 - 3`<br>
						<em>a</em> `= 42`
					</li>
					<li>
						<em>a</em> `= 5* 2` <sup>2</sup> `-3`<br>
						<em>a</em> `= 5* 4 - 3`<br>
						<em>a</em> `= 20 - 3`<br>
						<em>a</em> `= 17`
					</li>
					<li>
						<em>a</em> `= 5* 4` <sup>2</sup> `-3`<br>
						<em>a</em> `= 5* 16 - 3`<br>
						<em>a</em> `= 80 - 3`<br>
						<em>a</em> `= 77`
					</li>
					<li>
						<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>n</em></td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>
				<td colspan="2">5</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>a</em></td>
				<td colspan="2">2</td>
				<td colspan="2">17</td>
				<td colspan="2">42</td>
				<td colspan="2">77</td>
				<td colspan="2">122</td>
				<td colspan="2">177</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="1"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
				<th></th>
			</tr>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 15</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 25</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 35</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 45</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 55</th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
	</li>
</ol>
					
			</div>		
		</div>

</div>


<!--pdracht 3-->
<div class="tekstblok opdracht">
			<h3>Opdracht 11</h3>
			<p>Neem over en bereken:</p>
			<table>
		<tr>
			<td width="300">
				<ol>
					<li>
					`3`<sup>`2`</sup>` = 3 * 3 =...`
				</li>
				<li>
					`6`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`4`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-3)`<sup>`2`</sup>` = -3 * -3 =...`
				</li>
				<li>
					`(-5)`<sup>`2`</sup>` = ... * ... =...`
				</li>
				<li>
					`(-7)`<sup>`2`</sup>` = ... * ... =...`
				</li>
				</ol>
			</td>
			<td width="300">
				<ol start="7">
					<li>
					`-3`<sup>`2`</sup>` = - 3 * 3 = -9`
					</li>
					<li>
					`-7`<sup>`2`</sup>` = ...    ... * ... = .....`
					</li>
					<li>
					`-5`<sup>`2`</sup>` = ...    ... * ... = .....`
					</li>
					<li>
					`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
					</li>
					<li>
					`-(-8)`<sup>`2`</sup>` = ...    ... * ... = ...`
					</li>
					<li>
					`-(-4)`<sup>`2`</sup>` = ...    ... * ... = ...`
					</li>
				</ol>
			</td>
		</tr>
	</table>
			

<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden</p>
					<table>
		<tr>
			<td width="300">
				<ol>
					<li>
					`3`<sup>`2`</sup>` = 3 * 3 = 9`
				</li>
				<li>
					`6`<sup>`2`</sup>` = 6 * 6 = 36`
				</li>
				<li>
					`4`<sup>`2`</sup>` = 4 * 4 = 16`
				</li>
				<li>
					`(-3)`<sup>`2`</sup>` = -3 * -3 = 9`
				</li>
				<li>
					`(-5)`<sup>`2`</sup>` = -5 * -5 = 25`
				</li>
				<li>
					`(-7)`<sup>`2`</sup>` = -7 * -7 = 49`
				</li>
				</ol>
			</td>
			<td width="300">
				<ol start="7">
					<li>
					`-3`<sup>`2`</sup>` = - 3*3 = -9`
					</li>
					<li>
					`-7`<sup>`2`</sup>` = - 7*7 = -49`
					</li>
					<li>
					`-5`<sup>`2`</sup>` = - 5*5 = -25`
					</li>
					<li>
					`-(-6)`<sup>`2`</sup>` = -  -6 * -6 = -36`
					</li>
					<li>
					`-(-8)`<sup>`2`</sup>` = - -8*-8 = -64`
					</li>
					<li>
					`-(-4)`<sup>`2`</sup>` = - -4*-4 = -16`
					</li>
				</ol>
			</td>
		</tr>
	</table>
				</div>
			</div>
</div>


<!--pdracht 4-->
<div class="tekstblok opdracht">
			<h3>Opdracht 12</h3>
			<p>Neem over en bereken:
			</p>
			
				<ol>
					<li>
					`4`<sup>`2`</sup>` + 5 = 4 * 4  +  5 = ... + ... = ...`
				</li>
				<li>
					`3`<sup>`2`</sup>` + 7 =`
				</li>
				<li>
					`(-9)`<sup>`2`</sup>` - 12 =`
				</li>
				<li>

					`-3 * (-5)`<sup>`2`</sup>` = -3 *   -5 * -5 = -3 * ... = ...`
				</li>
				<li>
					`-4 * 6 `<sup>`2`</sup>` = `
				</li>
				<li>
					`5 *(-7)`<sup>`2`</sup>` = `
				</li>
		
								
					<li>
					`7 * -3`<sup>`2`</sup>` = 7 * -  3 * 3 = 7 * ... = ...`
					</li>
					<li>
					`5 * -4`<sup>`2`</sup>` = `
					</li>
					<li>
					`-2 * -5`<sup>`2`</sup>` = `
					</li>
					
				</ol>
			
			

<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
				<p>Antwoorden</p>
					<ol>
					<li>
					`4`<sup>`2`</sup>` + 5 = 4 * 4  +  5 = 16 + 5 = 21`
				</li>
				<li>
					`3`<sup>`2`</sup>` + 7 = 3 * 3 + 7 = 9 + 7 = 16`
				</li>
				<li>
					`(-9)`<sup>`2`</sup>` - 12 = -9*-9 - 12 = 81 - 12 = 69`
				</li>
				<li>

					`-3 * (-5)`<sup>`2`</sup>` = -3 *   -5 * -5 = -3 * 25 = -75`
				</li>
				<li>
					`-4 * 6 `<sup>`2`</sup>` = -4 * 6*6 = -4 * 36 = -144`
				</li>
				<li>
					`5 *(-7)`<sup>`2`</sup>` = 5 * -7*-7 = 5 * 49 = 245`
				</li>
		
								
					<li>
					`7 * -3`<sup>`2`</sup>` = 7 * -  3 * 3 = 7 * -9 = -63`
					</li>
					<li>
					`5 * -4`<sup>`2`</sup>` = 5 * -4*-4 = 5 * 16 = 80`
					</li>
					<li>
					`-2 * -5`<sup>`2`</sup>` = -2 * - 5*5 = -2 * -25 = 50`
					</li>
					
				</ol>
				
				</div>
			</div>
</div>



<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 13</h3>
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/poncho.png" alt="poncho" width="600" height="" />
			<p>Brechtje wil voor haar gezin poncho's gaan breien. 
				Ze heeft een vierkant breipatroon gevonden. In het midden van het vierkant zit een gat waar het hoofd doorheen moet.
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/poncho_1.png" alt="poncho" width="200" class="rightfloat" />
				Een formule om de oppervlakte van de poncho te berekenen is:<br>
				<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
				In de formule is de lengte in dm en de oppervlakte in dm<sup>2</sup>.</p>
				<p>
						Brechtje heeft twee kinderen. Haar dochter heet Isis en haar zoon heet Sam.
						Sam is haar jongste zoon, dus met deze poncho is ze zo klaar.
						De lengte van de poncho van Sam moet 5 dm worden. Voor Isis is ze langer bezig want zij is ouder dan Sam. 
						Isis heeft een poncho nodig met een lengte van 7 dm.
						Voor haar man, Servaas, is ze het langst bezig. Hij heeft een poncho nodig met lengte 120 cm.
					</p>
					<ol>
					<li>
						Bereken met de formule de oppervlakte van de poncho van Sam.
					</li>
					<li>
						Bereken met de formule de oppervlakte van de poncho van Isis.
					</li>
					<li>
						Bereken met de formule de oppervlakte van de poncho van Servaas.
					</li>
					<li>
						Brechtje heeft ook een poncho voor zichzelf gemaakt. De oppervlakte van haar poncho is `97,5` dm<sup>2</sup>.
						Zoek uit wat de lengte is van haar poncho.
					</li>


				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>5</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 25 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 22,5` <br>
						Dus de oppervlakte van de poncho van Sam is `22,5` dm<sup>2</sup>.
					</li>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>7</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 49 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 46,5` <br>
						Dus de oppervlakte van de poncho van Sam is `46,5` dm<sup>2</sup>.
					</li>
					<li>
						`120` cm `= 12` dm <br>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`=` <em>12</em><sup>2</sup> `-2,5`<br>
						<em>oppervlakte Poncho</em>`= 144 - 2,5`<br>
						<em>oppervlakte Poncho</em>`= 141,5` <br>
						Dus de oppervlakte van de poncho van Sam is `141,5` dm<sup>2</sup>.
					</li>
					<li>
						<em>oppervlakte Poncho</em>`=` <em>lengte</em><sup>2</sup> `-2,5`<br>
						`97,5 =` <em>lengte</em><sup>2</sup> `-2,5`<br>
						Gebruik de bordjes methode:<br>
							`97,5 =` <em>lengte</em><sup>2</sup> `-2,5`<br>
							`97,5 =`<span class="formula"> ? </span> `- 2,5`<br>
							<span class="formula"> ? </span> `= 100`<br>
							<em>lengte</em><sup>2</sup> ` = 100`<br>
							<span class="formula"> ? </span><sup>2</sup> `= 100`<br>
							<span class="formula"> ? </span> `= 10`<br>
							Dus de <em>lengte</em> `= 10`<br>
							<br>
						Of de balansmethode:<br>
							<table>
							<tr>
								<td>`97,5`</td>
								<td>`=`</td>
								<td><em>lengte</em><sup>2</sup>`-2,5`</td>
							</tr>
							<tr>
								<td class="tussenstap_vergelijking">`+2,5`</td>
								<td></td>
								<td class="tussenstap_vergelijking">`+2,5`</td>
							</tr>
							<tr>
								<td>`100`</td>
								<td>`=`</td>
								<td><em>lengte</em><sup>2</sup></td>
							</tr>
							<tr>
								<td class="tussenstap_vergelijking">`sqrt`</td>
								<td></td>
								<td class="tussenstap_vergelijking">`sqrt`</td>
							</tr>
							<tr>
								<td>`10`</td>
								<td>`=`</td>
								<td><em>lengte</em></td>
							</tr>
							</table><br>
							Dus de <em>lengte</em> van de poncho van Brechtje is `10` dm.
						</li>
					</ol>
			</div>		
		</div>

</div>

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 14</h3>
			<p>De queteletindex (afgekort QI) of body-mass index (BMI) is een meetisntrument 
				waarmee we kunnen kijken of een persoon voor zijn lengte een juist gewicht heeft. 
				Als de BMI te hoog is, dan heeft de persoon overgewicht.
				Als de BMI te laag is heeft de persoon een ondergewicht. Als je een BMI hebt tussen 
				de `18,5` en `25` dan heb je een gezond gewicht.<br>
				<br>
				
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/QI_grafiek.PNG" width="300px" >
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/QI_tabel.PNG"  width="250px" class="rightfloat">
				<br>
			</p>
			<p>Hafid wil graag weten hoe zwaar hij mag zijn om nog een gezond gewicht te hebben.
				Om zijn gewicht te berekenen met een BMI-waarde van `25` gebruikt hij de volgende formule:<br>
				<em>lichaamsgewicht</em> `= 25 * `<em>lengte</em><sup>2</sup><br>
				De <em>lengte</em> is in meters en het <em>lichaamsgewicht</em> in kg.
				<ol>
					<li>
						Hafid is 1,68 meter. Bereken hoe zwaar hij <b>maximaal</b> mag zijn voor een gezond gewicht. Rond je antwoord af op hele kilo's.
					</li>
					<li>
						Als zijn BMI-waarde onder de `18,5` komt heeft Hafid ondergewicht.<br>
						Om zijn gewicht te berekenen met een BMI-waarde van `18,5` moet hij de volgende formule gebruiken:<br>
						<em>lichaamsgewicht</em> `= 18,5 * `<em>lengte</em><sup>2</sup><br>
						Ook hier geldt weer dat de <em>lengte</em> in meters is en het <em>lichaamsgewicht</em> in kg.<br>
						Bereken met behulp van de formule hoe zwaar Hafid <b>minimaal</b> moet zijn om een gezond gewicht te hebben. Rond je antwoord af op hele kilo's.
					</li>
					<li>
						Neem over en vul in:<br>
						Hafid moet een gewicht hebben tussen ...kg en ...kg om een gezond gewicht te hebben.
					</li>
					<li>
						Gebruik de formules hierboven om voor jou uit te rekenen tussen welke waarden je gewicht moet zitten om een gezond gewicht te hebben.
					</li>
				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<em>lichaamsgewicht</em> `= 25 * `<em>lengte</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 25 * `<em>1,68</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 25 * 2,8224`<br>
						<em>lichaamsgewicht</em> `= 70,56`<br>
						Dus Hafid mag maximaal `70` kilo zijn voor een gezond gewicht.<br>
						Let op:<br>
						Als we wiskundig goed afronden moeten we afronden op `71` kilo. <br>
						Bij `71` kilo heeft Hafig geen gezond gewicht meer.	<br>
						 
					</li>
					<li>
						<em>lichaamsgewicht</em> `= 18,5 * `<em>lengte</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 18,5 * `<em>1,68</em><sup>2</sup><br>
						<em>lichaamsgewicht</em> `= 18,5 * 2,8224`<br>
						<em>lichaamsgewicht</em> `= 52,2144`<br>
						Dus Hafid moet minimaal `53` kilo zijn voor een gezond gewicht. <br>
						Let op:<br>
						Als we wiskundig goed afronden moeten we afronden op `52` kilo.<br>
						Bij `52` kilo heeft Hafid geen gezond gewicht meer. Hj heeft dan ondergewicht.<br>
						
					</li>
					<li>
						Hafid moet een gewicht hebben tussen `53`kg en `70`kg om een gezond gewicht te hebben.
					</li>
					<li>
						-
					</li>
									
				</ol>
					
			</div>		
		</div>

</div>



<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 15</h3>
			<p>Gegeven is de volgende formule:<br>
				`y=x`<sup>2</sup></p>
				<ol>
					<li>
						Neem de tabel over en vul hem in:<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150px"><em>y</em></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
					</TABLE>
					</li>
						<aside class="tekstballon_theorie">
						Let op:<br>
						als je voor de `x` een negatief getal moet invullen, dan moet je dat getal altijd tussen haakjes zetten!
						</aside>
						<br>						<p>
							Stel je nu eens voor dat je voor `x` ook negatieve getallen kan invullen.
						</p>
					<li start="2"> 	
						Bereken `y` als `x=-4`. Neem daarvoor onderstaande over en vul in:<br>
						`y=x`<sup>2</sup><br>
						`y=(-4)`<sup>2</sup><br>
						`y=...`<br>
						coordinaten: `(-4, ...)`
					</li>
					<li>
						Neem de tabel over en vul hem in:<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>x</em></TD><TD>-3</TD><TD>-2</TD><TD>-1</TD>
					</TR>
					<TR>
						<TD width="150px"><em>y</em></TD><TD></TD><TD></TD><TD></TD>
					</TR>
					</TABLE>
					</li>
					<li>
						
						Neem het assenstelsel hieronder over.<br>
						<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/assenstelsel_leeg.png"  width="350px" >
						<aside class="tekstballon_theorie">
						<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/tabel_coordinaten_assenstelsel.PNG"  width="175px" >
						</aside>
					</li>
					<li>
						Zet de gegevens uit de tabellen van opdracht a. en c. in het assenstelsel.
					</li>
					<li>
						Teken een vloeiende lijn (dit noemen we een <b>kromme</b>) door de punten.<br>
						Je mag de punten dus niet verbinden door rechte lijnen!
					</li>
					<li>
						Je hebt bij f.  de grafiek getekend. Schrijf de formule bij de grafiek.
					</li>
				</ol>

<br>
<br>
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				
				<ol>
					<li>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
					<TR>
						<TD width="150px"><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150px"><em>y</em></TD><TD>0</TD><TD>1</TD><TD>4</TD><TD>9</TD>
					</TR>
					</TABLE>
					</li>
					<li>
						`y=x`<sup>2</sup><br>
						`y=(-4)`<sup>2</sup><br>
						`y=16`<br>
						coordinaten: `(-4, 16)`
					</li>
					<li>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>x</em></TD><TD>-3</TD><TD>-2</TD><TD>-1</TD>
						</TR>
						<TR>
							<TD width="150px"><em>y</em></TD><TD>9</TD><TD>4</TD><TD>1</TD>
						</TR>
						</TABLE>
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/assenstelsel_punten.png"  width="175px" >
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/assenstelsel_grafiek.png"  width="175px" >
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/assenstelsel_formule.png"  width="175px" >
					</li>
				</ol>

					
			</div>		
		</div>

</div>


<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>Parabolen</h3>
		In opdracht 13 heb je de grafiek getekend bij de formule `y=x`<sup>2</sup>.
		De grafiek bij een kwadratische formule heet een <b>parabool</b>. <br>
		<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/parabool_theorie.png"  width="350px" >
		<br>
		Elke parabool heeft een <b>top</b>. De coordinaten van de top hierboven zijn: `(0,0)`. <br>
		In de parabool hierboven is de top het <b>laagste</b> punt. We noemen dit een <b>dal</b>parabool. <br>
		<br>
		De top van een parabool kan ook het <b>hoogste</b> punt van de parabool zijn. Dan noemen we de parabool een <b>berg</b>parabool.
		<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/bergparabool_theorie.png"  width="350px" >
		<br>
		<aside class="tekstballon_theorie">
		Kijk nog eens terug in de taak <a href="index2.php?p=meet_symmetrie" target="_blank">symmetrie</a> voor een herhaling.		
		</aside>
		Een parabool is altijd symmetrisch. Dat betekent dat je hem zo kan vouwen dat beide helften precies op elkaar vallen. De lijn waarover je moet vouwen heet de <b>symmetrie-as</b>.
		
	</div>

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 16</h3>
			<p><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bal.png"  width="250px" class="rightfloat">
				Enola trapt een bal heel hard weg. In de grafiek hiernaast kan je zien hoe hoog de bal komt.</p>
				<ol>
					<li>
						Is de grafiek hiernaast een bergparabool of een dalparabool?
					</li>
					<li>
						Neem over en vul in:<br>
						De coordinaten van de top zijn: `(... , ...)`.
					<li>
						Lees uit de grafiek af na hoeveel meter de bal weer op de grond komt.
					</li>
					<li>
						Lees uit de grafiek af hoe hoog de bal komt.
					</li>
					<li>
						Juan staat 3 meter van Enola vandaan. De bal is recht boven Juan. <br>
						Hoe hoog is de bal?
					</li>
					<li>
						Neem de tabel over en vul hem in:<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>afstand in meters</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD>
						</TR>
						<TR>
							<TD width="150px"><em>hoogte in meters</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>
						</TR>
						</TABLE>
						<br>
					</li>
					<li>
						Hoe kan je aan de tabel zien dat de grafiek symmetrisch is?
					</li>
					<li>
						Teken de grafiek in je schrift.
					</li>
					<li>
						Teken met een stippellijn de symmetrie-as in je grafiek. 
					</li>
					<li>
						Op een afstand van `2` meter is de bal `12` meter hoog. <br>
						Op welke afstand is de bal weer `12` meter hoog?
					</li>
					



				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						De grafiek is een bergparabool.
					</li>
					<li>
						De coordinaten van de top zijn: `(4 , 16)`.
					</li>
					<li>
						De bal komt na 8 meter weer op de grond.
					</li>
					<li>
						De bal komt 16 meter hoog.
					</li>
					<li>
						<p><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bal_afstand.png"  width="300px">
					</li>
					<li>
						Neem de tabel over en vul hem in:<br>
						<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>afstand in meters</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD>
						</TR>
						<TR>
							<TD width="150px"><em>hoogte in meters</em></TD><TD>0</TD><TD>7</TD><TD>12</TD><TD>15</TD><TD>16</TD><TD>15</TD><TD>12</TD><TD>7</TD><TD>0</TD>
						</TR>
						</TABLE>
						<br>
					</li>
					<li>
						Links en rechts van de top zijn de getallen onderin hetzelfde. Je hoeft dus altijd maar `1` kant van de top uit te rekenen!
					</li>
					<li>
						<p><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bal.png"  width="300px">
					</li>
					<li>
						<p><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bal_symmetrie-as.png"  width="300px">
					</li>
					
					<li>
						De bal is na `6` meter weer op `12` meter hoog. Kijk in de tabel of in de grafiek.
					</li>

</ol>

			</div>		
		</div>

</div>



<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 17</h3>
			<p><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_basketbal_kleur.png"  width="300px" class="rightfloat">
				Een korfballer gooit een bal precies in de korf. De baan die de bal aflegt is een parabool.<br>
				De formule die bij de parabool hoort is:<br>
				<em>Hoogte</em> `= -0,56a`<sup>`2`</sup> `+ 3a + 2`.<br>
				Hierin is de <em>Hoogte</em> in meters en `a` de afstand in meters.</p>
				<ol>
					<li>
						Is de parabool een bergparabool of een dalparabool?
					</li>
					<li>
						Op welke hoogte laat de speler de bal los?
					</li>
					<li>
						Controleer je antwoord van b. door in de formule `a=0` in te vullen.
					</li>
					<li>
						Hoever staat de korfballer van de korf?
					</li>
					<li> 
						Bereken hoe hoog de korf is.
					</li>
					<li>
						Lees uit de grafiek af hoe hoog de bal komt.
					</li>

				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Het is een bergparabool.
					</li>
					<li>
						De speler laat de bal op  `2` meter hoogte los.
					</li>
					<li>
						De speler staat `5` meter van de korf.
					</li>
					<li>
						Vul op de plek van `a`, `5` in.<br>
						<em>H</em> `= -0,56a`<sup>`2`</sup> `+ 3a + 2`<br>
						<em>H</em> `= -0,56*5`<sup>`2`</sup> `+ 3*5 + 2`<br>
						<em>H</em> `= -0,56*25 `+ 3*5 + 2`.<br>
						<em>H</em> `= -14`+ 15 + 2`<br>
						<em>H</em> `= 3`<br>
						Dus de korf hangt op `3` meter hoogte.
					</li>
					<li>
						De bal komt `6` meter hoog.
					</li>
				</ol>
					
			</div>		
		</div>

</div>

<!--theorie -->
	<div class="tekstblok theorie analyse">
		<h3>Werkschema grafiek tekenen bij kwadratische formules</h3>
		<p>Teken de grafiek bij de formule:<br>
			<em>Hoogte</em>`=2a+0,5a`<sup>2</sup>.<br>
			Hoogte en `a` zijn in meters.<br>
			Gebruik daarbij de volgende tabel:<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`a`</em></TD><TD>-5</TD><TD>-4</TD><TD>-3</TD><TD>-2</TD><TD>-1</TD><TD>0</TD><TD>1</TD>
						</TR>
						<TR>
							<TD width="150px"><em>Hoogte</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>					
						</TR>
			</TABLE>
		</p>
		<p>
			<table>
			<tbody>
				<tr>
					<td width="60" style="vertical-align: top">Stap 1</td>
					<td width="150" style="vertical-align: top">Vul de gegeven tabel in.<br>
					<aside class="tekstballon_theorie">
						Bij het kwadraat van `-5` gebruik je haakjes.
						</aside></td>
					<td width="100">
						<TABLE FRAME="void" RULES="all"  width="200px" style= "text-align: center">
						<TR>
							<TD width="100px"><em>`a`</em></TD><TD>-5</TD><TD>-4</TD><TD>-3</TD><TD>-2</TD><TD>-1</TD><TD>0</TD><TD>1</TD>
						</TR>
						<TR>
							<TD width="100px"><em>Hoogte</em></TD><TD>2,5</TD><TD>0</TD><TD>-1,5</TD><TD>-2</TD><TD>-1,5</TD><TD>0</TD><TD>2,5</TD>						
						</TR>
						</TABLE><br>
						<em>Hoogte</em>`=2a+0,5a`<sup>2</sup><br>
						<em>Hoogte</em>`=2`&sdot;`-5+0,5(-5)`<sup>2</sup><br>
						<em>Hoogte</em>`=-10+0,5`&sdot;`25`<br>
						<em>Hoogte</em>`=-10+12,5 = 2,5`<br>
					</td>
				</tr>

			</table>
			<table>
				<tr>
					<td width="60" style="vertical-align: top">Stap 2</td>
					<td width="150" style="vertical-align: top">Teken een assenstelsel.<br>
						Kijk goed naar de getallen in de tabel om te bepalen hoe lang je horizontale as en verticale as moet zijn.</td>
					<td> <img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/theorie_grafiek_tekenen_1.png"  width="225px" ></td>

				</tr>
				<tr>
					<td width="60" style="vertical-align: top">Stap 3</td>
					<td width="150" style="vertical-align: top">Teken de punten uit de tabel in het assenstelsel.</td>
					<td><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/theorie_grafiek_tekenen_2.png"  width="225px" ></td>
				</tr>
				<tr>
					<td width="60" style="vertical-align: top">Stap 4</td>
					<td width="150" style="vertical-align: top">Teken een vloeiende kromme (lijn) door de punten.<br>
					<aside class="tekstballon_theorie">
						Let op:<br>
						Stop de lijn niet bij het eerste en laatste punt, maar teken de grafiek door!
						</aside></td>
					<td><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/theorie_grafiek_tekenen_3.png"  width="225px" ></td>
				</tr>
				<tr>
					<td width="60" style="vertical-align: top">Stap 5</td>
					<td width="150" style="vertical-align: top">Zet de formule bij de grafiek.</td>
					<td><img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/theorie_grafiek_tekenen_4.png"  width="225px" ></td>
				</tr>
				</tbody>
				</table>
			</p>
	</div>

<!--opdracht-->
		<div class="tekstblok opdracht">
			<h3>Opdracht 18</h3>
			<p>Teken de grafiek bij de formule:<br>
			<em>y</em>`=3x`<sup>2</sup>`- 6x`.<br>
			Gebruik daarbij de volgende tabel:<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`x`</em></TD><TD>-2</TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD>
						</TR>
						<TR>
							<TD width="150px"><em>`y`</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>					
						</TR>
			</TABLE>
		</p>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">

				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`x`</em></TD><TD>-2</TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD>
						</TR>
						<TR>
							<TD width="150px"><em>`y`</em></TD><TD>24</TD><TD>9</TD><TD>0</TD><TD>-3</TD><TD>0</TD><TD>9</TD><TD>24</TD>					
						</TR>
				</TABLE><br>
				<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_18.png"  width="225px" >

			</div>		
		</div>

</div>

<!--opdracht-->
		<div class="tekstblok opdracht">
			<aside class="tekstballon_theorie" style="width:300px !important; height: 300px !important; ">
		<p>
			Gebruik `x^2` op je rekenmachine.<br>
			
			<img src="../afbeeldingen/vaar_kwadraten_en_wortels_2thv/texas_en_casio.png" alt="texas_en_casio" width="220" height="" />
		</p>
	</aside>
			<h3>Opdracht 19</h3>
			
			<p>Teken de grafiek bij de formule:<br>
			<em>y</em>`=-x`<sup>2</sup>`+ 4x`.<br>
			Gebruik daarbij de volgende tabel:<br>
			<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`x`</em></TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
						</TR>
						<TR>
							<TD width="150px"><em>`y`</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>					
						</TR>
			</TABLE>
		</p>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<TABLE FRAME="void" RULES="all"  width="500px" style= "text-align: center">
						<TR>
							<TD width="150px"><em>`x`</em></TD><TD>-1</TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD>
						</TR>
						<TR>
							<TD width="150px"><em>`y`</em></TD><TD>-5</TD><TD>0</TD><TD>3</TD><TD>4</TD><TD>3</TD><TD>0</TD><TD>-5</TD>					
						</TR>
			</TABLE><br>
			<img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_19.png"  width="225px" >
		
			</div>		
		</div>

</div>

<!-- opdracht -->
		<div class="tekstblok opdracht">
			<h3>Opdracht 20</h3>
			
			 <img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/foto_volleybal.PNG"  width="600px" >
			<p>Marit maakt een werkstuk over volleyballen.
				Op de foto hierboven zie je hoe Marit een bal onderhands wegslaat. In de
				tekening ernaast zie je de baan van de bal die vanaf de 1e achterlijn
				weggeslagen is. De bal gaat recht vooruit in de richting van de 2e achterlijn.
				Voor de baan van de bal gebruikt Marit de formule:<br>
				<br>
				<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
				<br>
				Hierin is <em>hoogte</em> de hoogte van de bal boven de grond en `a` de horizontale
				afstand vanaf het punt waar Marit de bal weggeslagen heeft. Zowel hoogte als
				`a` zijn in meters.
			</p>
				<ol>
					<li>
						Bereken met behulp van de formule op welke hoogte Marit de bal wegslaat. Schrijf je berekening op. 
					</li>
					<li>
						Neem de tabel hieronder over en vul hem in.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="400px" style= "text-align: center">
						<TR>
							<TD width="100px"><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
						</TR>
						<TR>
							<TD width="100px"><em>hoogte</em></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD><TD></TD>						
						</TR>
						</TABLE><br>
					</li>
					<li>
						Teken de grafiek van de hoogte.
					</li>
						<p>Een volleybalveld heeft een lengte van `18` meter. Het net hangt in het midden.
							De bovenkant van het net hangt `2,24` meter boven de grond. <br>
							
							 <img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/foto_veld.PNG"  width="350px" ><br>

							Hierboven zie je het bovenaanzicht van het volleybalveld en de baan van de bal. 
						</p>
					<li start="4">
						Laat met een berekening zien dat de afstand tussen de bal en de bovenkant van het
						net 56 cm. is. 
					</li>
					<li>
						Komt de bal voor of achter de 2<sup>e</sup> achterlijn voor het eerst op de grond?
						Laat zien hoe je aan je antwoord komt. 
				</ol>


<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*0` <sup>2</sup> ` + 0,7*0 + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*0 + 0,7*0 + 0,55`<br>
						<em>hoogte</em> ` = 0 + 0 + 0,55`<br>
						<em>hoogte</em> ` = 0`<br>
					</li>
						Neem de tabel hieronder over en vul hem in.<br>
						<br>
						<TABLE FRAME="void" RULES="all"  width="400px" style= "text-align: center">
						<TR>
							<TD width="100px"><em>`a`</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD><TD>4</TD><TD>5</TD><TD>6</TD><TD>7</TD><TD>8</TD><TD>9</TD><TD>10</TD><TD>11</TD><TD>12</TD>
						</TR>
						<TR>
							<TD width="100px"><em>hoogte</em></TD><TD>0,55</TD><TD>1,2</TD><TD>1.75</TD><TD>2,2</TD><TD>2,55</TD><TD>2,8</TD><TD>2,95</TD><TD>3</TD><TD>2,95</TD><TD>2,8</TD><TD>2,55</TD><TD>2,2</TD><TD>1,75</TD>						
						</TR>
						</TABLE><br>
					</li>
					<li>
						 <img src="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/volleybal.png"  width="350px" >
					</li>
					<li>
						Het veld is `18` meter lang. Het net hangt in het midden, dus op `9` meter. Vul  `a=9` in de formule in.<br>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*9` <sup>2</sup> ` + 0,7*9 + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*81 + 0,7*9 + 0,55`<br>
						<em>hoogte</em> ` = -4,05 + 6,3 + 0,55`<br>
						<em>hoogte</em> ` = 2,8`<br>
						Het net hangt op `2,24` meter en de bal komt op `2,8` meter.<br>
						Het net hangt op `224` centimeter en de bal komt op `280` centimeter.<br>
						Dus de bal komt `280-224 = 56` centimeter boven het net.
					</li>
					<li>
						De afstand tot de 2<sup>e</sup> achterlijn is `18` meter.<br>
						<em>hoogte</em> ` = − 0,05` &sdot; `a` <sup>2</sup> ` + 0,7`&sdot;`a + 0,55`<br>
						<em>hoogte</em> ` = − 0,05*18` <sup>2</sup> ` + 0,7*18 + 0,55`<br>
						<em>hoogte</em> ` = -3,05`<br>
						Dit is een negatief getal dus de bal komt voor de 2<sup>e</sup> achterlijn op de grond.
					</li>
				</ol>
						
			</div>		
		</div>
		
		<p>
		
		</p>
		
<!-- opdracht -->
		<div class="tekstblok theorie analyse">
			<h3>Oefentoets</h3>
			<p>
				Voor een oefentoets inclusief uitwerkingen, klik op:	<a href="afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/Kwadratische_verbanden_oefentoets.pdf" alt="Kwadratische_verbanden_oefentoets" target="_blank">Oefentoets</a>.
			<br>
				Maak de toets in 40 minuten met behulp van je eigen rekenmachine, pennen, potloden en geodriehoek.
			</p>
			<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<img src="../afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/Kwadratische_verbanden_oefentoets_uitwerkingen.pdf" alt="Kwadratische_verbanden_oefentoets_uitwerkingen" width="" height="" />
			</div>
			</div>
			
		</div>



</div>


<!--
<div class="tekstblok theorie analyse">
	<h3>Inhoud</h3>
	
		Voorkennis: vaardighedentaak waarin kwadraten en wortels sec worden behandeld.
		Waarin kom je kwadraten tegen, oppervlakte vierkanten en pythagoras.
	</p>
	<p>
		Kwadratische formules:
		<ol>
			<li>
				kwadratische verbanden;
			</li>
			<li>
				grafieken tekenen;
			</li>
			<li>
				herkennen van kwadratische verbanden (parabolen;
			</li>
			<li>
				grafieken herkennen (symmetrie, symmetrie-as);
			</li>
			<li>
				formule herkennen en gebruiken
			</li>
			<li>
				begrippen: symmetrie-as, parabool, berg- en dalparabool
			</li>
		</ol>
	</p>
</div>
-->